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
                  <th scope="col">Category Name</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp

                
                    <tr>
                    <th scope="row">1</th>
                    <td>hgjkjhghjg</td>
                  <td class="text-right">
                    <a href="#" class="btn btn-sm btn-primary">Edit</a> || <a onclick="return confirm('Are you sure to delete?')" href="#" class="btn btn-sm btn-danger">Del</a>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>
@endsection
