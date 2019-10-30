<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\OrderTable;
use App\OrderDetail;
use App\SlideShow;

class DataController extends BaseApiController
{
    /**
     * @SWG\Get(
     *     path="/data/getProductCategory",
     *     description="get product category",
     *     tags={"Data"},
     *     summary="get product category",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getProductCategory(Request $request)
    {
        try {
            $dataProductCategory = ProductCategory::getProductCategory();
            return $this->responseSuccess($dataProductCategory);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
    
    /**
     * @SWG\Post(
     *     path="/data/getProductByCategoryId",
     *     description="Get product by category id",
     *     tags={"Data"},
     *     summary="Get product by category id",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Get product by category id",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="categoryId",
     *                  type="integer",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getProductByCategoryId(Request $request)
    {
        try {
            $validator = Product::validate($request->all(), 'Get_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkCategoryId = ProductCategory::where([['id', $request->categoryId]])->first();
            if (!$checkCategoryId) {
                return $this->responseErrorCustom("category_id_not_found", 404);
            }
            $dataProduct = Product::getProductByCategoryId($request->categoryId);
            return $this->responseSuccess($dataProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/data/getNewProduct",
     *     description="get new product",
     *     tags={"Data"},
     *     summary="get new product",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getNewProduct(Request $request)
    {
        try {
            $dataNewProduct = Product::getNewProduct();
            return $this->responseSuccess($dataNewProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
    
    /**
     * @SWG\Post(
     *     path="/data/postInforUser",
     *     description="Post information user",
     *     tags={"Data"},
     *     summary="Post information user",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Post information user",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="name",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="phone",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="address",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="email",
     *                  type="string",
     *              ),
     *              @SWG\property(
     *                  property="user",
     *                  type="integer",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function postInforUser(Request $request)
    {
        try {
            $validator = OrderTable::validate($request->all(), 'Post_Infor_User');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $userInfor = new OrderTable;
            $userInfor->name = $request->name;
            $userInfor->phone = $request->phone;
            $userInfor->address = $request->address;
            $userInfor->email = $request->email;
            $userInfor->user = $request->user;
            $userInfor->save();
            return $this->responseSuccess("Post order table successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/data/postOrderDetail",
     *     description="Post order detail",
     *     tags={"Data"},
     *     summary="Post order detail",
     *
     *      @SWG\Parameter(
     *          name="body",
     *          description="Post order detail",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="orderId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *               @SWG\property(
     *                  property="productName",
     *                  type="string",
     *              ),
     *               @SWG\property(
     *                  property="productPrice",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="productNumber",
     *                  type="integer",
     *              ),
     *          ),
     *      ),
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function postOrderDetail(Request $request)
    {
        try {
            $validator = OrderDetail::validate($request->all(), 'Post_Order_Detail');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderId = OrderTable::where(['id' => $request->orderId])->first();
            if (!$checkOrderId) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            $checkProductId = Product::where(['id' => $request->productId])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $request->orderId;
            $orderDetail->product_id = $request->productId;
            $orderDetail->product_name = $request->productName;
            $orderDetail->product_price = $request->productPrice;
            $orderDetail->product_number = $request->productNumber;
            $orderDetail->save();
            return $this->responseSuccess("Post order table successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/data/getSlideShow",
     *     description="get slide show",
     *     tags={"Data"},
     *     summary="get slide show",
     *
     *      @SWG\Response(response=200, description="Successful operation"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getSlideShow(Request $request)
    {
        try {
            $dataSlideShow = SlideShow::getSlideShow();
            return $this->responseSuccess($dataSlideShow);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
}
