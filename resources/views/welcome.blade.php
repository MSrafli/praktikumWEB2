@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card mt-4 mb-4">
            </div>
            <div class="card">
                <div class="card-header text-center">
                    Halaman Login
                </div>
                <div class="card-body ">
                    <div class="text-center">
                        <img src="{{asset('img/uniska.png')}}" alt="" width="30%">
                    </div>
                    <form action="">
                        <div class="form-group mt-2 ">
                            <label for="">Username</label>
                            <input type="text" class="form-control" placeholder="enter your username">
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="enter your password">
                        </div>
                        <div class="my-2 text-center">
                            <button type="sumbit" class="btn btn-primary">Login User</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection