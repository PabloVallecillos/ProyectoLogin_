<!DOCTYPE html>
<html lang=en>
    
    <head>
    	<title>Login Page</title>
    	<link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    
    <body>
    	<div class="container h-100">
    		<div class="d-flex justify-content-center h-100">
    			<div class="user_card">
    			   
    				@yield('contenidoform')
    				
    			</div>
    		</div>
    	</div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ url('assets/js/jquery-3.3.1.slim.min.js') }}"><\/script>')</script>
   <!-- <script src="{{ url ('assets/js/bootstrap.bundle.min.js') }}"></script> -->
</html>