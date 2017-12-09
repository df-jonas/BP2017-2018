<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 12/11/2017
 * Time: 17:22
 */

namespace App\Helpers;

use GuzzleHttp\Client;

class HttpRequestHelper
{
    static public function HttpRequest($url, $requesttype, $headers, $params, $verify_ssl){
        $client = new Client();
        $response = $client->request(
            $requesttype,
            $url,
            [
                'form_params' => $params,
                'headers' => $headers,
                'verify' => $verify_ssl,
                'exceptions' => false
            ]
        );

        return $response;
    }
}