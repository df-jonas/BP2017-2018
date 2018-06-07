<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 12/11/2017
 * Time: 17:22
 */

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class HttpHelper
{
    static public function request($url, $requesttype, $headers, $params, $verify_ssl)
    {
        $client = new Client();
        try {
            $response = $client->request(
                $requesttype,
                $url,
                [
                    '_conditional' => [],
                    'form_params' => $params,
                    'headers' => $headers,
                    'verify' => $verify_ssl,
                    'exceptions' => false
                ]
            );
        } catch (GuzzleException $e) {
            Log::info($e);
        }

        return $response;
    }

    static public function canvasRequest($path, $verb, $headers, $params)
    {
        $request = self::request(
            env('CANVAS_URL', "") . $path,
            $verb,
            $headers,
            $params,
            false
        );

        if ($request->getStatusCode() == 401) {

            CanvasHelper::refreshToken();

            $request = self::request(
                env('CANVAS_URL', "") . $path,
                $verb,
                $headers,
                $params,
                false
            );
        }

        return $request;
    }
}