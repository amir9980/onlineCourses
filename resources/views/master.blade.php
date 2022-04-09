
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Title  -->
    <title>کلاسهای آنلاین</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Theme Color -->
    <meta name="theme-color" content="#17161f">

</head>

<body>

<!-- =====================================
==== Start Loading -->

<div class="loading">
    <div class="gooey">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- End Loading ====
======================================= -->

<div class="wrapper dark solid"></div>

<main>

    <!-- =====================================
    ==== Start FullPage Navbar -->

    <div class="side-menu">

        <!-- Logo -->
        <a class="logo" href="#">
            <img src="{{asset('assets/img/logo-light.png')}}" alt="logo">
        </a>

        <span class="icon-open ti-view-grid"></span>

        <div class="nav-menu">

            <span class="icon-close ti-close"></span>

            <div class="valign">
                <ul>
                    <li class="menu-item">
                        <a class="menu-link active" href="#" data-scroll-nav="0">خانه</a>
                    </li>
                    @guest
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('login')}}">ورود</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('register')}}">عضویت</a>
                    </li>
                    @endguest
                    @auth
                        <li class="menu-item">
                            <form action="{{route('logout')}}" method="POST" >
                                @csrf
                                <button type="submit" class="menu-link">خروج از حساب کاربری</button>
                            </form>
                        </li>
                    @endauth
                    <li class="menu-item">
                        <a class="menu-link" href="#" data-scroll-nav="1">درباره ما</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#" data-scroll-nav="2">خدمات</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#" data-scroll-nav="3">کارها</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#" data-scroll-nav="4">قیمت</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#" data-scroll-nav="5">بلاگ</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#" data-scroll-nav="6">تماس</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- End FullPage Navbar ====
    ======================================= -->



    <!-- =====================================
    ==== Start nav-points -->

    <div class="nav-points valign hide-md">
        <ul>
            <li class="point-item">
                <a class="point-link active" href="#" data-scroll-nav="0"></a>
            </li>
            <li class="point-item">
                <a class="point-link" href="#" data-scroll-nav="1"></a>
            </li>
            <li class="point-item">
                <a class="point-link" href="#" data-scroll-nav="2"></a>
            </li>
            <li class="point-item">
                <a class="point-link" href="#" data-scroll-nav="3"></a>
            </li>
            <li class="point-item">
                <a class="point-link" href="#" data-scroll-nav="4"></a>
            </li>
            <li class="point-item">
                <a class="point-link" href="#" data-scroll-nav="5"></a>
            </li>
            <li class="point-item">
                <a class="point-link" href="#" data-scroll-nav="6"></a>
            </li>
        </ul>
    </div>

    <!-- End nav-points ====
    ======================================= -->


    <!-- =====================================
    ==== Start Header -->

    <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="9" data-background="{{asset('assets/img/bg1.jpg')}}" data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center caption mt-50">
                    <h1>قالب مدرن و خلاقانه</h1>

                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در</p>
                        </div>
                    </div>

                    <a href="#0" class="butn butn-light">
                        <span>آشنایی بیشتر</span>
                    </a>
                    <a href="#0" class="butn butn-bg">
                        <span>شروع کنید</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- button-scroll -->
        <div class="button-scroll" data-scroll-nav="1"><span></span></div>
    </header>

    <!-- End Header ====
    ======================================= -->



    <!-- =====================================
    ==== Start Hero -->

    <section class="hero section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro text-center">
                        <h6>خوش آمدید!</h6>
                        <h5>ما یک شرکت متخصص در زمینه طراحی دیجیتال <br class="d-none d-sm-block"> و ارائه خدمات توسعه وب هستیم</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای</p>
                        <a href="#0" class="butn butn-bord mt-30">
                            <span>مشاهده کارها</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Hero ====
    ======================================= -->



    <!-- =====================================
    ==== Start Services -->

    <section class="services section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head offset-lg-1 col-lg-10">

                    <div class="text-bg">خدمات</div>

                    <div class="row">

                        <div class="col-lg-6 text-right">
                            <h4>ویژگی های ما</h4>
                        </div>
                        <div class="col-lg-6">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه</p>
                        </div>

                        <span class="border"></span>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-50">
                        <span class="icon ti-ruler-pencil"></span>
                        <h6>طراحی خلاقانه</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-50">
                        <span class="icon ti-shield"></span>
                        <h6>تجربه کاربر</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-50">
                        <span class="icon ti-package"></span>
                        <h6>سفارشی سازی</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    </div>
                </div>

                <hr>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md50">
                        <span class="icon ti-brush-alt"></span>
                        <h6>مناسب رتینا</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-sm50">
                        <span class="icon ti-tablet"></span>
                        <h6>کاملا واکنشگرا</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span class="icon ti-headphone-alt"></span>
                        <h6>طراحی مدرن</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Services ====
    ======================================= -->



    <!-- =====================================
    ==== Start Portfolio -->

    <section class="portfolio section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">

                <div class="section-head offset-lg-1 col-lg-10">

                    <div class="text-bg">نمونه‌کارها</div>

                    <div class="row">

                        <div class="col-lg-6 text-right">
                            <h4>کارهای ما</h4>
                        </div>
                        <div class="col-lg-6">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه</p>
                        </div>

                        <span class="border"></span>

                    </div>
                </div>

                <!-- filter links -->
                <div class="filtering text-center full-width">
                    <div class="filter">
                        <span data-filter="*" class="active">همه</span>
                        <span data-filter=".brand">برند</span>
                        <span data-filter=".web">طراحی</span>
                        <span data-filter=".graphic">گرافیک</span>
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery full-width">

                    <!-- gallery item -->
                    <div class="items graphic">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/1.png')}}" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>لوگو | برندسازی</p>
                                    <h6>طراحی وب خلاقانه</h6>
                                    <a href="{{asset('assets/img/portfolio/1.png')}}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items web">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/2.png')}}" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>لوگو | برندسازی</p>
                                    <h6>طراحی وب خلاقانه</h6>
                                    <a href="{{asset('assets/img/portfolio/2.png')}}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items brand">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/3.png')}}" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>لوگو | برندسازی</p>
                                    <h6>طراحی وب خلاقانه</h6>
                                    <a href="{{asset('assets/img/portfolio/3.png')}}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items graphic">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/4.png')}}" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>لوگو | برندسازی</p>
                                    <h6>طراحی وب خلاقانه</h6>
                                    <a href="{{asset('assets/img/portfolio/4.png')}}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items web">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/5.png')}}" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>لوگو | برندسازی</p>
                                    <h6>طراحی وب خلاقانه</h6>
                                    <a href="{{asset('assets/img/portfolio/5.png')}}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items brand">
                        <div class="item-img">
                            <img src="{{asset('assets/img/portfolio/6.png')}}" alt="image">
                            <div class="item-img-overlay">
                                <div class="overlay-info full-width">
                                    <p>لوگو | برندسازی</p>
                                    <h6>طراحی وب خلاقانه</h6>
                                    <a href="{{asset('assets/img/portfolio/6.png')}}" class="popimg">
                                        <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Portfolio ====
    ======================================= -->



    <!-- =====================================
    ==== Start Team -->

    <section class="team section-padding bg-img bg-fixed" data-overlay-dark="9" data-background="{{asset('assets/img/bg2.jpg')}}">
        <div class="container">
            <div class="row">

                <div class="section-head offset-lg-1 col-lg-10">

                    <div class="text-bg">تیم</div>

                    <div class="row">

                        <div class="col-lg-6 text-right">
                            <h4>تیم ما</h4>
                        </div>
                        <div class="col-lg-6">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه</p>
                        </div>

                        <span class="border"></span>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="item mb-md50">
                                <div class="img">
                                    <img src="{{asset('assets/img/team/1.jpg')}}" alt="">

                                    <div class="social">
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="text-center">
                                        <h6>استیو جابز</h6>
                                        <span class="border"></span>
                                        <p>طراح رابط کاربری</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item mb-md50">
                                <div class="img">
                                    <img src="{{asset('assets/img/team/2.jpg')}}" alt="">

                                    <div class="social">
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="text-center">
                                        <h6>استیو جابز</h6>
                                        <span class="border"></span>
                                        <p>طراح رابط کاربری</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item mb-sm50">
                                <div class="img">
                                    <img src="{{asset('assets/img/team/3.jpg')}}" alt="">

                                    <div class="social">
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="text-center">
                                        <h6>استیو جابز</h6>
                                        <span class="border"></span>
                                        <p>طراح رابط کاربری</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <div class="img">
                                    <img src="{{asset('assets/img/team/4.jpg')}}" alt="">

                                    <div class="social">
                                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#0"><i class="fab fa-twitter"></i></a>
                                        <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="text-center">
                                        <h6>استیو جابز</h6>
                                        <span class="border"></span>
                                        <p>طراح رابط کاربری</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Team ====
    ======================================= -->



    <!-- =====================================
    ==== Start Price -->

    <section class="price section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row">

                <div class="section-head offset-lg-1 col-lg-10">

                    <div class="text-bg">قیمت ها</div>

                    <div class="row">

                        <div class="col-lg-6 text-right">
                            <h4>قیمت های ما</h4>
                        </div>
                        <div class="col-lg-6">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه</p>
                        </div>

                        <span class="border"></span>

                    </div>
                </div>

                <div class="pricing-tables text-center col-12 px-sm-0">

                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="item mb-md50">
                                <div class="type">
                                    <h4>رایگان</h4>
                                </div>

                                <div class="value">
                                    <h3>0<span>تومان</span></h3>
                                    <span class="per">/ ماهانه</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>10 GB فضای دیسک</li>
                                        <li>15 نام دامنه</li>
                                        <li>4 آدرس ایمیل</li>
                                        <li>امنیت پیشرفته</li>
                                        <li>پشتیبانی بی نهایت</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bord">
                                        <span>اکنون بخرید</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="item mb-md50">
                                <div class="type">
                                    <h4>پایه</h4>
                                </div>

                                <div class="value">
                                    <h3>10,000<span>تومان</span></h3>
                                    <span class="per">/ ماهانه</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>10 GB فضای دیسک</li>
                                        <li>15 نام دامنه</li>
                                        <li>4 آدرس ایمیل</li>
                                        <li>امنیت پیشرفته</li>
                                        <li>پشتیبانی بی نهایت</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bord">
                                        <span>اکنون بخرید</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="item active mb-sm50">

                                <div class="best">
                                    <span>بسته ویژه</span>
                                </div>

                                <div class="type">
                                    <h4>استاندارد</h4>
                                </div>

                                <div class="value">
                                    <h3>30,000<span>تومان</span></h3>
                                    <span class="per">/ ماهانه</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>100 GB فضای دیسک</li>
                                        <li>30 نام دامنه</li>
                                        <li>5 آدرس ایمیل</li>
                                        <li>امنیت پیشرفته</li>
                                        <li>پشتیبانی بی نهایت</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bg">
                                        <span>اکنون بخرید</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <div class="type">
                                    <h4>طلایی</h4>
                                </div>

                                <div class="value">
                                    <h3>80,000<span>تومان</span></h3>
                                    <span class="per">/ ماهانه</span>
                                </div>

                                <div class="features">
                                    <ul>
                                        <li>500 GB فضای دیسک</li>
                                        <li>100 نام دامنه</li>
                                        <li>10 آدرس ایمیل</li>
                                        <li>امنیت پیشرفته</li>
                                        <li>پشتیبانی بی نهایت</li>
                                    </ul>
                                </div>

                                <div class="order">
                                    <a href="#0" class="butn butn-bord">
                                        <span>اکنون بخرید</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- End Price ====
    ======================================= -->



    <!-- =====================================
    ==== Start Testimonials -->

    <section class="testimonials section-padding bg-img bg-fixed" data-overlay-dark="9" data-background="{{asset('assets/img/bg3.jpg')}}">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 valign">
                    <div class="big-title">
                        <h2>آنچه <span>مشتریان</span> <br> <span>ما</span> می‌گویند</h2>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="testim owl-carousel owl-theme">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('assets/img/quote.svg')}}" alt="">
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط</p>
                            <div class="client-area">
                                <div class="img">
                                    <div class="author">
                                        <img src="{{asset('assets/img/clients/1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="info">
                                    <h6>استیو جابز</h6>
                                    <span>مشتری همیشگی</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('assets/img/quote.svg')}}" alt="">
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط</p>
                            <div class="client-area">
                                <div class="img">
                                    <div class="author">
                                        <img src="{{asset('assets/img/clients/2.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="info">
                                    <h6>استیو جابز</h6>
                                    <span>مشتری همیشگی</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('assets/img/quote.svg')}}" alt="">
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط</p>
                            <div class="client-area">
                                <div class="img">
                                    <div class="author">
                                        <img src="{{asset('assets/img/clients/3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="info">
                                    <h6>بری الن</h6>
                                    <span>مشتری همیشگی</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clients text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 owl-carousel owl-theme">
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/2.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/3.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/4.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/5.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/6.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/7.png')}}" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#0">
                                <img src="{{asset('assets/img/clients-logo/8.png')}}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Testimonials ====
    ======================================= -->



    <!-- =====================================
    ==== Start Blog -->

    <section class="blog section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head offset-lg-1 col-lg-10">

                    <div class="text-bg">اخبار</div>

                    <div class="row">

                        <div class="col-lg-6 text-right">
                            <h4>بلاگ ما</h4>
                        </div>
                        <div class="col-lg-6">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه</p>
                        </div>

                        <span class="border"></span>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="item mb-30">
                        <div class="row">
                            <div class="col-md-5 order-last">
                                <div class="post-img mb-sm30">
                                    <img src="{{asset('assets/img/blog/1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 order-first valign">
                                <div class="post-content text-right">
                                    <div class="date">
                                        <span><a href="#0">6 آذر 1397</a></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="#0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h5>
                                    </div>
                                    <div class="tags">
                                        <a href="#0">وردپرس</a>
                                        <a href="#0">راست‌چین</a>
                                    </div>
                                    <div class="more">
                                        <a href="#0"><span class="icon ti-arrow-left"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="item mb-30">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="post-img mb-sm30">
                                    <img src="{{asset('assets/img/blog/2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 valign">
                                <div class="post-content">
                                    <div class="date">
                                        <span><a href="#0">6 آذر 1397</a></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="#0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h5>
                                    </div>
                                    <div class="tags">
                                        <a href="#0">وردپرس</a>
                                        <a href="#0">راست‌چین</a>
                                    </div>
                                    <div class="more">
                                        <a href="#0"><span class="icon ti-arrow-left"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="item mb-md30">
                        <div class="row">
                            <div class="col-md-5 order-last">
                                <div class="post-img mb-sm30">
                                    <img src="{{asset('assets/img/blog/3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 order-first valign">
                                <div class="post-content text-right">
                                    <div class="date">
                                        <span><a href="#0">6 آذر 1397</a></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="#0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h5>
                                    </div>
                                    <div class="tags">
                                        <a href="#0">وردپرس</a>
                                        <a href="#0">راست‌چین</a>
                                    </div>
                                    <div class="more">
                                        <a href="#0"><span class="icon ti-arrow-left"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="post-img mb-sm30">
                                    <img src="{{asset('assets/img/blog/4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 valign">
                                <div class="post-content mb-0">
                                    <div class="date">
                                        <span><a href="#0">6 آذر 1397</a></span>
                                    </div>
                                    <div class="title">
                                        <h5><a href="#0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h5>
                                    </div>
                                    <div class="tags">
                                        <a href="#0">وردپرس</a>
                                        <a href="#0">راست‌چین</a>
                                    </div>
                                    <div class="more">
                                        <a href="#0"><span class="icon ti-arrow-left"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Blog ====
    ======================================= -->



    <!-- =====================================
    ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">

                <div class="section-head offset-lg-1 col-lg-10">

                    <div class="text-bg">تماس</div>

                    <div class="row">

                        <div class="col-lg-6 text-right">
                            <h4>تماس با ما</h4>
                        </div>
                        <div class="col-lg-6">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه</p>
                        </div>

                        <span class="border"></span>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info mb-md50">
                        <div class="item">
                            <span class="icon ti-mobile"></span>
                            <div class="cont">
                                <h6>تلفن: </h6>
                                <p><span class="ltr-text">(+98) 123 456 789</span></p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon ti-email"></span>
                            <div class="cont">
                                <h6>ایمیل : </h6>
                                <p>info@example.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon ti-map-alt"></span>
                            <div class="cont">
                                <h6>آدرس : </h6>
                                <p>تبریز، فلکه دانشگاه، برج بلور، طبقه 456</p>
                                <p>تهران، نیاوران، جنب بانک ملت، پلاک 786</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form class="form" id="contact-form" method="post" action="contact.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="نام" required="required" data-error="وارد کردن نام الزامی است">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="ایمیل" required="required" data-error="وارد کردن ایمیل معتبر الزامی است" dir="ltr">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="subject" placeholder="موضوع">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="پیام" rows="4" required="required" data-error="وارد کردن پیام الزامی است"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-5">
                                    <button type="submit" class="butn butn-light"><span>ارسال پیام</span></button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- End Contact ====
    ======================================= -->



    <!-- =====================================
    ==== Start Footer -->

    <footer class="text-center">
        <div class="container">

            <div class="social">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                <a href="#0"><i class="fab fa-telegram"></i></a>
                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
            </div>

            <p>ارائه شده در وب‌سایت <a href="https://www.rtl-theme.com" target="_blank">راست‌چین</a></p>

        </div>
    </footer>

    <!-- End Footer ====
    ======================================= -->

</main>





<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>

<!-- popper.min -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- scrollIt -->
<script src="{{asset('assets/js/scrollIt.min.js')}}"></script>

<!-- jquery.waypoints.min -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>

<!-- jquery.counterup.min -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<!-- owl carousel -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<!-- slick.min -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>

<!-- jquery.magnific-popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<!-- stellar js -->
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>

<!-- isotope.pkgd.min js -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

<!-- validator js -->
<script src="{{asset('assets/js/validator.js')}}"></script>

<!-- custom scripts -->
<script src="{{asset('assets/js/scripts.js')}}"></script>

</body>
</html>