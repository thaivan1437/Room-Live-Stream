<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield("title")</title>
        <link href="{{Asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{Asset('css/style.css')}}" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="{{Asset('css/mdb.min.css')}}" rel="stylesheet">
       <script type="text/javascript" src="{{Asset('js/jquery-3.4.1.min.js')}}"></script>
       <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    </head>
    <body>
        <div class="container">
            @yield("content")
        </div>
        
       
        <!-- Bootstrap tooltips -->

		<script type="text/javascript" src="{{Asset('js/popper.min.js')}}"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="{{Asset('js/bootstrap.min.js')}}"></script>
		<!-- MDB core JavaScript -->


    </body>
</html>