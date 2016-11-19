@extends('layout')
@section('content')
<form method="POST" action="store">
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
 <div class="form-group"  >
     <label for="title" >title</label>
        <input name="title"  class="form-control"/>
    </div>
    
    
    <div class="form-group"  >
     <label for="body" >body</label>
        
     <textarea class="form-control" rows="5" id="body" name="body"></textarea>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">save</button> 
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