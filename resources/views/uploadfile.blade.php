@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h4>Add New File</h4>
                </div>

                <div class="card-body">

                    @if(count($errors)>0)
                    <ul>
                        @foreach($errors->all() as $error)
                             <li class="alert alert-danger">{{$error}}</li>
                             @endforeach
                    </ul>

                    @endif

                <form  action="{{url('/File')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Upload Image/Video File Here...</label>
                          <input type="file" class="form-control-file" name="file" >
                        </div>
                        <div class="form-group ">
                            <label for="inputState">File Type</label>
                            <select id="inputState" name="type" class="form-control" >
                              <option selected>Choose file type...</option>
                              <option>image</option>
                              <option>video</option>
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Brief</label>
                            <input type="text" class="form-control" name="brief"  placeholder="Enter Brief">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Body</label>
                            <input type="text" class="form-control" name="body" placeholder="Enter Body">
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                    </div>


                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
