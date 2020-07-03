@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Dashboard</h4>


                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-2 p-4 bg-light">
                            <a href="{{url('uploadfile')}}" class="btn btn-primary mb-4">+ Add New File</a>

                        </div>
                    <div class="col-10">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>File Type</th>
                                    <th>Brief</th>
                                    <th>Body</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                <tr>
                                <td>{{$file->title}}</td>
                                    <td>{{$file->type}}</td>
                                    <td>{{$file->brief}}</td>
                                    <td>{{$file->body}}</td>
                                    <td>
                                    @if($file->status)
                                    <a href="{{route('file.edit',['id'=>$file->id])}} " class="btn btn-danger">Unpublish</a>
                                    @else
                                    <a href="{{route('file.edit',['id'=>$file->id])}} " class="btn btn-success">Publish</a>
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                    </div>


                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
