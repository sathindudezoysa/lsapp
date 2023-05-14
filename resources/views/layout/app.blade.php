<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>

    <!-- Adding roboto font to html-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <style>
    
        body{
            background-color: white;
            font-family: 'Roboto',sans-serif;
        }
        div.container{
            margin-left:50px;
        }
        div.menue{
            padding: 15px;
        }
        div.post{
            
            width: 60%;
            padding: 15px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
            border:1px solid;          
            background-color: white;

        }
        .head{
            text-align: center;
            padding: 15px;
        }
        .img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            width: 50%;
        }
</style>
    <!-- calling app name frm .env file 
        <title>{{config('app.name', 'Lsapp')}}</title> 
    -->
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.message')
        <div class="container">
       
        @yield('content')
        </div>
    </body>
</html>
