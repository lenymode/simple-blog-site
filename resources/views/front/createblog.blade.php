@extends('front.master.master')

@section('content')
    <!-- Main Content-->
    <section class="vh-100" style="background-color: #2779e2;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <form action="{{route('storeblog')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="text-white mb-4">Creat New Blog</h1>
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Blog Tittle</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input name="name" type="text" class="form-control form-control-lg" />
                                    </div>
                                </div>

                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Blog Description</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <input name="short" type="text" class="form-control form-control-lg"
                                            placeholder="Short description" />
                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0">Write Your Blog Here</h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <textarea name="text" class="form-control" rows="3" placeholder="Writ Your Blog Here"></textarea>
                                    </div>
                                </div>

                                <hr class="mx-n3">
                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">
                                        <h6 class="mb-0"></h6>
                                    </div>
                                    <div class="col-md-9 pe-5">
                                        <label for="img">Select image:</label>
                                        <input name="image" type="file" id="image" accept="image/*">
                                    </div>
                                </div>
                                <hr class="mx-n3">
                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Create Blog</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
