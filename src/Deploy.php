<?php

namespace HDeploy;

final class Deploy
{
    protected $token;

    private function __construct($secret, $pubToken)
    {
        if ($secret !== $pubToken) {
            throw new \Exception('Tokens does not match');
        }
        
    }

    // $token string must match content of .deploy-token
    public static function instance($secret, $pubToken)
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Deploy($secret, $pubToken);
        }
        return $inst;
    }

    private function __clone() {}
    private function __wakeup() {}

    public function gitPull()
    {
        $output = shell_exec('git pull 2>&1');
        echo "<pre>$output</pre>";
    }
}