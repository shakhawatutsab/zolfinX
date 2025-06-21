@extends('components.layout')

@section('content')
        <!-- Header End -->

        <!-- Banner  -->
        <div class="zol-banner zol-banner--blog t-pt-150 t-pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mt-0 t-text-light text-capitalize">
                            {{ $data->title }}
                        </h2>
                        <ul
                            class="t-list breadcrumbs d-flex justify-content-center align-items-center"
                        >
                            <li class="breadcrumbs__list">
                                <a
                                    href="#"
                                    class="t-link breadcrumbs__link t-link--light-alpha text-capitalize"
                                >
                                    home
                                </a>
                            </li>
                            <li class="breadcrumbs__list">
                                <a
                                    href="#"
                                    class="t-link breadcrumbs__link t-link--light-alpha text-capitalize"
                                >
                                    blog
                                </a>
                            </li>
                            <li class="breadcrumbs__list">
                                <a
                                    href="{{route('single-post', $data->slug)}}"
                                    class="t-link breadcrumbs__link t-link--light-alpha text-capitalize"
                                >
                                    {{$data->title}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Blog Post  -->
        <div class="t-pt-120 t-pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 t-mb-50 mb-lg-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="blog-post border">
                                    <div class="blog-post__img">
                                        <a
                                            href="#"
                                            class="t-link blog-post__img-link w-100"
                                        >
                                            <img
                                                src="assets/img/blog-post.png"
                                                alt="zolfin"
                                                class="w-100 img-fluid"
                                            />
                                        </a>
                                        <span
                                            class="blog-post__date d-flex flex-column align-items-center justify-content-center"
                                        >
                                            <span
                                                class="blog-post__date-day d-block"
                                            >
                                                25
                                            </span>
                                            <span
                                                class="blog-post__date-month text-capitalize d-block"
                                            >
                                                august
                                            </span>
                                        </span>
                                    </div>
                                    <div class="blog-post__body">
                                        <div
                                            class="blog-post__footer t-mt-50"
                                        >
                                            <ul
                                                class="t-list d-flex align-items-center blog-post__footer flex-wrap"
                                            >
                                                <li
                                                    class="blog-post__footer-list t-mb-15 t-mr-15"
                                                >
                                                    <a
                                                        href="#"
                                                        class="t-link blog-post__author d-flex align-items-center"
                                                    >
                                                        <span
                                                            class="blog-post__author-img t-mr-8"
                                                        >
                                                            <img
                                                                src="assets/img/user.jpg"
                                                                alt="zolfin"
                                                                class="img-fluid"
                                                            />
                                                        </span>
                                                        <span
                                                            class="blog-post__author-name text-capitalize"
                                                        >
                                                            jhon doe
                                                        </span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="blog-post__footer-list t-mb-15 t-mr-15"
                                                >
                                                    <a
                                                        href="#"
                                                        class="t-link t-link--alpha sm-text blog-post__footer-link text-capitalize"
                                                    >
                                                        <i
                                                            class="las la-tags"
                                                        ></i>
                                                        business
                                                    </a>
                                                </li>
                                                <li
                                                    class="blog-post__footer-list t-mb-15 t-mr-15"
                                                >
                                                    <a
                                                        href="#"
                                                        class="t-link t-link--alpha sm-text blog-post__footer-link text-capitalize"
                                                    >
                                                        <i
                                                            class="las la-calendar"
                                                        ></i>
                                                        25 october
                                                    </a>
                                                </li>
                                                <li
                                                    class="blog-post__footer-list t-mb-15 t-mr-15"
                                                >
                                                    <a
                                                        href="#"
                                                        class="t-link t-link--alpha sm-text blog-post__footer-link text-capitalize"
                                                    >
                                                        <i
                                                            class="las la-clock"
                                                        ></i>
                                                        8 min read
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3>
                                           {{$data->title}}
                                        </h3>

                                        <p class="t-mt-30 t-text-heading">
                                            A small river named Duden flows by
                                            their place and supplies it with the
                                            necessary regelialia. It is a
                                            paradise matic country, in which
                                            roasted parts of sentences fly into
                                            your mouth. Even the all-powerful
                                            Pointing has no control Pro quod
                                            oblique intellegat.
                                        </p>

                                        <p class="t-mt-30 t-text-heading">
                                            A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradise matic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control. per inceptos himenaeosivam. Curabitur at fermentum purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris non nisl interdum, citudin neque sed, posuere elit, Vivamus ac tincidunt sapien.
                                        </p>

                                        <p class="t-mt-30 t-mb-30 t-text-heading">
                                            about helplessly as he looked. “What’s happened to me?” he thought. It wasn’t a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with
                                        </p>

                                        <blockquote class="blockquote t-text-light">
                                            Quisque a euismod turpis. Morbi id dui sit amet
                                            diam gravida. Vivamus posuere auctor.
                                        </blockquote>

                                        <p class="t-mt-30 t-text-heading">
                                            Curabitur at fermentum purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris non nisl interdum, citudin neque sed, posuere elit. Vivamus ac tincidunt sapien. Aenean nec aliquet enim. Donec at dapibus enim. Integer et tur is vel turpis vehicula mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeosivam.
                                        </p>

                                    </div>

                                    <div class="t-mt-50">
                                        <ul class="t-list justify-content-end d-flex">
                                            <li class="list__item font-weight-bold text-capitalize t-mr-8">
                                                share:
                                            </li>
                                            <li class="list__item t-mr-8">
                                                <a href="#" class="t-link t-link--fb">
                                                    <i class="lab la-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list__item t-mr-8">
                                                <a href="#" class="t-link t-link--tw">
                                                    <i class="lab la-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list__item t-mr-8">
                                                <a href="#" class="t-link t-link--ins">
                                                    <i class="lab la-google-plus-g "></i>
                                                </a>
                                            </li>
                                            <li class="list__item">
                                                <a href="#" class="t-link t-link--in">
                                                    <i class="lab la-linkedin-in "></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="t-bg-light-2 t-mt-50">
                                        <div class="post-change">
                                            <div class="row justify-content-md-between">
                                                <div class="col-md-5 t-mb-50 mb-md-0">
                                                    <div class="post-change__prev">
                                                        <h5 class="mt-0">
                                                            <a href="#" class="t-link t-link--alpha">
                                                                Cloud Hosting growing faster ever got in business
                                                            </a>
                                                        </h5>
                                                        <a href="#" class="t-link t-link--alpha text-capitalize">
                                                            <span class="las la-arrow-left"></span>
                                                            previous post
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="post-change__next">
                                                        <h5 class="mt-0">
                                                            <a href="#" class="t-link t-link--alpha">
                                                                Making a New Connection Ensuring a Seamless
                                                            </a>
                                                        </h5>
                                                        <a href="#" class="t-link t-link--alpha text-capitalize">
                                                            next post
                                                            <span class="las la-arrow-right"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-pl-30 t-pr-30 t-pt-50 t-pb-50 border t-mt-70">
                                    <div id="comments" class="st-comments-area">
                                        <h4 class="mt-0 t-mb-30 text-capitalize">
                                        Comments
                                        </h4>
                                        <!-- comments-title -->

                                        <ul class="st-comments-list">
                                            <li>
                                                <div class="st-comments">
                                                    <div class="st-comments__author ">
                                                        <img src="assets/img/user-2.jpg" alt="SoftTech-IT" class="img-fluid st-comments__author-img">
                                                    </div>
                                                    <div class="st-comments__body">
                                                        <ul class="st-comments__info t-mb-16">
                                                            <li>
                                                                <h6 class="st-comments__title mb-0">
                                                                    <a href="#" class="st-comments__title-link">
                                                                        jhone doe
                                                                    </a>
                                                                </h6>
                                                            </li>
                                                            <li>
                                                                <span class="st-comments__date xsm-text">
                                                                    March 06, 2020
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="st-comments__share">
                                                                    <span class="fas fa-reply"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <p class="sm-text">
                                                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                                        </p>
                                                    </div>
                                                </div>
                                                <ul class="st-comments__children">
                                                    <li>
                                                        <div class="st-comments">
                                                            <div class="st-comments__author">
                                                                <img src="assets/img/user.jpg" alt="SoftTech-IT" class="img-fluid st-comments__author-img">
                                                            </div>
                                                            <div class="st-comments__body">
                                                                <ul class="st-comments__info t-mb-16">
                                                                    <li>
                                                                        <h6 class="st-comments__title mb-0">
                                                                            <a href="#" class="st-comments__title-link">
                                                                                tonmoy khan
                                                                            </a>
                                                                        </h6>
                                                                    </li>
                                                                    <li>
                                                                        <span class="st-comments__date xsm-text">
                                                                            March 06, 2020
                                                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="st-comments__share">
                                                                            <span class="fas fa-reply"></span>
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <p class="sm-text mb-0">
                                                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="st-comments">
                                                    <div class="st-comments__author ">
                                                        <img src="assets/img/user-3.jpg" alt="SoftTech-IT" class="img-fluid st-comments__author-img">
                                                    </div>
                                                    <div class="st-comments__body">
                                                        <ul class="st-comments__info t-mb-16">
                                                            <li>
                                                                <h6 class="st-comments__title mb-0">
                                                                    <a href="#" class="st-comments__title-link">
                                                                        malcom x
                                                                    </a>
                                                                </h6>
                                                            </li>
                                                            <li>
                                                                <span class="st-comments__date xsm-text">
                                                                    March 06, 2020
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="st-comments__share">
                                                                    <span class="fas fa-reply"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <p class="sm-text mb-0">
                                                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="t-pl-30 t-pr-30 t-pt-50 t-pb-50 border t-mt-70">
                                    <div class="st-comments-area">
                                        <h4 class="mt-0 t-mb-30 text-capitalize">
                                        leave a reply
                                        </h4>
                                        <!-- comments-title -->

                                        <form action="#" class="st-comments__form">
                                            <input type="text" name="name" id="name" class="form-control t-mb-15" placeholder="Enter Your Name">
                                            <input type="text" name="mail" id="mail" class="form-control t-mb-15" placeholder="Enter Your Email">
                                            <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Write your text" class="form-control t-mb-15"></textarea>
                                            <button class="newsletter__button bttn bttn-round bttn-alpha bttn-md text-uppercase border-0">
                                                leave message
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside>
                            <div class="widget">
                                <form
                                    action="#"
                                    class="newsletter border t-pt-5 t-pb-5 t-pl-15 t-pr-10"
                                >
                                    <input
                                        type="text"
                                        placeholder="search here"
                                        class="w-100 newsletter__input"
                                    />
                                    <button
                                        class="newsletter__button bttn bttn-round bttn-alpha bttn-sm text-uppercase border-0"
                                    >
                                        search
                                    </button>
                                </form>
                            </div>
                            <div class="widget widget--bg t-bg-light-2 t-mt-50">
                                <h4 class="mt-0 text-capitalize widget-title">
                                    recent post
                                </h4>
                                <ul class="t-list recent-post">
                                    <li class="recent-post__list">
                                        <div
                                            class="recent-post__post row no-gutters"
                                        >
                                            <div class="recent-post__img col-4">
                                                <a
                                                    href="#"
                                                    class="t-link w-100"
                                                >
                                                    <img
                                                        src="assets/img/recent-post-1.png"
                                                        alt="zolfin"
                                                        class="img-fluid recent-post__img-is w-100"
                                                    />
                                                </a>
                                            </div>
                                            <div
                                                class="recent-post__content col-8"
                                            >
                                                <a
                                                    href="#"
                                                    class="recent-post__title t-link t-link--alpha"
                                                >
                                                    Twice profit than before you
                                                    ever got in business
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="recent-post__list">
                                        <div
                                            class="recent-post__post row no-gutters"
                                        >
                                            <div class="recent-post__img col-4">
                                                <a
                                                    href="#"
                                                    class="t-link w-100"
                                                >
                                                    <img
                                                        src="assets/img/recent-post-2.png"
                                                        alt="zolfin"
                                                        class="img-fluid recent-post__img-is w-100"
                                                    />
                                                </a>
                                            </div>
                                            <div
                                                class="recent-post__content col-8"
                                            >
                                                <a
                                                    href="#"
                                                    class="recent-post__title t-link t-link--alpha"
                                                >
                                                    Twice profit than before you
                                                    ever got in business
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="recent-post__list">
                                        <div
                                            class="recent-post__post row no-gutters"
                                        >
                                            <div class="recent-post__img col-4">
                                                <a
                                                    href="#"
                                                    class="t-link w-100"
                                                >
                                                    <img
                                                        src="assets/img/recent-post-3.png"
                                                        alt="zolfin"
                                                        class="img-fluid recent-post__img-is w-100"
                                                    />
                                                </a>
                                            </div>
                                            <div
                                                class="recent-post__content col-8"
                                            >
                                                <a
                                                    href="#"
                                                    class="recent-post__title t-link t-link--alpha"
                                                >
                                                    Twice profit than before you
                                                    ever got in business
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="recent-post__list">
                                        <div
                                            class="recent-post__post row no-gutters"
                                        >
                                            <div class="recent-post__img col-4">
                                                <a
                                                    href="#"
                                                    class="t-link w-100"
                                                >
                                                    <img
                                                        src="assets/img/recent-post-4.png"
                                                        alt="zolfin"
                                                        class="img-fluid recent-post__img-is w-100"
                                                    />
                                                </a>
                                            </div>
                                            <div
                                                class="recent-post__content col-8"
                                            >
                                                <a
                                                    href="#"
                                                    class="recent-post__title t-link t-link--alpha"
                                                >
                                                    Twice profit than before you
                                                    ever got in business
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget--bg t-bg-light-2 t-mt-50">
                                <h4 class="mt-0 text-capitalize widget-title">
                                    tags
                                </h4>
                                <ul class="t-list d-flex flex-wrap">
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            App
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Agencyco
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            History
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Blue Glod
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Interest
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Melbourne
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Optimize
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Darwin
                                        </a>
                                    </li>
                                    <li class="t-mr-8 t-mb-10">
                                        <a
                                            href="#"
                                            class="t-link zol-pagination__card xsm-text"
                                        >
                                            Perth
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget--bg t-bg-light-2 t-mt-50">
                                <h4
                                    class="mt-0 text-capitalize widget-title text-center"
                                >
                                    Get Subscribed
                                </h4>
                                <p class="text-center">
                                    Subscribe to get the latest news. No spam,
                                    we promise.
                                </p>
                                <form
                                    action="#"
                                    class="newsletter border t-pt-5 t-pb-5 t-pl-15 t-pr-10"
                                >
                                    <input
                                        type="text"
                                        placeholder="your email"
                                        class="w-100 newsletter__input"
                                    />
                                    <button
                                        class="newsletter__button bttn bttn-round bttn-alpha bttn-sm text-uppercase border-0"
                                    >
                                        join now
                                    </button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Post End -->
@endsection
