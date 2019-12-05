<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\ProductCategory;
use App\Notification;
use App\SlideShow;
use App\OrderDetail;
use App\OrderTable;
use App\TopUsers;
use App\TopProducts;
use Illuminate\Http\Request;

class AdminController extends BaseApiController
{
    public function getSlideShowAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getSlideShowAdmin",
         *     description="Get slide show",
         *     tags={"Admin"},
         *     summary="Get slide show",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get slide show",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = SlideShow::validate($request->all(), 'Get_Slide_Show_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result['data'] = SlideShow::getSlideShowAdmin($request->page);
            $result['numPage'] = ceil(SlideShow::count()/10);
            $result['total'] = SlideShow::count();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    public function addSlideShow(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/addSlideShow",
         *     description="Add slide show",
         *     tags={"Admin"},
         *     summary="Add slide show",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Add slide show",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="image",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="title",
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
            $validator = SlideShow::validate($request->all(), 'Add_Slide_Show');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $slideShow = new SlideShow;
            $slideShow->image = $request->image;
            $slideShow->title = $request->title;
            $slideShow->save();
            return $this->responseSuccess("Add slide show successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function editSlideShow(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/admin/slideshow/{slideShowId}",
         *     description="Edit slide show",
         *     tags={"Admin"},
         *     summary="Edit slide show",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID slide show to edit",
         *         in="path",
         *         name="slideShowId",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Parameter(
         *          name="body",
         *          description="Edit slide show",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="image",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="title",
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
            $input = $request->all();
            $input['slideShowId'] = $request->slideShowId;
            $validator = SlideShow::validate($input, 'Edit_Slide_Show');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $checkSlideShowId = SlideShow::where(['id' => $request->slideShowId])->first();
            if (!$checkSlideShowId) {
                return $this->responseErrorCustom("slide_show_id_not_found", 404);
            }

            $checkSlideShowId->image = $request->image;
            $checkSlideShowId->title = $request->title;
            $checkSlideShowId->save();
            return $this->responseSuccess($checkSlideShowId);

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }
    
    public function deleteSlideShow(Request $request)
    {
        /**
         * @SWG\Delete(
         *     path="/admin/slideshow/{slideShowId}",
         *     description="Delete slide show",
         *     tags={"Admin"},
         *     summary="Delete slide show",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID slide show to delete",
         *         in="path",
         *         name="slideShowId",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Response(response=200, description="Successful"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=404, description="Not Found"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $input['slideShowId'] = $request->slideShowId;
            $validator = SlideShow::validate($input, 'Delete_Slide_Show');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkSlideShowId = SlideShow::where(['id' => $request->slideShowId])->first();
            if (!$checkSlideShowId) {
                return $this->responseErrorCustom("slide_show_id_not_found", 404);
            }
            $checkSlideShowId->delete();
            return $this->responseSuccess("Delete slide show successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getUserAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getUserAdmin",
         *     description="Get user",
         *     tags={"Admin"},
         *     summary="Get user",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get user",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = User::validate($request->all(), 'Get_User_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result['data'] = User::getUserAdmin($request->page);
            $result['numPage'] = ceil(User::count()/10);
            $result['total'] = User::count();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    public function addUser(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/addUser",
         *     description="Add user",
         *     tags={"Admin"},
         *     summary="Add user",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Add user",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="email",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="password",
         *                  type="string",
         *              ),
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
         *              @SWG\Property(
         *                  property="admin",
         *                  type="boolean",
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
            $validator = User::validate($request->all(), 'Rule_AddUser');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $user = new User;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->admin = $request->admin;
            $user->save();
            return $this->responseSuccess("Add User successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function editUser(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/admin/{id}",
         *     description="Edit user",
         *     tags={"Admin"},
         *     summary="Edit user",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID user to edit",
         *         in="path",
         *         name="id",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Parameter(
         *          name="body",
         *          description="Edit user",
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
         *              @SWG\Property(
         *                  property="admin",
         *                  type="boolean",
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
            $input = $request->all();
            $input['userId'] = $request->id;

            $validator = User::validate($input, 'Rule_EditUser');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $userId = $request->id;
            $user = User::where(['id' => $userId])->first();
            if (!$user) {
                return $this->responseErrorCustom("users_not_found", 404);
            }

            $countAdmin = User::where(['admin' => 1])->count();
            if ($countAdmin <= 1 && $request->admin == false && $user->admin == true) {
                return $this->responseErrorCustom("can_not_edit_user", 403); //min number of admin is 1
            }

            $request->admin ?  $user->admin = 1 : $user->admin = 0;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return $this->responseSuccess($user);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function deleteUser(Request $request)
    {
        /**
         * @SWG\Delete(
         *     path="/admin/{id}",
         *     description="Delete user",
         *     tags={"Admin"},
         *     summary="Delete user",
         *     security={{"jwt":{}}},
         *     @SWG\Parameter(
         *         description="ID user to delete",
         *         in="path",
         *         name="id",
         *         required=true,
         *         type="integer",
         *         format="int64"
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
            $validator = User::validate(["userId" => $request->id], 'Rule_DeleteUser');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $userId = $request->id; //only for easy to under what is $request->id.
            $user = User::where(['id' => $userId])->first();
            if (!$user) {
                return $this->responseErrorCustom("users_not_found", 404);
            }

            $countAdmin = User::where(['admin' => 1])->count();
            if ($countAdmin <= 1 && $user->admin == true) {
                return $this->responseErrorCustom("can_not_delete_user", 403); //Forbidden
            }

            $user->delete();
            return $this->responseSuccess("Delete user successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getAllUser(Request $request)
    {
        /**
         * @SWG\Get(
         *     path="/admin/all-user",
         *     description="Get list users",
         *     tags={"Admin"},
         *     summary="Get list users",
         *     security={{"jwt":{}}},
         *       @SWG\Parameter(
         *          name="page",
         *          description="Query page",
         *          in="query",
         *          type="number",
         *          required=true
         *      ),
         *       @SWG\Parameter(
         *          name="limit",
         *          description="Query limit records per page",
         *          in="query",
         *          type="number"
         *      ),
         *
         *      @SWG\Parameter(
         *          name="searchBy",
         *          description="Query searchBy column",
         *          in="query",
         *          type="string"
         *      ),
         *
         *      @SWG\Parameter(
         *          name="keyword",
         *          description="Query search",
         *          in="query",
         *          type="string"
         *      ),
         *
         *      @SWG\Parameter(
         *          name="sortBy",
         *          description="Query sortBy column",
         *          in="query",
         *          type="string"
         *      ),
         *
         *       @SWG\Parameter(
         *          name="sort",
         *          description="Query sort",
         *          in="query",
         *          type="string"
         *      ),
         *
         *       @SWG\Parameter(
         *          name="admin",
         *          description="Query admin",
         *          in="query",
         *          type="boolean"
         *      ),
         *
         *      @SWG\Response(response=200, description="Successful"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $input = $request->all();
            if (isset($input['admin'])) {
                $input['admin'] == 'true' ? $input['admin'] = 1 : $input['admin'] = 0;
            }

            $validator = User::validate($input, 'Rule_Get_All_User');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $results = User::funcGetAllUser($input);

            if ($results['error']) {
                return $this->responseErrorCustom($results['errorCode']);
            }
            return $this->responseSuccess($results['data']);

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getFeedbackAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getFeedbackAdmin",
         *     description="Get feedback",
         *     tags={"Admin"},
         *     summary="Get feedback",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get feedback",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = Notification::validate($request->all(), 'Get_Notifications_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = Notification::where(['user_id_receive' => 1])->count();
            $result['data'] = Notification::getFeedbackAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    public function getNotificationsAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getNotificationsAdmin",
         *     description="Get notifications",
         *     tags={"Admin"},
         *     summary="Get notifications",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = Notification::validate($request->all(), 'Get_Notifications_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = Notification::where(['user_id_send' => 1])->count();
            $result['data'] = Notification::getNotificationsAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    public function sendNotification(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/sendNotification",
         *     description="Send notification for user",
         *     tags={"Admin"},
         *     summary="Send notification",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Parameter(
         *          name="body",
         *          description="Send notification for user",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="userId",
         *                  type="integer",
         *              ),
         *              @SWG\property(
         *                  property="notificationTitle",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="notificationContent",
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
            $validator = Notification::validate($request->all(), 'Send_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            
            $checkId = User::where(['id' => $request->userId])->first();
            if (!$checkId) {
                return $this->responseErrorCustom("id_not_found", 404);
            }

            if ($request->userId === $request->user->id) {
                return $this->responseErrorCustom("that_is_your_id", 403);
            }

            $notification = new Notification;
            $notification->user_id_send = 1;
            $notification->user_id_receive = $request->userId;
            $notification->title = $request->notificationTitle;
            $notification->content = $request->notificationContent;
            $notification->save();
            return $this->responseSuccess("Send notification successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function sendNotificationForAllUsers(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/sendNotificationForAllUsers",
         *     description="Send notification for all users",
         *     tags={"Admin"},
         *     summary="Send notification",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Parameter(
         *          name="body",
         *          description="Send notification for all users",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="notificationTitle",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="notificationContent",
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
            $validator = Notification::validate($request->all(), 'Send_Notification_All_Users');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $allUserId = User::getUserId();
            for ($i = 0; $i < count($allUserId); $i++) {
                $notification = new Notification;
                $notification->user_id_send = 1;
                $notification->user_id_receive = $allUserId[$i]->id;
                $notification->title = $request->notificationTitle;
                $notification->content = $request->notificationContent;
                $notification->save();
            }
            return $this->responseSuccess("Send notification for all users successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function editNotification(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/admin/notification/{notificationId}",
         *     description="Edit notification",
         *     tags={"Admin"},
         *     summary="Edit notification",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID notification to edit",
         *         in="path",
         *         name="notificationId",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Parameter(
         *          name="body",
         *          description="Edit notification",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="userIdSend",
         *                  type="integer",
         *              ),
         *              @SWG\Property(
         *                  property="userIdReceive",
         *                  type="integer",
         *              ),
         *              @SWG\Property(
         *                  property="notificationTitle",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="notificationContent",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="seen",
         *                  type="boolean",
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
            $input = $request->all();
            $input['notificationId'] = $request->notificationId;
            $validator = Notification::validate($input, 'Edit_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }

            $checkUserIdSend = User::where(['id' => $request->userIdSend])->first();
            if (!$checkUserIdSend) {
                return $this->responseErrorCustom("user_id_send_not_found", 404);
            }

            $checkUserIdReceive = User::where(['id' => $request->userIdReceive])->first();
            if (!$checkUserIdReceive) {
                return $this->responseErrorCustom("user_id_receive_not_found", 404);
            }
            
            $checkNotification = Notification::where(['id' => $request->notificationId])->first();
            if (!$checkNotification) {
                return $this->responseErrorCustom("notification_id_not_found", 404);
            }

            $checkNotification->user_id_send = $request->userIdSend;
            $checkNotification->user_id_receive = $request->userIdReceive;
            $checkNotification->title = $request->notificationTitle;
            $checkNotification->content = $request->notificationContent;
            $checkNotification->seen = $request->seen;
            $checkNotification->save();
            return $this->responseSuccess($checkNotification);

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function deleteNotification(Request $request)
    {
        /**
         * @SWG\Delete(
         *     path="/admin/notification/{notificationId}",
         *     description="Delete notification",
         *     tags={"Admin"},
         *     summary="Delete notification",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID notification to delete",
         *         in="path",
         *         name="notificationId",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Response(response=200, description="Successful"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=404, description="Not Found"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $input['notificationId'] = $request->notificationId;
            $validator = Notification::validate($input, 'Delete_Notification');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkNotification = Notification::where(['id' => $request->notificationId])->first();
            if (!$checkNotification) {
                return $this->responseErrorCustom("notification_id_not_found", 404);
            }

            $checkNotification->delete();
            return $this->responseSuccess("Delete notification successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getProductAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getProductAdmin",
         *     description="Get product",
         *     tags={"Admin"},
         *     summary="Get product",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get product",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = Product::validate($request->all(), 'Get_Product_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $result['data'] = Product::getProductAdmin($request->page);
            $result['numPage'] = ceil(Product::count()/10);
            $result['total'] = Product::count();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getAllProductAdmin(Request $request)
    {
        /**
         * @SWG\Get(
         *     path="/admin/getAllProductAdmin",
         *     description="Get all product",
         *     tags={"Admin"},
         *     summary="Get all product",
         *     security={{"jwt":{}}},
         * 
         *      @SWG\Response(response=200, description="Successful operation"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $result = Product::get();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function addProduct(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/addProduct",
         *     description="Add product",
         *     tags={"Admin"},
         *     summary="Add product",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Add product",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="productName",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="productPrice",
         *                  type="integer",
         *              ),
         *              @SWG\Property(
         *                  property="productImage",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="description",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="categoryId",
         *                  type="integer",
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
            $validator = Product::validate($request->all(), 'Add_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkCategoryId = ProductCategory::where(['id' => $request->categoryId])->first();
            if (!$checkCategoryId) {
                return $this->responseErrorCustom("category_id_not_found", 404);
            }
            $product = new Product;
            $product->product_name = $request->productName;
            $product->price = $request->productPrice;
            $product->product_image = $request->productImage;
            $product->description = $request->description;
            $product->category_id = $request->categoryId;
            $product->save();
            return $this->responseSuccess("Add product successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function editProduct(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/admin/product/{productId}",
         *     description="Edit product",
         *     tags={"Admin"},
         *     summary="Edit product",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID product to edit",
         *         in="path",
         *         name="productId",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Parameter(
         *          name="body",
         *          description="Edit product",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\Property(
         *                  property="productName",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="productPrice",
         *                  type="integer",
         *              ),
         *              @SWG\Property(
         *                  property="productImage",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="description",
         *                  type="string",
         *              ),
         *              @SWG\Property(
         *                  property="categoryId",
         *                  type="integer",
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
            $input = $request->all();
            $input['productId'] = $request->productId;
            $validator = Product::validate($input, 'Edit_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkCategoryId = ProductCategory::where(['id' => $request->categoryId])->first();
            if (!$checkCategoryId) {
                return $this->responseErrorCustom("category_id_not_found", 404);
            }
            $checkProductId = Product::where(['id' => $request->productId])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $checkProductId->product_name = $request->productName;
            $checkProductId->price = $request->productPrice;
            $checkProductId->product_image = $request->productImage;
            $checkProductId->description = $request->description;
            $checkProductId->category_id = $request->categoryId;
            $checkProductId->save();
            return $this->responseSuccess($checkProductId);

        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function deleteProduct(Request $request)
    {
        /**
         * @SWG\Delete(
         *     path="/admin/product/{productId}",
         *     description="Delete product",
         *     tags={"Admin"},
         *     summary="Delete product",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *         description="ID product to delete",
         *         in="path",
         *         name="productId",
         *         required=true,
         *         type="integer",
         *         format="int64"
         *     ),
         *      @SWG\Response(response=200, description="Successful"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=404, description="Not Found"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $input['productId'] = $request->productId;
            $validator = Product::validate($input, 'Delete_Product');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkProductId = Product::where(['id' => $request->productId])->first();
            if (!$checkProductId) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $checkOrderProduct = OrderDetail::where(['product_id' => $request->productId])->first();
            if ($checkOrderProduct) {
                return $this->responseErrorCustom("could_not_delete_product", 404);
            }
            $checkProductId->delete();
            return $this->responseSuccess("Delete product successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getPurchasesReceivedAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getPurchasesReceivedAdmin",
         *     description="Get purchases received admin",
         *     tags={"Admin"},
         *     summary="Get purchases received admin",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get purchases received admin",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = OrderDetail::validate($request->all(), 'Get_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = OrderDetail::where(['confirm' => 0, 'shipping' => 0, 'success' => 0])->count();
            $result['data'] = OrderDetail::getPurchasesReceivedAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getPurchasesConfirmAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getPurchasesConfirmAdmin",
         *     description="Get purchases confirm admin",
         *     tags={"Admin"},
         *     summary="Get purchases confirm admin",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get purchases confirm admin",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = OrderDetail::validate($request->all(), 'Get_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = OrderDetail::where(['confirm' => 1, 'shipping' => 0, 'success' => 0])->count();
            $result['data'] = OrderDetail::getPurchasesConfirmAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getPurchasesShippingAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getPurchasesShippingAdmin",
         *     description="Get purchases shipping admin",
         *     tags={"Admin"},
         *     summary="Get purchases shipping admin",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get purchases shipping admin",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = OrderDetail::validate($request->all(), 'Get_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = OrderDetail::where(['confirm' => 1, 'shipping' => 1, 'success' => 0])->count();
            $result['data'] = OrderDetail::getPurchasesShippingAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getPurchasesCompletedAdmin(Request $request)
    {
        /**
         * @SWG\Post(
         *     path="/admin/getPurchasesCompletedAdmin",
         *     description="Get purchases completed admin",
         *     tags={"Admin"},
         *     summary="Get purchases completed admin",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Get purchases completed admin",
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
         *      @SWG\Response(response=403, description="Forbidden"),
         *      @SWG\Response(response=422, description="Unprocessable Entity"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */

        try {
            $validator = OrderDetail::validate($request->all(), 'Get_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $total = OrderDetail::where(['confirm' => 1, 'shipping' => 1, 'success' => 1])->count();
            $result['data'] = OrderDetail::getPurchasesCompletedAdmin($request->page);
            $result['numPage'] = ceil($total/10);
            $result['total'] = $total;
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function editPurchasesAdmin(Request $request)
    {
        /**
         * @SWG\Put(
         *     path="/admin/order/editPurchasesAdmin",
         *     description="Edit purchases admin",
         *     tags={"Admin"},
         *     summary="Edit purchases admin",
         *     security={{"jwt":{}}},
         *      @SWG\Parameter(
         *          name="body",
         *          description="Edit purchases admin",
         *          required=true,
         *          in="body",
         *          @SWG\Schema(
         *              @SWG\property(
         *                  property="id",
         *                  type="integer",
         *              ),
         *              @SWG\property(
         *                  property="orderId",
         *                  type="integer",
         *              ),
         *              @SWG\property(
         *                  property="productId",
         *                  type="integer",
         *              ),
         *              @SWG\property(
         *                  property="productNumber",
         *                  type="integer",
         *              ),
         *              @SWG\property(
         *                  property="confirm",
         *                  type="boolean",
         *              ),
         *              @SWG\property(
         *                  property="shipping",
         *                  type="boolean",
         *              ),
         *              @SWG\property(
         *                  property="success",
         *                  type="boolean",
         *              ),
         *              @SWG\property(
         *                  property="name",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="phone",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="address",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="email",
         *                  type="string",
         *              ),
         *              @SWG\property(
         *                  property="userId",
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
            $validator = OrderDetail::validate($request->all(), 'Edit_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderDetail = OrderDetail::where(['id' => $request->id])->first();
            if (!$checkOrderDetail) {
                return $this->responseErrorCustom("detail_id_not_found", 404);
            }
            $oldProductId = $checkOrderDetail->product_id;
            $checkOrderTable = OrderTable::where(['id' => $request->orderId])->first();
            if (!$checkOrderTable) {
                return $this->responseErrorCustom("order_id_not_found", 404);
            }
            $oldUser = $checkOrderTable->user;
            $checkProduct = Product::where(['id' => $request->productId])->first();
            if (!$checkProduct) {
                return $this->responseErrorCustom("product_id_not_found", 404);
            }
            $confirm = $request->confirm;
            $shipping = $request->shipping;
            $success = $request->success;
            if ($request->success == true){
                $confirm = true;
                $shipping = true;
            }
            else if ($request->shipping == true && $request->success == false){
                $confirm = true;
            }
            $user = null;
            $checkuserId = User::where(['id' => $request->userId])->first();
            if (!$checkuserId) {
                $name = $request->name;
                $phone = $request->phone;
                $address = $request->address;
                $email = $request->email;
            }
            else {
                $name = $checkuserId->name;
                $phone = $checkuserId->phone;
                $address = $checkuserId->address;
                $email = $checkuserId->email;
                $user = $checkuserId->id;
            }

            //save order detail
            $checkOrderDetail->order_id = $request->orderId;
            $checkOrderDetail->product_id = $request->productId;
            $checkOrderDetail->product_name = $checkProduct->product_name;
            $checkOrderDetail->product_price = $checkProduct->price * $request->productNumber;
            $checkOrderDetail->product_number = $request->productNumber;
            $checkOrderDetail->confirm = $confirm;
            $checkOrderDetail->shipping = $shipping;
            $checkOrderDetail->success = $success;
            $checkOrderDetail->save();

            //save order table
            $checkOrderTable->name = $name;
            $checkOrderTable->phone = $phone;
            $checkOrderTable->address = $address;
            $checkOrderTable->email = $email;
            $checkOrderTable->user = $user;
            $checkOrderTable->save();

            //save top products
            if ($oldProductId != $request->productId) {
                $totalProduct = OrderDetail::getTotalProductsById($oldProductId);
                $topProducts = TopProducts::updateOrCreate(
                    [
                        'product_id' => $oldProductId,
                    ],
                    [
                        'product_id' => $oldProductId,
                        'total_products' => $totalProduct,
                    ]
                );
            }

            $totalProduct = OrderDetail::getTotalProductsById($request->productId);
            $topProducts = TopProducts::updateOrCreate(
                [
                    'product_id' => $request->productId,
                ],
                [
                    'product_id' => $request->productId,
                    'total_products' => $totalProduct,
                ]
            );

            //save top users
            if ($oldUser != null) {
                $totalMoney = OrderDetail::getTotalMoneyById($oldUser);
                $topUsers = TopUsers::updateOrCreate(
                    [
                        'user_id' => $oldUser,
                    ],
                    [
                        'user_id' => $oldUser,
                        'total_money' => $totalMoney,
                    ]
                );
            }
            if ($user != null) {
                $totalMoney = OrderDetail::getTotalMoneyById($user);
                $topUsers = TopUsers::updateOrCreate(
                    [
                        'user_id' => $user,
                    ],
                    [
                        'user_id' => $user,
                        'total_money' => $totalMoney,
                    ]
                );
            }

            return $this->responseSuccess("Edit order successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function deletePurchasesAdmin(Request $request)
    {
        /**
         * @SWG\Delete(
         *     path="/admin/order/{id}",
         *     description="Delete purchases admin",
         *     tags={"Admin"},
         *     summary="Delete purchases admin",
         *     security={{"jwt":{}}},
         *     @SWG\Parameter(
         *         description="ID purchases to delete",
         *         in="path",
         *         name="id",
         *         required=true,
         *         type="integer",
         *         format="int64"
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
            $input['id'] = $request->id;
            $validator = OrderDetail::validate($input, 'Delete_Purchases_Admin');
            if ($validator) {
                return $this->responseErrorValidator($validator, 422);
            }
            $checkOrderDetail = OrderDetail::where(['id' => $request->id])->first();
            if (!$checkOrderDetail) {
                return $this->responseErrorCustom("detail_id_not_found", 404);
            }

            //save top products
            $oldProductId = $checkOrderDetail->product_id;
            $totalProduct = OrderDetail::getTotalProductsById($oldProductId);
            $topProducts = TopProducts::updateOrCreate(
                [
                    'product_id' => $oldProductId,
                ],
                [
                    'product_id' => $oldProductId,
                    'total_products' => $totalProduct,
                ]
            );
            $orderId = $checkOrderDetail->order_id;

            //delete order detail by id
            $checkOrderDetail->delete();

            $checkOrderTable = OrderTable::where(['id' => $orderId])->first();
            $user = $checkOrderTable->user;

            //save top users
            if ($user != null) {
                $totalMoney = OrderDetail::getTotalMoneyById($user);
                $topUsers = TopUsers::updateOrCreate(
                    [
                        'user_id' => $user,
                    ],
                    [
                        'user_id' => $user,
                        'total_money' => $totalMoney,
                    ]
                );
            }

            $checkOrderDetailAfter = OrderDetail::where(['order_id' => $orderId])->first();
            if (!$checkOrderDetailAfter) {
                if (!$checkOrderTable) {
                    return $this->responseErrorCustom("order_id_not_found", 404);
                }
                else {
                    $checkOrderTable->delete();
                }
            }
            return $this->responseSuccess("Delete successfully");
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), 99999, 500);
        }
    }

    public function getProductDataChart(Request $request)
    {
        /**
         * @SWG\Get(
         *     path="/admin/getProductDataChart",
         *     description="get product data chart",
         *     tags={"Admin"},
         *     summary="get product data chart",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Response(response=200, description="Successful operation"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */
        try {
            $result = TopProducts::getProductDataChart();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }

    public function getUserDataChart(Request $request)
    {
        /**
         * @SWG\Get(
         *     path="/admin/getUserDataChart",
         *     description="get user data chart",
         *     tags={"Admin"},
         *     summary="get user data chart",
         *     security={{"jwt":{}}},
         *
         *      @SWG\Response(response=200, description="Successful operation"),
         *      @SWG\Response(response=401, description="Unauthorized"),
         *      @SWG\Response(response=500, description="Internal Server Error"),
         * )
         */
        try {
            $result = TopUsers::getUserDataChart();
            return $this->responseSuccess($result);
        } catch (\Exception $exception) {
            return $this->responseErrorException($exception->getMessage(), $exception->getCode(), 500);
        }
    }
}
