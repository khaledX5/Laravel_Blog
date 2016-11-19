@extends('layout')

@section('content')
     <div class="container">
          
                <div class='jumbotron'>
					<div class='well well-md  '><h3>Laravel Blog</h3></div>
                                        <p> Share with your Friends .. </p>
                			<a href='#' class='btn btn-primary col-sm-3' > See more </a>
                </div>
            </div>
<div class='container'>                
@foreach ($posts as $post)    
<div class="row">
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
 <div class="col-lg-6 col-md-6 col-sm-6">                        
                       <div class="panel panel-info ">
         
          <div class="panel-heading">
              <h3 class="panel-title"><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                           
        </div>
      <div class="collapse" id="collapseExample{{ $post->id }}">
       <div class="card card-block">
   <div class="panel-body">
{{ $post->body }}                    </div>
                    </div>
                    </div>
                           
                    <div class="panel-footer">    
        
        <h5> </h5>
      
        </div>
                        </div>   
                        
                  
                </div>
      <div class="col-lg-5 col-md-5 col-sm-5"> 
          @if($check==35)
          <a class="btn btn-danger" role="button"  href="#">Delete</a>
            <a class="btn btn-primary" role="button" href="posts/{{ $post->id}}/edit/">Edit</a>
           @endif
            <a class="btn btn-info" data-toggle="collapse" href="#collapseExample{{ $post->id}}" aria-expanded="false" aria-controls="collapseExample">read more</a>
                    </div>
        </div>
       
@endforeach
     

            </div>
            
            @stop   