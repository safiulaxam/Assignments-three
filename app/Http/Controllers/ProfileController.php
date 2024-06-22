<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    function index($id){ 
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        return response()->json($data);
}



function kookie(){
    return response("")->cookie('access_token', '123-XYZ', 1);
}



}
