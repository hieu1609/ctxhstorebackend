<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends BaseModel
{
    protected $table = 'notification';
    protected $fillable = [
        'user_id_send', 'user_id_receive', 'title', 'content', 'seen'
    ];

    public static $rules = array(
        'Post_Feedback' => [
            'feedbackTitle' => 'required|string|max:50',
            'feedbackContent' => 'required|string|max:2000'
        ],
        'Send_Notification' => [
            'userId' => 'required|integer',
            'notificationTitle' => 'required|string|max:50',
            'notificationContent' => 'required|string|max:2000'
        ],
        'Seen_Notification' => [
            'notificationId' => 'required|integer'
        ],
        'Send_Notification_All_Users' => [
            'notificationTitle' => 'required|string|max:50',
            'notificationContent' => 'required|string|max:2000'
        ],
        'Edit_Notification' => [
            'notificationId' => 'required|integer',
            'userIdSend' => 'required|integer',
            'userIdReceive' => 'required|integer',
            'notificationTitle' => 'required|string|max:50',
            'notificationContent' => 'required|string|max:2000',
            'seen' => 'required|boolean'
        ],
        'Delete_Notification' => [
            'notificationId' => 'required|integer'
        ],
        'Get_Notifications_Admin' => [
            'page' => 'required|integer'
        ],
    );

    public static function getNotificationsAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Notification::join('users', 'notification.user_id_receive', '=', 'users.id')
        ->orderBy('notification.id', 'desc')
        ->where('notification.user_id_send', 1)
        ->limit($limit)
        ->offset($space)
        ->get(['notification.*', 'users.name', 'users.admin']);
    }

    public static function getFeedbackAdmin($page) {
        $limit = 10;
        $space = ($page - 1) * $limit;
        return Notification::join('users', 'notification.user_id_send', '=', 'users.id')
        ->orderBy('notification.seen', 'asc')
        ->where('notification.user_id_receive', 1)
        ->limit($limit)
        ->offset($space)
        ->get(['notification.*', 'users.name', 'users.admin']);
    }

    public static function getNotifications($idUser) {
        return Notification::where('user_id_receive', $idUser)
        ->orderBy('id', 'desc')
        ->limit(5)
        ->get();
    }
}
