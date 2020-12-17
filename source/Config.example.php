<?php

/**
 * SITE CONFIG
 */

define("SITE",[
    "name"=>"Auth em MVC com PHP",
    "desc"=>"Aprenda a construir uma aplicação de autenticação em MVC com PHP do jeito certo...",
    "domain"=>"auth.local.com",
    "locale"=>"pt_BR",
    "root"=>"http://localhost/codigo-aberto/t1/"
]);

/**
 * SITE MINIFY
 */
if($_SERVER['SERVER_NAME']=="localhost"){
    require __DIR__."/Minify.php";
}

/**
 * DATABASE CONNECT
 */

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */

define('SOCIAL',[
    "facebook_page"=>"dellanosites",
    "facebook_author"=>"caio.nunes.7374_",
    "facebook_appId"=>"630329850919662_",
    "twitter_creator"=>"",
    "twitter_site"=>""
]);

/**
 * MAIL CONNECT
 */

define("MAIL",[
//    "host"=>"smtp.sendgrid.net",
    "host"=>"smtp.gmail.com",
    "port"=>"587",
    "user"=>"bladellano@gmail.com",
    "passwd"=>"???",
    "from_name"=>"Caio Developer",
    "from_email"=>"contato@dellanosites.com.br"
]);

/**
 * SOCIAL LOGIN: FACEBOOK
 */
define("FACEBOOK_LOGIN",[
    "clientId" =>"146669433586087_",
    "clientSecret"=>"5c736afaa4de8a2b3c445249686a719e_",
    "redirectUri"=>SITE['root']."/facebook",
    "graphApiVersion"=>"v4.0"
]);

/**
 * SOCIAL LOGIN: GOOGLE
 */
define("GOOGLE_LOGIN",[
    "clientId" =>"221167470850-91tb2m9or0kpmajp725vko458aaaeu5q.apps.googleusercontent.com_",
    "clientSecret"=>"fPUbs7KrAhyZFX7D31Ai2lHf_",
    "redirectUri"=>SITE['root']."/google",
]);

