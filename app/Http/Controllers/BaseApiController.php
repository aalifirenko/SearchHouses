<?php

namespace App\Http\Controllers;


class BaseApiController extends Controller {

    protected $status = false;
    protected $message = '';
    protected $data = [];


    /**
     * Output json method
     * @return \Illuminate\Http\JsonResponse
     */
    protected function _response()
    {
        return response()->json([
            'status'  => $this->status,
            'message' => $this->message,
            'data'    => $this->data,
        ]);
    }
}