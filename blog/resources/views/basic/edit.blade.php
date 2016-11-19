@extends('layout')
@section('content')
<form method="POST" action="{{url()}}/posts/{{ $post->id }}">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
 <div class="form-group"  >
     <label for="title" >title</label>
     <input name="title"  class="form-control" value="{{ $post->title }}"/>
    </div>
    
    
    <div class="form-group"  >
     <label for="body" >body</label>
        
     <textarea class="form-control" rows="5" id="body" name="body">{{ $post->body }}</textarea>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Edit</button> 
    </div>
    
</form> 
     @if($errors->any())
     <ul class="alert alert-danger">
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
     </ul>
     
     @endif
     @stop   