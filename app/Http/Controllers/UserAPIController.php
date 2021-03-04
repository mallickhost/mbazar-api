<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
 use App\Models\Product;

class UserAPIController extends Controller
{
   
    public function list($name=null)
    {
      
        if(empty($name)){
          $name = "no name passed";
        }
	    	return ['name'=>$name]; 
    }
}