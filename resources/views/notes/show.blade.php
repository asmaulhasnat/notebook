@extends('layout.baselayout')
@section('content')
   <div class="container text-center">
   <div class="row">
   <div class="col-sm-6">
   		<a class="btn btn-success" href="{{url('notebooks').'/'.$notes->notebook_id}}">back</a><br><br>
   	</div>
   	<div  class="col-sm-12">
   	<div class="well" style="border: 1px solid #ccc">
   	<center style="font-size: 32px">Details note</center>

   		<h1 class="text-center text-danger">{{$notes->title}}</h1><hr>
   
   		<p class="text-justify">{{$notes->body}}</p>
   	</div>	
   	</div>
   	
   </div>
   	</div>
 @endsection          