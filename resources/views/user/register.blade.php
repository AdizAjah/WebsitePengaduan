@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href="{{'css/landing.css'}}">
    <style>
        body {
            background: #ff82c0;
        }
        .btn-purple {
            background: #ff82c0;
            color: #fff;
            width: 100%;
        }

        .btn-purple:hover {
            color: #ff82c0;
            background: #000;
            font-weight: 600
        }

    </style>
@endsection

@section('title', 'Register Page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
                <p class="text-center text-white mb-5">E-Report Hub</p>
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">Create Account</h2>
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="number" name="nik" placeholder="NIK"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Full Name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="user" placeholder="Username"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password"  class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="telp" placeholder="Phone Number"  class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple">Register</button>
                        </form>
                    </div>
                </div>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
                    <a href="{{Route('ereporthub.index')}}" class="btn btn-warning text-white mt-3" style="width: 100%" >Home</a>
            </div>
        </div>
    </div>

@endsection