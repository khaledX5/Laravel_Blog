@extends('layout')
@section('content')
<div class='container'>                
<div class="row">
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
 <div class="col-lg-6 col-md-6 col-sm-6">                        
                       <div class="panel panel-info ">
         
          <div class="panel-heading">
             <h3 class="panel-title">{{ $posts->title }}</h3>
                           
        </div>
      <div class="collapse" id="collapseExample{{ $posts->id }}">
       <div class="card card-block">
   <div class="panel-body">
{{ $posts->body }}                    </div>
                    </div>
                    </div>
                           
                    <div class="panel-footer">    
        
        <h5></h5>
      
        </div>
                        </div>   
                        
                  
                </div>
      <div class="col-lg-5 col-md-5 col-sm-5">   <a class="btn btn-danger" role="button"  href="#">Delete</a>
            <a class="btn btn-primary" role="button" href="{{ $posts->id}}/edit/">Edit</a>
            <a class="btn btn-info" data-toggle="collapse" href="#collapseExample{{ $posts->id}}" aria-expanded="false" aria-controls="collapseExample">read more</a>
                    </div>
        </div>
            
            </div>
            
            @stop   