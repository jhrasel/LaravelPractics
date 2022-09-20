@extends('layouts.admin')

@section('setting') active @endsection

@section('admin_content')

    <div class="main-container container-fluid">

        <section id="GeneralSettings">

            {{-- App Logo --}}
            <div class="card col-lg-6 mx-auto mb-5">
                <div class="card-header">
                    <h3 class="card-title">General Settings</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_setting') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Logo --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Logo <span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="app_logo" data-bs-height="180" data-default-file=""/>
                                    <input type="hidden" name="types[]" value="app_logo">
                                </div>
                            </div>

                            {{-- Favicon --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Favicon<span class="text-red">*</span></label>
                                    <input type="file" class="dropify" name="app_favicon" data-bs-height="180" data-default-file=""/>
                                    <input type="hidden" name="types[]" value="app_favicon">
                                </div>
                            </div>

                            {{-- App Name --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">App Name<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_name" placeholder="App Name" value="">
                                    <input type="hidden" name="types[]" value="app_name">
                                </div>
                            </div>

                            {{-- App Description --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">App Description<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_description" placeholder="App Description" value="">
                                    <input type="hidden" name="types[]" value="app_description">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>


                </div>
            </div>

            {{-- App Logo --}}
            <div class="card col-lg-6 mx-auto">
                <div class="card-header">
                    <h3 class="card-title">Contact Settings</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_setting') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Email --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Email<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_email" placeholder="Email" value="">
                                    <input type="hidden" name="types[]" value="app_email">
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Phone<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_phone" placeholder="Phone Number" value="">
                                    <input type="hidden" name="types[]" value="app_phone">
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Address<span class="text-red">*</span></label>
                                    <textarea class="form-control" name="app_address" placeholder="Address" rows="5"></textarea>
                                    <input type="hidden" name="types[]" value="app_address">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>


                </div>
            </div>

            {{-- Social Link --}}
            <div class="card col-lg-6 mx-auto">
                <div class="card-header">
                    <h3 class="card-title">Social Links</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('update_setting') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            {{-- Facebook --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Facebook<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_fb" placeholder="Facebook Link" value="">
                                    <input type="hidden" name="types[]" value="app_fb">
                                </div>
                            </div>

                            {{-- Youtube --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Youtube<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_youtube" placeholder="Youtube Link" value="">
                                    <input type="hidden" name="types[]" value="app_youtube">
                                </div>
                            </div>

                            {{-- Instagram --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Instagram<span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="app_instagram" placeholder="Instagram Link" value="">
                                    <input type="hidden" name="types[]" value="app_instagram">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary mt-4 mb-0 w-100">Save</button>
                            </div>

                        </div>

                    </form>


                </div>
            </div>

        </section>

    </div>


@endsection
