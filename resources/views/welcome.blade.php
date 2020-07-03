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

        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                  <h2>Section 1</h2>
                    <div class="row">
                        <div class="col-6">
                            @foreach ($files as $file)
                            @if($file->type==='video'&&$file->status)
                        <a href="{{route('video',['id'=>$file->id])}}"> <iframe class="" src="{{asset('/videos/').'/'.$file->source}}" style="width: 450px;height:300px"></iframe>

                            <h3 >Title : {{$file->title}}</h3></a>
                            <p >brief :  {{$file->brief}}</p>
                            @break
                            @endif

                         @endforeach
                         </div>
                        <div class="col-6">
                         <div class="container">
                            <div class="row">
                                @foreach ($files as $file)
                                @if($file->type==='video'&&$file->status)
                                <div class="col-6">
                                    <a href="{{route('video',['id'=>$file->id])}}">    <iframe class="" src="{{asset('/videos/').'/'.$file->source}}" style="width: 200px;height:200px"></iframe>

                                    <h6>Title : {{$file->title}} </h6></a>
                                </div>

                                @endif
                                @endforeach


                            </div>
                            </div>
                          </div>

                  </div>
                </div>



    <div class="col-4 border-left">
                <div class="container">
                    <h2>Section 2</h2>
                    <div class="class="from-group">
                        @foreach ($files as $file)
                        @if($file->type==='image'&&$file->status)
                    <a href="{{route('image',['id'=>$file->id])}}"><img src="{{asset('/images/').'/'.$file->source}}" class="img-fluid" style="width:100%;height:200px" alt="Responsive image""></a>
                    <h3 class="from-control">Title : {{$file->title}}</h3>
                    <p class="from-control">brief :  {{$file->brief}}</p>
                    @break
                @endif
                @endforeach
                </div>

                    <div class="row ">
                        @foreach ($files as $file)
                        @if($file->type==='image'&&$file->status)
                       <div class="ml-2">
                        <a href="{{route('image',['id'=>$file->id])}}"><img src="{{asset('/images/').'/'.$file->source}}" class="img-thumbnail" style="width: 200px;height:200px" alt="Responsive image""></a>
                        <h6>Title : {{$file->title}}</h6>
                       </div>
                        @endif
                        @endforeach
                       </div>
                     </div>
                </div>

       </div>

         <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
