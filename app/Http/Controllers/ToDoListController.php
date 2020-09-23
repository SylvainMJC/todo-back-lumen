<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use App\Models\ToDoList;

class ToDoListController extends BaseController
{
    /**
     * 
     */
    public function index(){
        return response()->json(
            [
               "data" => ToDoList::orderBy('created_at','DESC')->get()
            ]
            
        );
    }
}
