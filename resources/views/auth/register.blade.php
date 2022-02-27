@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <header class="login-header shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        ChatsApp
<!--                        <img src="{{asset("storage/assets/images/logo-img.png")}}" width="140" alt="" />-->
                    </a>
                    @include("header")
                </div>
            </nav>
        </header>
        <div class="d-flex align-items-center justify-content-center my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Sign Up</h3>
                                        <p>Already have an account? <a href="{{route("login")}}">Sign in here</a>
                                        </p>
                                    </div>

                                    <div class="login-separater text-center mb-4"> <span> SIGN UP WITH EMAIL</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="col-sm-12">
                                                <label for="inputFirstName" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" required placeholder="James Oladimeji">
                                                @error('name')
                                                <span style="color: red">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="inputEmailAddress" required placeholder="example@user.com">
                                                @error('email')
                                                <span style="color: red">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword" required value=""
                                                           placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                                @error('password')
                                                <span style="color: red">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input name="password_confirmation" type="password" class="form-control border-end-0" id="inputChoosePassword" value=""
                                                           placeholder="Confirm Password"> <a href="javascript:;" required autocomplete="new-password"
                                                                                            class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
        @include("footer")
    </div>
@endsection
