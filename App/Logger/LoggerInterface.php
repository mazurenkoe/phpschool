<?php
/**
 * Created by PhpStorm.
 * User: elenamazurenko
 * Date: 2/28/19
 * Time: 8:37 AM
 */

namespace App\Logger;

interface LoggerInterface
{
    public function log($errmsg, $pathToFile, $line);
}
