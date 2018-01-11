<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 6/01/2018
 * Time: 13:13
 */

namespace App\Helpers;

use App\File;

class RandomHelper
{
    static public function generateString($length = 60)
    {
        return str_random($length);
    }

    static public function getRandomPublicId()
    {
        $length = 32;
        $publicId = self::generateString($length);
        while (File::query()->where('public_id', '=', $publicId)->first() != null) {
            $publicId = self::generateString($length);
        }
        return $publicId;
    }
}