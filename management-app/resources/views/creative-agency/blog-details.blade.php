@extends("welcome")
@section('title_name')
Blog Details
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Blog Detail</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Detail</p>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-8">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog-1.jpg')}}" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center"
                        style="width: 80px; height: 80px; bottom: 0; left: 0;">
                        <h6 class="text-uppercase mt-2 mb-n2">Jan</h6>
                        <h1 class="m-0">01</h1>
                    </div>
                </div>
                <div class="pt-4 pb-2">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="{{ asset('assets/img/user.jpg')}}" alt="">
                            <a class="text-muted ml-2" href="">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Web Design</a>
                        </div>
                    </div>
                    <h2 class="font-weight-bold">Kasd tempor diam sea justo dolor kasd amet dolor labore amet clita est diam dolor</h2>
                </div>

                <div class="mb-5">
                    <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                    <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.</p>
                    <h2 class="mb-4">Est dolor lorem et ea</h2>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="{{ asset('assets/img/blog-1.jpg')}}" alt="Image">
                    <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit voluptua eos.</p>
                    <h3 class="mb-4">Est dolor lorem et ea</h3>
                    <img class="img-fluid w-50 float-right ml-4 mb-3" src="{{ asset('assets/img/blog-2.jpg')}}" alt="Image">
                    <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no.</p>
                </div>

                <!-- Comment List Start
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">3 Comments</h3>
                    <div class="media mb-4">
                        <img src="{{ asset('assets/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light font-weight-semi-bold">Reply</button>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <img src="{{ asset('assets/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light font-weight-semi-bold">Reply</button>
                            <div class="media mt-4">
                                <img src="{{ asset('assets/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-light font-weight-semi-bold">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 Comment List End -->

                <!-- Comment Form Start -->
                <!-- <div class="border p-5">
                    <h3 class="font-weight-bold mb-4">Leave a comment</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                        </div>
                    </form>
                </div> -->
                <!-- Comment Form End -->
            </div>
            <!-- Blog Detail End -->

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
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Web Development</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Online Marketing</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Keyword Research</a>
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a class="font-weight-semi-bold text-decoration-none" href="#"><i class="fa fa-angle-right mr-2"></i>Email Marketing</a>
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Recent Post</h3>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg')}}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/blog-2.jpg')}}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg')}}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/blog-2.jpg')}}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{ asset('assets/img/blog-1.jpg')}}" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex align-items-center border border-left-0 px-3" style="height: 80px;">
                            <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
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
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
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
    <!-- Detail End -->
    @endsection