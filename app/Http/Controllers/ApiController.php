<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ApiController extends Controller {
    
   protected $statusCode = 200;
   
   public function getStatusCode()
   {
       return $this->statusCode;
   }
   
   public function setStatusCode($statusCode)
   {
       $this->statusCode = $statusCode;
   }
    
    public function respond($message)
    {
        return response()->json(['data' => $message], 200);
    }
    
}
