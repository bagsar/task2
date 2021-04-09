<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
define('GOOGLE_CLIENT_ID', '623768561887-nm8hfvp90u26nmgr5rid508k8953tpl4.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'tWl9cym-Q4HPXBmaTOZ8-tDz');
  
$config = [
    'callback' => 'http://localhost/google/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );