<?php

namespace App\Http\Controllers;

use App\Models\user_registerdmodel;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    
    public function index()
    {
        //
       // echo "hello";
        return view("index",[
            'users' => user_registerdmodel::paginate(2)
        ]);
    }

   
    public function create(Request $request)
    {
        return view("create");
    }

   
    public function store(Request $post)
    {
    


        $data =[
            "id"=>$post->id,
            "name"=>$post->name,
            "email"=>$post->email,
            "password"=>$post->password,
            "contact"=>$post->number
        ];

        //dd($data);
        $insert = user_registerdmodel::create($data);
       // dd($insert );
        if($insert){
            //return redirect("create",your registerd successfully);
            return response("your registerd successfully");
        }else{
            //return redirect("create",your not registerd successfully);
              return response("your not registerd successfully");
        }



        //
        //dd($post->all());
     //return redirect()->route('create');
    }

    public function show(Request $post)
    {

      if(isset($post->email) && $post->email!=''){
        $userdata = user_registerdmodel::where("email",$post->email)->first();
        if(!empty($userdata)){
            $data = user_registerdmodel::get();
            return view("show",["data"=>$data]);
        }
      }
      else{
           return response()->json(['massege' => "please creat account"]);
      }  
    }

    

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
