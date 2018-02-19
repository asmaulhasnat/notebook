<?php

namespace App\Http\Controllers;
use App\Note;

use Illuminate\Http\Request;

class Notescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //return ('notebookscreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,['title'=>'required','body'=>'required']);
      
        //$request->notebook_id;
        //$user=Auth::user();
       // $user->notebooks()->create($inputdata);
        Note::create($request->all());
          
    return  redirect("/notebooks/$request->notebook_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $notes=Note::find($id); 
       return view('notes.show',compact('notes')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note=Note::find($id);
       return view('notes.edit',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputdata= $request->all();
        $note=Note::find($id);
        $update=$note->update($inputdata);
         if ($update) {
            return  redirect("/notebooks/$note->notebook_id");
         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $note=Note::find($id);
       $note->delete();
        return  redirect("/notebooks/$note->notebook_id"); 
    }

     public function createNote($id)
    {
       return view('notes.create')->with('id',$id);
    }

}
