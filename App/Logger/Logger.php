<?php
/**
 * Created by PhpStorm.
 * User: elenamazurenko
 * Date: 2/28/19
 * Time: 8:35 AM
 */

namespace App\Logger;

class Logger implements LoggerInterface
{
    public function log($errmsg, $pathToFile, $line)
    {
        $date = date('Y-m-d H:i:s (T)');
        $file_path = __DIR__ . '/../../logs/apilogs.log';
//        $file_path = $_SERVER["DOCUMENT_ROOT"] . "/logs/apilogs.log";
        $f = fopen($file_path, 'a');
        $err = '[' . $date . '] Error - ' . $errmsg . ' in ' . $pathToFile . ' on line ' . $line;
        fwrite($f, $err. PHP_EOL);
        fclose($f);
    }
}
