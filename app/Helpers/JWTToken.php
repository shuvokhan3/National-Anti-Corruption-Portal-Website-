<?php
namespace App\Helpers;

use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Mockery\Exception;

class JWTToken{
    public static function CreateToken($userEmail,$userId):string{
        $key = env('JWT_KEY');
        $payload = [
            "iss" => "laravel-token",
            "iat" => time(),
            "exp" => time() + 3600,//expery time for this token
            "userEmail" => $userEmail,
            "userId" => $userId
        ];
        return JWT::encode($payload, $key, 'HS256');
    }


    function VerifyToken($token):string|object
    {
        try{
            //if the token is null it hepend when the token is normally time out or other reason
            if($token == null){
                return "unauthorized";
            }
            $key = env('JWT_KEY');
            $decode = JWT::decode($token,new Key($key, 'HS256'));
            return $decode;

        }catch (ExpiredException $e){
            return "unauthorized";
        }
    }


}
