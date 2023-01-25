<?php

namespace Pixamo\Installer;
use DB;

class Installer
{
    public static function isActive()
    {
        try {

            $pdo = DB::connection()->getPdo();

            if($pdo)
            {
                return false;
            } else {
                return true;
            }

        } catch (\Exception $e) {
            return true;
        }
    }
}
