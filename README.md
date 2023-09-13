# FcmFirebase 

![Tests](https://github.com/spatie/laravel-package-tools/workflows/Tests/badge.svg)

The package allow to send fcm firebase message

### Installation

Install via composer:

must add this in composer.json  before require (must sure you have permission in github repo)
```
"repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:Tocaanco/FcmFireBas.git"
        }
    ],
```

```
composer require tocaanco/fcmfirebase
```

And add the service provider in config/app.php:

```php
Tocaanco\\FcmFirebase\\FcmFirebaseServiceProvider,
```

Then register Facade class aliase:

```php
'FcmFirebase' => \Tocaanco\FcmFirebase\Facades\FcmFirebase::class,
```

### Publish assets:

```
php artisan vendor:publish
```
### Getting Started

To start use in User Model to enable use FcmChannelTokens and sendForUser in FcmFirebase Facade 
-  must implements `\Tocaanco\FcmFirebase\Contracts\IFcmFirebaseDevice`and use trait `  \Tocaanco\FcmFirebase\Traits\FcmDeviceTrait`
```
class User extends Authenticatable implements  \Tocaanco\FcmFirebase\Contracts\IFcmFirebaseDevice
{
   use \Tocaanco\FcmFirebase\Traits\FcmDeviceTrait
}
```

to send all device token in database can use this
```
 $data = [
        "title" => [
            "ar" => "test",
            "en" => "test"
        ],
        "description" => [
            "ar" => "test",
            "en" => "test"
        ],
        "type"=>"general",
        "id"  => -1
 ];
FcmFirebase::sendToAllDevices($data)`;
```
to send  for user can use this (but must handle model User first)

```
 $data = [
        "title" => [
            "ar" => "test",
            "en" => "test"
        ],
        "description" => [
            "ar" => "test",
            "en" => "test"
        ],
        "type"=>"general",
        "id"  => -1
 ];
FcmFirebase::sendForUser($user,$data)`;
```

to register new device tokens can use this method

```
$data = [
'device_token' => "dd"
'user_id'      => "1",
'platform'     => "ANDRIOD",
'lang'         => $data["lang"] // OPTIONAL,
];`
FcmFirebase::registerToken($data)
```

to logout user

```
FcmFirebase::logoutUser($user)
``
