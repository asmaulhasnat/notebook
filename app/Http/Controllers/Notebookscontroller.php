<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Notebook;


class Notebookscontroller extends Controller
{
    public function index(){
    $user=Auth::user();
    $notebooks=$user->notebooks;    
    return view('notebooks.index',compact('notebooks'));
    }
    public function create(){
    	return view('notebooks.create');
    }

     public function store(Request $request)
    {
    	$inputdata= $request->all();
        $user=Auth::user();
        $user->notebooks()->create($inputdata);
    	//Notebook::create($inputdata);
    	return redirect('/notebooks');       
    }
    public function edit($id){
         $user=Auth::user();
         $notebooks=$user->notebooks()->find($id);
    	//$notebooks=Notebook::where('id',$id)->first();
	return view('notebooks.edit',compact('notebooks'));
    }
    public function update($id,Request $request){
    $user=Auth::user();
    $notebooks=$user->notebooks()->find($id);
    //$notebooks=Notebook::where('id',$id)->first();
    $notebooks->update($request->all());
    return redirect('/notebooks');
    }
    public function destroy($id){
    $user=Auth::user();
    $notebooks=$user->notebooks()->find($id);
   	// $notebooks=Notebook::where('id',$id)->first();
   	 $notebooks->delete();
   	 return redirect('/notebooks'); 	
    }
    public function show($id){
       $notebook=Notebook::find($id); 
       $notess=$notebook->note;
      // return  $notess
       return view('notes.index',compact('notess','notebook')); 
    }
}
