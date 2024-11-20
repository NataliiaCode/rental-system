<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="style.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="logo">
                    <img src="{{ asset('logo-1.png') }}" alt="Логотип" style="height: 30px;">
                </li>



            </ul>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.propertyTypes.index') }}">Property types</a>

                    </li>

                    <li>
                        <a class="nav-link" href="{{ route('admin.properties.index') }}">Properties</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <div class="container">

        @yield('content')

    </div>

    <footer class="page-foot text-start bg-gray">
        <section class="footer-content">
            <div class="container">
                <div class="row flow-offset-3">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img
                                    src="images/logo-2.png" alt=""></a></div>
                        <p>We believe in Simple, Creative &amp; Flexible Design Standards.</p>
                        <address class="address">
                            <dl>
                                <dt>Headquarters:</dt>
                                <dd>795 Folsom Ave, Suite 600 San Francisco, CA 94107</dd>
                            </dl>
                            <dl class="dl-horizontal-mod-1">
                                <dt>Phone</dt>
                                <dd><a class="text-primary" href="callto:#">(91) 8547 632521</a></dd>
                            </dl>
                            <dl class="dl-horizontal-mod-1">
                                <dt>Fax</dt>
                                <dd><a class="text-primary" href="callto:#">(91) 11 4752 1433</a></dd>
                            </dl>
                            <dl class="dl-horizontal-mod-1">
                                <dt>Email</dt>
                                <dd><a class="text-primary" href="mailto:#">info@canvas.com</a></dd>
                            </dl>
                        </address>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <h6 class="text-ubold">Blogroll</h6>
                        <ul class="list-marked well6 text-start">
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Plugins</a></li>
                            <li><a href="#">Support Forums</a></li>
                            <li><a href="#">Themes</a></li>
                            <li><a href="#">WordPress Blog</a></li>
                            <li><a href="#">WordPress Planet</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <h6 class="text-ubold">Recent posts</h6>
                        <div class="blog-post text-start">
                            <div class="blog-post-title"><a class="text-primary" href="blog_post.html">Believe in the
                                    Business of Your Dreams</a></div>
                            <div class="blog-post-time">
                                <time class="small" datetime="2024">December 28, 2024</time>
                            </div>
                        </div>
                        <div class="blog-post text-start">
                            <div class="blog-post-title"><a class="text-primary" href="blog_post.html">Establishing Your
                                    Brand on College Campuses</a></div>
                            <div class="blog-post-time">
                                <time class="small" datetime="2024">December 28, 2024</time>
                            </div>
                        </div>
                        <div class="blog-post text-start">
                            <div class="blog-post-title"><a class="text-primary" href="blog_post.html">Beautiful Rumi
                                    Quotes that are Worth Reading</a></div>
                            <div class="blog-post-time">
                                <time class="small" datetime="2024">December 28, 2024</time>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <h6 class="text-ubold">Newsletter</h6>
                        <p class="text-gray">Enter your email address to receive all news, updates on new arrivals,
                            special offers and other information.</p>
                        <!-- RD Mailform-->
                        <form class="rd-mailform text-start subscribe" data-form-output="form-output-global"
                            data-form-type="subscribe" method="post" action="bat/rd-mailform.php"
                            novalidate="novalidate">
                            <div class="form-wrap">
                                <label class="form-label rd-input-label" for="email-sub"></label>
                                <input class="form-input form-control-has-validation form-control-last-child"
                                    id="email-sub" type="email" name="email" data-constraints="@Required @Email"
                                    placeholder="Enter e-mail"><span class="form-validation"></span>
                            </div>
                            <button class="btn btn-sushi btn-sm">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row row-30 justify-content-between">
                    <div class="col-md-auto">
                        <p>©<span class="copyright-year">2024</span><a href="terms.html">Terms of Use and Privacy
                                Policy</a></p>
                    </div>
                    <div class="col-md-auto">
                        <ul class="list-inline">
                            <li><a class="fa-facebook" href="#"></a></li>
                            <li><a class="fa-twitter" href="#"></a></li>
                            <li><a class="fa-pinterest-p" href="#"></a></li>
                            <li><a class="fa-vimeo" href="#"></a></li>
                            <li><a class="fa-google" href="#"></a></li>
                            <li><a class="fa-rss" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rd Mailform result field-->
        <div class="rd-mailform-validate"></div>
    </footer>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</html>
