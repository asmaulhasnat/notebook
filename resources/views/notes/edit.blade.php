@extends('layout.baselayout')
@section('content')
   <div class="container text-center">
   	<div class="row">
   	<div class="col-md-12 col-sm-12">
   				<div style="margin-bottom: 5px" class="pull-xs-left">
                    <a class="btn btn-primary" href="{{url('/')}}" role="button">
                        home
                    </a>
                </div>

               <div style="margin-bottom: 5px" class="pull-xs-right">
                    <a class="btn btn-primary" href="{{url('notebooks').'/'.$note->notebook_id}}" role="button">
                        back
                    </a>
                </div>
       </div>
   		<div class="col-md-6 col-sm-12">
   			
				<form class="form-horizontal" action="{{url('notes').'/'.$note->id}}" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="notename">Note title:</label>
			      <div class="col-sm-9">
			        <input type="text" name="title" class="form-control" id="notename" value="{{$note->title}}"><br>

			      </div>
			    </div>

			    <div class="form-group">
			      <label class="control-label col-sm-3" for="notename">Note body:</label>
			      <div class="col-sm-9">
			        <textarea name="body" class="form-control" id="notebody">{{$note->body}}</textarea>
			      </div>
			    </div>
			
			    <div class="form-group">        
			      <div class="col-sm-offset-3 col-sm-9">
			      <br>
			        <input type="submit" class="btn btn-default" value="update"> 
			      </div>
			    </div>
			  </form>
           </div>
           </div>
 @endsection          