<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function returnMessage($code, $message, $data)
    {
        $result = $data;
        switch ($code) {
            case 200:
                $result['message'] = $message;
                $result['code'] = 200;
                break;
        }
        return $result;
    }
}
