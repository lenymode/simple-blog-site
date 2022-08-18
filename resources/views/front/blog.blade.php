@extends('front.master.master')

@section('content')
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2 class="post-title">{{ $posts->name }}</h2>
                    <h3 class="post-subtitle">{{ $posts->short }}</h3>
                    <p>{{ $posts->text }}</p>


                </div>
            </div>
    </main>
    <section style="background-color: #eee;">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">


                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                    width="60" height="60" />
                                <div>
                                    <h6 class="fw-bold text-primary mb-1">Name</h6>
                                    <p class="text-muted small mb-0">
                                        Shared publicly - Jan 2020
                                    </p>
                                </div>

                            </div>

                            <p class="mt-3 mb-4 pb-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                            </p>

                            <div class="small d-flex justify-content-start">
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-thumbs-up me-2"></i>
                                    <p class="mb-0">Like</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="far fa-comment-dots me-2"></i>
                                    <p class="mb-0">Comment</p>
                                </a>
                                <a href="#!" class="d-flex align-items-center me-3">
                                    <i class="fas fa-share me-2"></i>
                                    <p class="mb-0">Share</p>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar"
                                    width="40" height="40" />
                                @if (Auth::check())
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" placeholder="You are logged in!" id="textAreaExample" rows="4"
                                            style="background: #fff;"></textarea>
                                        <label class="form-label" for="textAreaExample">Comment</label>
                                    </div>
                                @else
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" placeholder="You need to log-in or Sign-Up!!" id="textAreaExample" rows="4"
                                            style="background: #fff;"></textarea>
                                        <label class="form-label" for="textAreaExample">Comment</label>
                                    </div>
                                @endif
                            </div>

                            @if (Auth::check())
                                <div class="float-end mt-2 pt-1">
                                    
                                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                                </div>
                            @else
                            <a href="{{route('blog', $posts->id)}}">
                                <div class="float-end mt-2 pt-1">
                                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                                </div>
                            </a>
                            @endif


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
