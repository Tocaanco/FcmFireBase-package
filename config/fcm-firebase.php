<?php

return [

    "device_model" => \Tocaanco\FcmFirebase\Models\DeviceToken::class,
    "user_colum"   => "user_id",
    "allow_fcm_log"=> env("FCM_ALLOW_LOG", false),
    "server_key"   => env("FCM_SERVER_KEY", "AAAA5hkpT9c:APA91bHDgPd3YL2OQZJXvW1DUUKNNSwdCX93WSvqQB7NZSWOZUx_qt1a6-7zpZWxUqiOrB3Z5FT38-nIWCC2TJkVgqQ50GcH6lYZu1hDEZLbNPiFrsN3Oowj16sRqB0RCQA7rggKhHF6"),
    "langues"  => ["ar","en"],
    "allow_morph"=> false,
    "morph" =>"owner",
    "morph_index"=> false,

];
