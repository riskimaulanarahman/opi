@extends('layouts.master')
@section('title') @lang('translation.Images') @endsection
@section('content')


@section('pagetitle')Images @endsection


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Image Rounded & Circle</h4>
                </div>
                <div class="card-body">
                    <p class="card-title-desc">Use classes
                        <code>.rounded</code> and <code>.rounded-circle</code>.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <img class="rounded me-2" alt="200x200" width="200" src="{{ URL::asset('assets/images/small/img-4.jpg') }}"
                                data-holder-rendered="true">
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-0">
                                <img class="rounded-circle avatar-xl" alt="200x200" src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}"
                                    data-holder-rendered="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Image thumbnails</h4>
                </div>
                <div class="card-body">
                    <p class="card-title-desc">In addition to our border-radius utilities, you can use
                        <code class="highlighter-rouge">.img-thumbnail</code> to give an image a
                        rounded 1px border appearance.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-thumbnail" alt="200x200" width="200" src="{{ URL::asset('assets/images/small/img-3.jpg') }}"
                                data-holder-rendered="true">
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-0">
                                <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200"
                                    src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" data-holder-rendered="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Responsive images</h4>
                </div>
                <div class="card-body">
                    <p class="card-title-desc">Images in Bootstrap are made responsive
                        with <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width:
                            100%;</code> and <code class="highlighter-rouge">height: auto;</code> are applied to
                        the image so that it scales with the parent element.</p>

                    <div class="">
                        <img src="{{ URL::asset('assets/images/small/img-2.jpg') }}" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Image Sizes</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt="" class="rounded avatar-sm">
                                        <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt="" class="rounded avatar-md">
                                        <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt="" class="rounded avatar-lg">
                                        <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <img src="{{ URL::asset('assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                        <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <img src="{{ URL::asset('assets/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-md">
                                        <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <img src="{{ URL::asset('assets/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-lg">
                                        <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
