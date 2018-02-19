@extends('layout.baselayout')
@section('content')
   <div class="container text-center">
   <div class="col-md-12 col-sm-12">
   				<div style="margin-bottom: 5px" class="pull-xs-left">
                    <a class="btn btn-primary" href="" role="button">
                        home
                    </a>
                </div>

               <div style="margin-bottom: 5px" class="pull-xs-right">
                    <a class="btn btn-primary" href="{{url('notebooks').'/'.$id}}" role="button">
                        back
                    </a>
                </div>
       </div>
   	<div class="row">
   		<div class="col-md-6 col-sm-12">
   		@if(count($errors)>0)
   			<ul>@foreach($errors as $error)
   				<li>
   					{{$error}}
   				</li>
   				@endforeach
   			</ul>
		@endif	
		<h1 class="bg-warning">Create your notes</h1> 	
		<form class="form-horizontal" action="{{url('notes')}}" method="post"> 
				{{csrf_field()}}
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="title">Note title:</label>
			      <div class="col-sm-9">
			        <input type="text" name="title" class="form-control" id="notetitle" placeholder="Enter note title here">
			        <input type="hidden" name="notebook_id"  value="{{$id}}">
			        <br>
			      </div>
			    </div>

			    <div class="form-group">
			      <label class="control-label col-sm-3" for="body">Note  body:</label>
			      <div class="col-sm-9">
			        <textarea name="body" class="form-control" id="notebody" placeholder="Enter note description here"></textarea>
			      </div>
			    </div>
			
			    <div class="form-group">        
			      <div class="col-sm-offset-3 col-sm-9">
			      <br>
			        <input type="submit" class="btn btn-default" value="add"> 
			      </div>
			    </div>
			  </form>
           </div>
           </div>
 @endsection          