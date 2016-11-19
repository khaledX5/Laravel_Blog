<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Laravel Blog</title>
    <!-- Latest compiled and minified CSS -->
    
	<link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url()}}/css/my-bootstrap.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src ="{{ url() }}/js/bootstrap.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <body>
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

   <div class="form-group"  >
     <label for="email" >Email</label>
        <input type="email" name="email"  class="form-control" value="{{ old('email') }}">
    </div>
   
     <div class="form-group"  >
     <label for="password" >password</label>
        <input type="password" name="password"  class="form-control" id="password">
    </div>

 
     <div class="form-group"  >
   
        <input type="checkbox" name="remember"> Remember Me
    </div>


     <div class="form-group"  >
         <button type="submit" >Login</button>
    </div>
</form>
</body></html>