@extends('layout.admin_master')
@section('title','Category')
@section('content')
<h1 class="h3 mb-1 text-gray-800">All Category</h1><br>
<div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="{{action('Admin\CategoryController@create_category_page')}}" class="btn btn-sm btn-primary">Create</a></h6>
            </div>
            <div class="card-body">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category Name</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($cat as $item)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                  <td class="text-right">
                    <a href="{{action('Admin\CategoryController@update_page',['id'=>$item->id])}}" class="btn btn-sm btn-primary">Edit</a> || <a onclick="return confirm('Are you sure to delete?')" href="{{action('Admin\CategoryController@delete',['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$cat->links()}}
            </div>
          </div>
@endsection
