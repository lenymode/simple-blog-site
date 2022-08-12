@extends('front.master.master')

@section('content')
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {{-- session --}}

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    {{-- <img src="images/{{ Session::get('image') }}"> --}}
                @endif


                <!-- Post preview-->
                <div class="post-preview">



                    @if (Auth::check())
                        @foreach ($posts as $post)
                            <a href="{{ route('blog') }}">
                                <h2 class="post-title">{{ $post->name }}</h2>
                                <h3 class="post-subtitle">{{ $post->short }}</h3>
                            </a>
                        @endforeach
                    @else
                        @foreach ($posts as $post)
                            <a href="{{ route('guestblog') }}">
                                <h2 class="post-title">{{ $post->name }}</h2>
                                <h3 class="post-subtitle">{{ $post->short }}</h3>
                            </a>
                        @endforeach
                    @endif
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Mr.Kasem</a>
                        on September 24, 2022
                    </p>


                    <form action="" method="">
                        @csrf
                        <div class="form-outline w-100">
                            <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                            <label class="form-label" for="textAreaExample">Comment</label>
                        </div>
                </div>
                <div class="float-end mt-2 pt-1">
                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                </div>
                </form>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                    Posts →</a></div>
        </div>
    </div>
    </div>
@endsection
