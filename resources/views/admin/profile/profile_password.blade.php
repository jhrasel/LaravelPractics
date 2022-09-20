@extends('layouts.admin')

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="Profile">

            <div class="row">

                <div class="col-xl-4 m-auto">

                    <form action="{{ route('profile.password.update') }}" method="POST" enctype="multipart/form-data" >

                        @csrf

                        <input type="hidden" name="id" value="{{ Auth::id() }}">

                        <div class="card">

                            <div class="card-header">
                                <div class="card-title">Edit Password</div>
                            </div>

                            <div class="card-body">

                                <div class="text-center chat-image mb-5">

                                    <div class="text-center chat-image mb-5">
                                        <img class="mt-3" id="pic" src="{{ asset('uploads/profiles') }}/{{ Auth::user()->photo }}" alt="" style="border-radius: 50%; width: 150px; height: 150px;">
                                    </div>

                                    <div class="main-chat-msg-name" style="margin-left: 0">
                                        <a href="profile.html">
                                            <h5 class="mb-1 text-dark fw-semibold">{{ Auth::user()->name }}</h5>
                                        </a>
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="form-label">Current Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">

                                        <input class="input100 form-control" type="password" name="old_password" placeholder="Current Password" autocomplete="current-password">

                                    </div>

                                    @error('old_password')
                                            <div class="text-danger mt-1">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                    @if (session('wrong'))
                                        <div class="alert alert-danger mt-2">
                                            {{ session('wrong') }}
                                        </div>
                                    @endif


                                </div>

                                <div class="form-group">

                                    <label class="form-label">New Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                        <input class="input100 form-control" type="password" name="password" placeholder="New Password" autocomplete="new-password">
                                    </div>

                                    @error('password')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="form-group">

                                    <label class="form-label">Confirm Password</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle2">

                                        <input class="input100 form-control" type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">

                                    </div>

                                    @error('password_confirmation')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                            </div>

                            <div class="card-footer text-start">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </section>

    </div>

@endsection
