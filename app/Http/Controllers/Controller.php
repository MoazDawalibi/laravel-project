<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function sendResponse($message ,  $data = [] , $status = 200 )
    {

        $response = [
            'success' => true,
            'data' => $data,
            'message' => __($message),
        ];

        return response()->json($response, $status);
    }

    public function sendGetResponse( $data = [] , $status =200 )
    {
        return $this->sendResponse(__('get data successfully') , $data , $status);
    }
    public function sendAddResponse( $data = [] , $status =200 )
    {
        return $this->sendResponse(__('added data successfully') , $data , $status);
    }
    public function sendUpdateResponse( $data = [] , $status =200 )
    {
        return $this->sendResponse(__('updated data successfully') , $data , $status);
    }
    public function sendDeleteResponse( $data = true , $status =200 )
    {
        return $this->sendResponse(__('deleted data successfully') , $data , $status);
    }

    public function sendLoginResponse( $data = [] , $status =200 )
    {
        return $this->sendResponse(__('logged in successfully') , $data , $status);
    }
    public function sendError($message, $code = 400, $data = [])
    {
        $response = [
            'success' => false,
            'data' => $data,
            'message' => $message,
        ];

        return response()->json($response, $code);
    }

    public function sendGetError( $data = [] , $status =400 )
    {
        return $this->sendError(__('failed to get data') , $data , $status);
    }
    public function sendAddError( $data = [] , $status =400 )
    {
        return $this->sendError(__('failed to add data') , $data , $status);
    }
    public function sendUpdateError( $data = [] , $status =400 )
    {
        return $this->sendError(__('failed to update data') , $data , $status);
    }
    public function sendDeleteError( $data = [] , $status =400 )
    {
        return $this->sendError(__('failed to delete data') , $data , $status);
    }
}
