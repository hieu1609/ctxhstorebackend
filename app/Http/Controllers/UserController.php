<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\ProductReviews;
use App\OrderDetail;
use App\OrderTable;
use App\Notification;

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

    /**
     * @SWG\Get(
     *     path="/user/getAllPurchases",
     *     description="Get all purchases",
     *     tags={"User"},
     *     summary="Get all purchases",
     *     security={{"jwt":{}}},
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getAllPurchases(Request $request)
    {
        try {
            $result = OrderDetail::getAllPurchases($request->user->id);

            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/user/getPurchasesReceived",
     *     description="Get purchases received",
     *     tags={"User"},
     *     summary="Get purchases received",
     *     security={{"jwt":{}}},
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getPurchasesReceived(Request $request)
    {
        try {
            $result = OrderDetail::getPurchasesReceived($request->user->id);

            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/user/getPurchasesConfirm",
     *     description="Get purchases confirm",
     *     tags={"User"},
     *     summary="Get purchases confirm",
     *     security={{"jwt":{}}},
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getPurchasesConfirm(Request $request)
    {
        try {
            $result = OrderDetail::getPurchasesConfirm($request->user->id);

            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/user/getPurchasesShipping",
     *     description="Get purchases shipping",
     *     tags={"User"},
     *     summary="Get purchases shipping",
     *     security={{"jwt":{}}},
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getPurchasesShipping(Request $request)
    {
        try {
            $result = OrderDetail::getPurchasesShipping($request->user->id);

            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    /**
     * @SWG\Get(
     *     path="/user/getPurchasesCompleted",
     *     description="Get purchases completed",
     *     tags={"User"},
     *     summary="Get purchases completed",
     *     security={{"jwt":{}}},
     *      @SWG\Response(response=200, description="Successful"),
     *      @SWG\Response(response=401, description="Unauthorized"),
     *      @SWG\Response(response=403, description="Forbidden"),
     *      @SWG\Response(response=422, description="Unprocessable Entity"),
     *      @SWG\Response(response=500, description="Internal Server Error"),
     * )
     */
    public function getPurchasesCompleted(Request $request)
    {
        try {
            $result = OrderDetail::getPurchasesCompleted($request->user->id);

            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

     /**
     * @SWG\Delete(
     *     path="/user/CancelOrder",
     *     description="Cancel order",
     *     tags={"User"},
     *     summary="Cancel order",
     *     security={{"jwt":{}}},
     *      @SWG\Parameter(
     *          name="body",
     *          description="Cancel order",
     *          required=true,
     *          in="body",
     *          @SWG\Schema(
     *              @SWG\property(
     *                  property="orderId",
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

    public function CancelOrder(Request $request)
    {
        try {
            $validator = OrderDetail::validate($request->all(), 'Cancel_Order');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderTable = OrderTable::where(['id' => $request->orderId])->first();
            if (!$checkOrderTable) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            if ($checkOrderTable->user != $request->user->id){
                return $this->responseErrorCustom("user_priority", 403);
            }
            $checkOrderDetail = OrderDetail::where(['order_id' => $request->orderId])->get();
            if (!$checkOrderDetail) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            for ($i = 0; $i < count($checkOrderDetail); $i++){
                if ($checkOrderDetail[$i]->shipping == 1){
                    return $this->responseErrorCustom("cannot_cancel_order", 403);
                }
            }
            for ($i = 0; $i < count($checkOrderDetail); $i++){
                $checkOrderDetail[$i]->delete();
            }
            $checkOrderTable->delete();
            return $this->responseSuccess("Cancel order successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getNotifications(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/user/getNotifications",
         *     description="Get notifications",
         *     tags={"User"},
         *     summary="Get notifications",
         *     security={{"jwt":{}}},
         *     @SWG\Parameter(
         *          name="body",
         *          description="Get notifications",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="page",
         *                  type="integer",
         *              ),
         *          ),
         *      ),
         *      @SWG\Response(response=200, description="Successful operation"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = Notification::validate($request->all(), 'Get_Notifications');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result = Notification::getNotifications($request->user->id, $request->page);
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    public function postFeedback(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/user/postFeedback",
         *     description="Send feedback for admin",
         *     tags={"User"},
         *     summary="Send feedback",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Parameter(
         *          name="body",
         *          description="Send feedback for admin",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="feedbackTitle",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="feedbackContent",
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

        try {
            $validator = Notification::validate($request->all(), 'Post_Feedback');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            
            $feedback = new Notification;
            $feedback->user_id_send = $request->user->id;
            $feedback->user_id_receive = 1;
            $feedback->title = $request->feedbackTitle;
            $feedback->content = $request->feedbackContent;
            $feedback->save();
            return $this->responseSuccess("Send feedback successfully");

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function seenNotification(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/user/seenNotification",
         *     description="Seen notification",
         *     tags={"User"},
         *     summary="Seen notification",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Parameter(
         *          name="body",
         *          description="Seen notification",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="notificationId",
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

        try {
            $validator = Notification::validate($request->all(), 'Seen_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkNotificationId = Notification::where([['user_id_receive', $request->user->id],['id', $request->notificationId]])->first();
            if (!$checkNotificationId) {
                return $this->responseErrorCustom("notification_id_not_found", 404);
            }
            else {
                $checkNotificationId->update(['seen' => true]);
                return $this->responseSuccess("Seen notification successfully");
            }
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
}
