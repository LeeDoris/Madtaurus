<?php

namespace App\Http\Controllers\Api;

use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    use Helpers;

    /*
     * error resposne
     * @param message
     * @param status
     */

    protected function errorResponse($message = "不能为空", $status = 406) {

        $response = array(
            'error' => $message,
            'status' => $status,
        );
        return response()->json($response);
    }

    /*
     * success response
     * @param message
     * @param status
     */

    protected function successResponse($message = "请求成功", $status = 200) {
        $response = array(
            'success' => $message,
            'status' => $status,
        );
        return response()->json($response);
    }
}
