<?php

require __DIR__ . '/vendor/autoload.php';

try {
  $deploy = HDeploy\Deploy::instance('someToken', 'someToken');
  $deploy->gitPull();
}
catch(Exception $e) {
  echo 'Error Message: ' .$e->getMessage();
}