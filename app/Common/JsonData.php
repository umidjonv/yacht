<?php


namespace App\Common;


use App\Common\Enums\ResultStatus;
use Illuminate\Http\Response;

class JsonData
{
    public $error = "";
    public $status =  ResultStatus::Success;
    public $data = [];

    public function __construct($content, $status = ResultStatus::Success)
    {
        $status = $status;
        $data = json_encode($content);
    }




}
