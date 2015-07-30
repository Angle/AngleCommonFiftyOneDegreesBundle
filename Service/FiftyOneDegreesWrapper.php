<?php

namespace Angle\Common\FiftyOneDegreesBundle\Service;

class FiftyOneDegreesWrapper
{
    public function __construct()
    {
        // Configure 51Degrees operation
        global $_fiftyone_degrees_data_file_path;
        $_fiftyone_degrees_data_file_path = __DIR__.'/../Library/51Degrees-PremiumV3_1.dat';

        // class
        require_once(__DIR__.'/../Library/51Degrees_data_reader.php');
    }

    public function getDeviceData($useragent)
    {
        return fiftyone_degrees_get_device_data($useragent);
    }

    public static function updateBinary()
    {
        require_once(__DIR__.'/../Library/51Degrees_Update.php');
    }

}