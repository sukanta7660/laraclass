@extends('layout.admin_master')
@section('title','Update Blog Page')
@section('content')
    <h1 class="h3 mb-1 text-gray-800">Update Blog</h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Form</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="{{action('Admin\BlogController@update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        <div class="form-group">
                      <select name="category_id" class="form-control" id="">
                        <option value="">Select a category</option>
                        @foreach ($cat as $row)
                        <option value="{{$row->id}}" @if($blog->category_id==$row->id) selected @endif>{{$row->name}}</option> 
                        @endforeach
                        
                      </select>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="title" value="{{$blog->title}}" placeholder="Enter Blog Title">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="description" id="" cols="5" rows="5" placeholder="write a description about the blog...">{{$blog->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <input type="file" name="imageName" class="form-control">
                    </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection


{{-- => category page create
=> create table
=> create (a)
=> create category[form->name] --}}
