<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\producmodel_first;
class apicontroller extends Controller
{
    //
    public function getdata(Request $req){

    $api= producmodel_first::all();
    //dd($api);
    //return ['api'=>$api];
    return response()->json(['state' => 200, "massage"=>"data feach successfuly",'api'=>$api]);
    
    }

    public function insertdata(Request $post)
    {
        $data=[
            "name"=>$post->name,
            "description"=>$post->description,
            "price"=>$post->price,
            "updated_at"=>$post->updated_at,
            "created_at"=>$post->created_at
        ];

        $insert=producmodel_first::create($data);
        if($insert)
        {
            return response()->json(['state' => '200', "massage"=>"insert successfuly"]);
           
        }else{
            echo "data not insert successfuly";
        }
         //return ["insert"=>$insert];
         //return response()->json(['state' => '200', "massage"=>""]);
    }

    public function updatadata($id,Request $post)
    {
        //dd($post->all());
        $request_parameter= $post->all();
       // dd($request_parameter);
        $data=[
             "name"=>$request_parameter['name'],
             "description"=>$request_parameter['description'],
             "price"=>$request_parameter['price'] 
        ];
        
        //$updatedata= projects::get($id);
       $updatedata = producmodel_first::find($id)->update($data);
        
        if($updatedata)
        {
            $userdata=producmodel_first::find($id);
             return response()->json(['state' => '200', "massage"=>"update successfuly","data"=>$userdata]);
        }else{
            echo "data not updated";
        }
    }
}

