<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 22/12/2017
 * Time: 12:09
 */

namespace App\Providers;

use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\User;

class CanvasLoginServiceProvider extends AbstractProvider implements ProviderInterface
{
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase(env('CANVAS_URL') . '/login/oauth2/auth', $state);
    }

    protected function getTokenUrl()
    {
        return env('CANVAS_URL') . '/login/oauth2/token';
    }

    public function getAccessToken($code)
    {
        $response = $this->getHttpClient()->post($this->getTokenUrl(), [
            'headers' => ['Authorization' => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret)],
            'body' => $this->getTokenFields($code),
        ]);
        return $this->parseAccessToken($response->getBody());
    }

    protected function getTokenFields($code)
    {
        return array_add(
            parent::getTokenFields($code), 'grant_type', 'authorization_code'
        );
    }

    protected function getUserByToken($token)
    {
        $response = $this->getHttpClient()->get(env('CANVAS_URL') . '/api/v1/users/self', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
            'login_id' => $user['login_id'],
        ]);
    }
}