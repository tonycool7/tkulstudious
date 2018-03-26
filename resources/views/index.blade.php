@extends('layouts.home')

@section('content')
        <section id="projects">
            <div class="container" style="height: 100%;">
                <div class="project-wrapper">
                    <div class="row project-row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="project-item afrikaplus top-bg">

                                <div class="project-descr">
                                    <h3>Afrikaplustheworld</h3>
                                    <a href="http://afrikaplustheworld.com" target="_blank">African entertainment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="project-item daweng top-bg">

                                <div class="project-descr">
                                    <h3>Daweng Shop</h3>
                                    <a href="http://afrikaplustheworld.com/shop" target="_blank">Online store</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="project-item wrapped top-bg">

                                <div class="project-descr">
                                    <h3>Wrpdshop</h3>
                                    <a href="http://wrpdshop.com" target="_blank">Online store</a>
                                </div>
                            </div>
                        </div>
                        <h3 class="projects-goal">We believe in developing great softwares</h3>
                        <p class="projects-goal_exp">Every project is born by an idea and working with clients to bring these ideas
                            to life has been our sole aim.<br/> We turn dreams and ideas to reality.
                        </p>
                        <span class="project-link"><a href="/projects">Our Projects</a></span>
                    </div>
                </div>
                <div class="project-wrapper2">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="project-item afrikaplus top-bg">
                                <div class="project-descr">
                                    <h3>Afrikaplustheworld</h3>
                                    <a href="http://afrikaplustheworld.com" target="_blank">African entertainment</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-item daweng top-bg">
                                <div class="project-descr">
                                    <h3>Daweng Shop</h3>
                                    <a href="http://afrikaplustheworld.com/shop" target="_blank">Online store</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="project-item wrapped top-bg">

                                <div class="project-descr">
                                    <h3>Wrpdshop</h3>
                                    <a href="http://wrpdshop.com" target="_blank">Online store</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="projects-goal">We believe in developing great softwares</h3>
                    <p class="projects-goal_exp">Every project is born by an idea and working with clients to bring these ideas
                        to life has been our sole aim.<br/> We turn dreams and ideas to reality.
                    </p>
                    <span class="project-link"><a href="/projects">Our Projects</a></span>
                </div>
            </div>
        </section>

        <section id="companies" class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 company">
                    <img class="" src="/images/logo2.png">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 company">
                    <img src="/images/logo.png">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 company">
                    <img src="/images/logo2.png">
                </div>
            </div>
        </section>

        <section id="services" class="default-bg">
            <div class="container">
                <div class="services-text">
                    <h3 class="services-goal">We specialize in custom web solutions</h3>
                    <p class="services-goal_exp">
                        We specialize in web interface design and developing every part of the<br/>
                        application architecture from the ground up.
                    </p>
                    <span class="services-link"><a href="/our_services">Our Services</a></span>
                </div>

                <div class="row others-container">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="other-item">
                            <div class="other-item__descr">
                                <h3>Careers</h3>
                                <a href="/careers">Our Job Openings</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="other-item">
                            <div class="other-item__descr">
                                <h3>Collaborate</h3>
                                <a href="/start_project">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="other-item">
                            <div class="other-item__descr">
                                <h3>Approach</h3>
                                <a href="/approach">Our Approach</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection




{{--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>--}}
@section('scripts')
    <script>
        $(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 0,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });
        });
    </script>
@endsection
