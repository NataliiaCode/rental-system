@extends('layouts.app')

{{-- @section('content')
    <main class="page-content text-start">
        <!-- Section Title Breadcrumbs-->
        <section class="section-full">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Agency Page</h1>
                        <p></p>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>

                            <li class="active">Agency Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--Section About us-->
        <section class="section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h2>A Few Words About Us</h2>
                        <hr>
                        <p class="inset-3">Our company is focused on the real estate market with strong knowledge and
                            expertise regarding the real estate industry. We are distinguished for reliability and honesty.
                            We are recognized as one of the top real estate agencies in the area for residential and
                            commercial real estate sales.</p>
                        <p class="inset-3">Our agency offers a great selection of various properties at affordable prices.
                            Whether you are interested in buying, selling, or leasing real estate, we are here to help you.
                            We will give you all the information you need.</p>
                    </div>
                    <div class="col-12 col-md-8 col-lg-4 offset-custom-5 inset-9">
                        <h4 class="border-bottom">Soul of Agency</h4>
                        <div class="media media-mod-3">
                            <div class="media-left img-width-auto"><img src="images/agency-1.jpg" alt=""
                                    width="100" height="100"></div>
                            <div class="media-body">
                                <h5 class="text-sushi">Bryan Howell</h5>
                                <p>Founder, Listing Agent</p>
                                <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                    <dt>tel.</dt>
                                    <dd><a href="callto:#">1-800-1234-567</a></dd>
                                </dl>
                            </div>
                        </div>
                        <p>He is our leading specialist in everything concerning Real Estate and property management.</p><a
                            class="btn btn-primary btn-sm" href="#">get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Our Achievements-->
        <section class="section-md bg-gray">
            <div class="container text-center">
                <div class="row flow-offset-7">
                    <div class="col-12 col-md-6 col-lg-3"><span class="icon icon-primary icon-md fa-trophy"></span>
                        <p class="h6 text-white text-ubold">The Best Agency 2015</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3"><span class="icon icon-primary icon-md fa-flag"></span>
                        <p class="h6 text-white text-ubold">The Best Agents Award</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3"><span class="icon icon-primary icon-md fa-graduation-cap"></span>
                        <p class="h6 text-white text-ubold">Certified by the International Association</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3"><span class="icon icon-primary icon-md fa-star"></span>
                        <p class="h6 text-white text-ubold">The Five Star Award</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Our Team-->
        <section class="section-lg">
            <div class="container text-center text-md-start">
                <h2>Our Team</h2>
                <hr>
                <div class="row flow-offset-4">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto"><img src="images/agency-2.jpg" alt=""
                                        width="100" height="100"></div>
                                <div class="media-body">
                                    <h5 class="text-sushi">Heather Turner</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>She is our leading specialist in everything concerning Real Estate and property management.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto"><img src="images/agency-3.jpg" alt=""
                                        width="100" height="100"></div>
                                <div class="media-body">
                                    <h5 class="text-sushi">Keith Howard</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>He is our leading specialist in everything concerning Real Estate and property management.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto"><img src="images/agency-4.jpg" alt=""
                                        width="100" height="100"></div>
                                <div class="media-body">
                                    <h5 class="text-sushi">Scott Fuller</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>He is our leading specialist in everything concerning Real Estate and property management.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto"><img src="images/agency-5.jpg" alt=""
                                        width="100" height="100"></div>
                                <div class="media-body">
                                    <h5 class="text-sushi">Crystal Martinez</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>She is our leading specialist in everything concerning Real Estate and property management.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto"><img src="images/agency-6.jpg" alt=""
                                        width="100" height="100"></div>
                                <div class="media-body">
                                    <h5 class="text-sushi">Brittany Long</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>She is our leading specialist in everything concerning Real Estate and property management.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto"><img src="images/agency-7.jpg" alt=""
                                        width="100" height="100"></div>
                                <div class="media-body">
                                    <h5 class="text-sushi">Rebecca King</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>She is our leading specialist in everything concerning Real Estate and property management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Section Testimonial-->
        <section class="section-lg text-center text-md-start bg-gray-dark">
            <div class="container">
                <h2> Testimonials</h2>
                <hr>
                <!-- Owl Carousel-->
                <div class="owl-carousel owl-loaded owl-drag" data-items="1" data-sm-items="1" data-md-items="2"
                    data-lg-items="3" data-loop="false" data-margin="30" data-autoplay="true"
                    data-owl="{&quot;dots&quot;:true}" style="">









                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1920px, 0px, 0px); transition: 0.25s; width: 2880px;">
                            <div class="owl-item" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-16.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Laura
                                            Russell</span><span class="text-light-custom">Journalist, San
                                            Diego</span></cite>
                                    <p>
                                        <q>Thanks a lot for the quick response. I was really impressed, your solution is
                                            excellent!! Your competence is justified!!!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-17.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Richard
                                            Santos</span><span class="text-light-custom">Web Designer, New
                                            York</span></cite>
                                    <p>
                                        <q>I just don't know how to describe your services... They are extraordinary! I am
                                            quite happy with them! Just keep up going this way!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-18.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Diana
                                            Valdez</span><span class="text-light-custom">Teacher, San Diego</span></cite>
                                    <p>
                                        <q>Thank you very much. I'm impressed with your service. I've already told my
                                            friends about your company and your quick response, thanks again!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-16.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Laura
                                            Russell</span><span class="text-light-custom">Journalist, San
                                            Diego</span></cite>
                                    <p>
                                        <q>Thanks a lot for the quick response. I was really impressed, your solution is
                                            excellent!! Your competence is justified!!!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-17.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Richard
                                            Santos</span><span class="text-light-custom">Web Designer, New
                                            York</span></cite>
                                    <p>
                                        <q>I just don't know how to describe your services... They are extraordinary! I am
                                            quite happy with them! Just keep up going this way!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-18.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Dylan
                                            Medina</span><span class="text-light-custom">Teacher, San Diego</span></cite>
                                    <p>
                                        <q>Thank you very much. I'm impressed with your service. I've already told my
                                            friends about your company and your quick response, thanks again!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item active" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-16.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Laura
                                            Russell</span><span class="text-light-custom">Journalist, San
                                            Diego</span></cite>
                                    <p>
                                        <q>Thanks a lot for the quick response. I was really impressed, your solution is
                                            excellent!! Your competence is justified!!!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item active" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-17.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Richard
                                            Santos</span><span class="text-light-custom">Web Designer, New
                                            York</span></cite>
                                    <p>
                                        <q>I just don't know how to describe your services... They are extraordinary! I am
                                            quite happy with them! Just keep up going this way!</q>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="owl-item active" style="width: 290px; margin-right: 30px;">
                                <blockquote class="quote">
                                    <div class="img-wrap"><img src="images/index-18.jpg" alt="" width="50"
                                            height="50"></div>
                                    <cite class="text-start"><span class="h6 text-primary text-ubold">Dylan
                                            Medina</span><span class="text-light-custom">Teacher, San Diego</span></cite>
                                    <p>
                                        <q>Thank you very much. I'm impressed with your service. I've already told my
                                            friends about your company and your quick response, thanks again!</q>
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation"
                            class="owl-prev"></button><button type="button" role="presentation"
                            class="owl-next"></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot active"><span></span></button></div>
                </div>
            </div>
        </section>
    </main>

@endsection --}}

@section('content')

    <!-- Page Content-->
    <main class="page-content text-start">
        <!-- Section Title Breadcrumbs-->
        <section class="section-full bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1 class="mb-4">Сервіс житлової нерухомості</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-warning">На головну</a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">Про компанію</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!--Section About us-->
        <section class="section-lg py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <h2 class="mb-4">Modern Estate</h2>
                        <p class="mb-4">Ми сервіс житлової нерухомості, який допоможе вам придбати чи продати житло без
                            зайвих клопотів за найвигіднішими умовами.

                            Ми працюємо лише з надійними власниками й покупцями, а також беремо на себе всі турботи від
                            першого дзвінка до укладання угоди й надаємо повний юридичний супровід.

                            Наш сервіс на ринку з 2006 року — ми знаємо всі його тонкощі, тому весь шлях нашої співпраці
                            буде для вас простим, комфортним і надійним, а головне — вигідним!</p>

                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-body text-center">
                                <h4 class="card-title mb-3"><i class="bi bi-award"></i>Soul of Agency</h4>

                                <img src="images/agency-1.jpg" alt="Bryan Howell" class="rounded-circle mb-3" width="100"
                                    height="100">
                                <h5 class="card-title text-sushi mb-2 text-success">Bryan Howell</h5>
                                <p class="card-text mb-2">Founder, Listing Agent</p>
                                <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                    <dt>tel.</dt>
                                    <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                </dl>
                                <p class="card-text mb-3">Провідний спеціаліст у всьому, що стосується нерухомості та
                                    управління майном.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--Section Our Team-->
        <section class="section-lg">
            <div class="container text-center text-md-start">
                <h2>Our Team</h2>
                <hr>
                <div class="row flow-offset-4">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto">
                                    <img src="images/agency-2.jpg" alt="Heather Turner" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <h5 class="text-sushi text-success">Heather Turner</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>Провідний спеціаліст у всьому, що стосується нерухомості та управління майном.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto">
                                    <img src="images/agency-3.jpg" alt="Keith Howard" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <h5 class="text-sushi text-success">Keith Howard</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>Провідний спеціаліст у всьому, що стосується нерухомості та управління майном.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto">
                                    <img src="images/agency-4.jpg" alt="Scott Fuller" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <h5 class="text-sushi text-success">Scott Fuller</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>Провідний спеціаліст у всьому, що стосується нерухомості та управління майном.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto">
                                    <img src="images/agency-5.jpg" alt="Crystal Martinez" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <h5 class="text-sushi text-success">Crystal Martinez</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>Провідний спеціаліст у всьому, що стосується нерухомості та управління майном.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto">
                                    <img src="images/agency-6.jpg" alt="Brittany Long" width="100" height="100">
                                </div>
                                <div class="media-body">
                                    <h5 class="text-sushi text-success">Brittany Long</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>Провідний спеціаліст у всьому, що стосується нерухомості та управління майном.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="team-member">
                            <div class="media media-mod-3">
                                <div class="media-left img-width-auto">
                                    <img src="images/agency-7.jpg" alt="Rebecca King width" width="100"
                                        height="100">
                                </div>
                                <div class="media-body">
                                    <h5 class="text-sushi text-success">
                                        Rebecca King</h5>
                                    <p>Listing Agent</p>
                                    <dl class="dl-horizontal-mod-1 text-ubold text-abbey">
                                        <dt>tel.</dt>
                                        <dd><a href="callto:#" class="text-warning">1-800-1234-567</a></dd>
                                    </dl>
                                </div>
                            </div>
                            <p>Провідний спеціаліст у всьому, що стосується нерухомості та управління майном.
                            </p>
                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->

@endsection
@section('title', 'Про компанію')
