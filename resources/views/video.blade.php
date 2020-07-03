<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Test</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @include('header')
    </head>
    <body>

        <div class="container">
            <div class="from-group">
        <h1 class="from-control">Title : {{$files->title}}</h1>
            <iframe src="{{asset('/videos/').'/'.$files->source}}" class="mb-4" style="width: 700px;height:400px" alt="Responsive""></iframe>
        <h4 class="from-control">brief : {{$files->brief}}</h4>
        <p class="from-control">Body : {{$files->body}}</p>
    </div>
         </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
