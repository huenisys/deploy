<?php

namespace HDeploy;

final class Deploy
{

    private function __construct()
    {

    }

    public static function instance(token = null)
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Deploy();
        }
        return $inst;
    }

    private function __clone()
    private function __wakeup()

    public function gitPull()
    {
        `git pull`;
    }
}