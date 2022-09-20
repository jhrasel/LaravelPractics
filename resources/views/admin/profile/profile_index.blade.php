@extends('layouts.admin')

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="Profile">

            <div class="row">

                <div class="col-xl-4 m-auto">

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" >

                        @csrf

                        <input type="hidden" name="id" value="{{ Auth::id() }}">

                        <div class="card">

                            <div class="card-header">
                                <div class="card-title">Edit Profile</div>
                            </div>

                            <div class="card-body">

                                <div class="text-center chat-image mb-5">

                                    <img class="mt-3" id="pic" src="{{ asset('uploads/profiles') }}/{{ Auth::user()->photo }}" alt="" style="border-radius: 50%; width: 150px; height: 150px;">

                                </div>

                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <input type="file" name="photo"  class="form-control" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                        <input type="text" value="{{ Auth::user()->name }}" name="name"  class="input100 form-control">
                                    </div>
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
