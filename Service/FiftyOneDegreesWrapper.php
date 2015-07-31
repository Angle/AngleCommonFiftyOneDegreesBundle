<?php

namespace Angle\Common\FiftyOneDegreesBundle\Service;

class FiftyOneDegreesWrapper
{
    public function __construct($data_file_path)
    {
        // Configure 51Degrees operation
        global $_fiftyone_degrees_data_file_path;
        $_fiftyone_degrees_data_file_path = $data_file_path.'/51Degrees-PremiumV3_1.dat';
    }

    public function getDeviceData($userAgent)
    {
        require_once(__DIR__.'/../Library/51Degrees_data_reader.php');
        return fiftyone_degrees_get_device_data($userAgent);
    }

}