@extends("welcome")
@section('title_name')
Blog Page
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Blog</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Blog</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                @foreach($data as $row)
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/uploads/blogs/'.$row->blogimage)}}" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                                style="width: 80px; height: 80px; bottom: 0; left: 0;">
                                <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                                <h1 class="m-0">01</h1>
                            </div>
                        </div>
                        <div class="border border-top-0 mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('assets/img/user.jpg')}}" alt="">
                                    <a class="text-muted ml-2" href="/blog">{{ $row->Writer_name}}</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                    <a class="text-muted ml-2" href="/blog">{{ $row->title}}</a>
                                </div>
                            </div>
                            <a class="h4 font-weight-bold" href="/blog">{{ $row->description}}</a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center mb-0">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog Grid End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
               
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Categories</h3>
                    @foreach($data as $row)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href='/blog'><i class="fa fa-angle-right mr-2"></i>{{ $row->title}}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Recent Post</h3>
                    @foreach($data as $row)
                    <div class="d-flex mb-3">
                        <img class="img-fluid"  src="{{ asset('assets/uploads/blogs/'.$row->blogimage)}}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="/blog">{{ $row->description}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="border p-3 mb-5">
                    <img src="{{ asset('assets/img/blog-1.jpg')}}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="/blog" class="btn btn-outline-primary m-1">Design</a>
                        <a href="/blog" class="btn btn-outline-primary m-1">Development</a>
                        <a href="/blog" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="/blog" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="/blog" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="/blog" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Image Start -->
                <div class="border p-3 mb-5">
                    <img src="{{ asset('assets/img/blog-2.jpg')}}" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="font-weight-bold mb-4">Plain Text</h3>
                    <div class="border p-3">
                        Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor clita sit et elitr eirmod.
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    @endsection