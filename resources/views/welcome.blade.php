<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>web-clocking-app</title>

        
        
      <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 

     


         <!-- <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css') }}">  -->
       
         <!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>  -->


                    

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 

     
    </head>
    <body>
        <div id="app">
       
            <!-- <div class="container"> -->
            <!-- <header-nav></header-nav> -->
            <example-component></example-component>
            <!-- </div> -->
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--   Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="{{URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>  -->

        <!-- <script src="{{ asset('js/app.js') }}" defer></script>  -->

    </body>
</html>
