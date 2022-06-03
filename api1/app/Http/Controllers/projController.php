<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projController extends Controller
{
    public function show()
    {
        $data = DB::table('project')->get();

        return view('list', ['details' => $data]);
    }

public function add_response(Request $request)
{
    // $request->validate([
    //     'name'=>'required|max:191',
    // ]);

    $data=new project();
    $data->name=$request->name;
    $data->save();
    return response()->json(['message'=>'Response added Successfuly'],200);


    // return Request::post();
}
public function get_response(Request $request)
{
    $id= $request->id;
    // $data=new project();
    $data = DB::table('project')
    ->select(DB::raw('name,id'))
    ->where('id',$id)
    ->get();
    
    return response()->json(['message'=>'Response received','name'=>$data[0]->name],200);
}
public function update_response(Request $request)
{
    $id= $request->id;
    $name=$request->name;    
    DB::table('project')
    ->updateOrInsert(
        ['id' => $id],
        ['name' => $name]
        
    );
    return response()->json(['message'=>'Response updated'],200);
}


// public function update_response(Request $request,$id)
// {
//     $id= $request->id;
//     $name=$request->name;    
//     DB::table('project')
//     ->updateOrInsert(
//         ['id' => $id],
//         ['name' => $name]
        
//     );
//     return response()->json(['message'=>'Response updated','id'=>$id,'name'=>$name],200);
// }

public function delete_response(Request $request)
{
    $id= $request->id;
    $deleted = DB::table('project')
    ->where('id',$id)
    ->delete();   
    return response()->json(['message'=>'Response deleted','data'=>$id],200);
}



}