<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\ProductReviews;

class UserController extends BaseApiController
{
    public function editUserProfile(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/user/editUserProfile",
         *     description="Edit your profile",
         *     tags={"User"},
         *     summary="Edit profile",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Edit your profile",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="name",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="phone",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="address",
         *                  type="string",
         *              ),
         *          ),
         *      ),
         *      @SWG\Response(response=200, description="Successful"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=404, description="Not Found"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = User::validate($request->all(), 'Edit_User_Profile');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $user = User::where(['id' => $request->user->id])->first();
            if (!$user) {
                return $this->responseErrorCustom("users_not_found", 404);
            }

            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return $this->responseSuccess($user);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Post(
     *     path="/user/postReview",
     *     description="Post review product",
     *     tags={"User"},
     *     summary="Post review product",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Post review product",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="productId",
     *                  type="integer",
     *              ),
     *              @SWG\property(
     *                  property="rating",
     *                  type="integer",
     *              ),
     *               @SWG\property(
     *                  property="comment",
     *                  type="string",
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
    public function postReview(Request $request)
    {
        try {
            $validator = ProductReviews::validate($request->all(), 'Post_Review');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            if($request->rating > 5 or $request->rating < 1) {
                return $this->responseErrorCustom("rating_incorrect", 403);
            }
            $checkProduct = Product::where([['id', $request->productId]])->first();
            if (!$checkProduct){
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            else {
                $productReviews = ProductReviews::updateOrCreate(
                    [
                        'user_id' => $request->user->id,
                        'product_id' => $request->productId,
                    ],
                    [
                        'user_id' => $request->user->id,
                        'product_id' => $request->productId,
                        'rating' => $request->rating,
                        'comment' => $request->comment,
                    ]
                );
                $getAVG = ProductReviews::getAVGRatingProduct($request->productId);
                $checkProduct->rating = $getAVG;
                $checkProduct->save();
            }
            return $this->responseSuccess($checkProduct);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
}
