@extends('layout.admin_master')
@section('title','Create Category Page')
@section('content')
<h1 class="h3 mb-1 text-gray-800">Create Category</h1>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Create Form</h6>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="{{action('Admin\CategoryController@save')}}">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="name" placeholder="Enter category name...">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Save
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