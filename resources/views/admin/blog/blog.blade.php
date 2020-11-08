@extends('layout.admin_master')
@section('title','Blog')
@section('content')
<h1 class="h3 mb-1 text-gray-800">All Blog</h1><br>
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{action('Admin\BlogController@create')}}" class="btn btn-sm btn-primary">Create</a></h6>
            </div>
            <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Image</th>
                  <th scope="col">Category</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($blog as $item)
                    <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>
                      @if($item->imageName=='default.jpg')
                      <img width="50" height="40" src="{{asset('public/image/default.jpg')}}" alt="blog-image">
                      @else
                      <img width="50" height="40" src="{{asset('public/uploads/blog/'.$item->imageName)}}" alt="blog-image">
                      @endif
                    </td>
                    <td>{{$item->category['name']}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{str_limit($item->description,10,'...')}}</td>
                  <td class="text-right">
                  <a href="{{action('Admin\BlogController@update_page',['id' => $item->id])}}" class="btn btn-sm btn-primary">Edit</a> || <a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\BlogController@delete',['id' => $item->id])}}" class="btn btn-sm btn-danger">Del</a>
                  </td>
                </tr>
                @endforeach
                    
              </tbody>
            </table>
            {{$blog->links()}}
            </div>
          </div>
@endsection
