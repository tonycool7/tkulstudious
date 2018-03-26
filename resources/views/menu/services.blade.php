@extends('layouts.start_project')

@section('menu-content')
    <div>
        <h2 class="about-title">Our services</h2>
        <p class="about-passion">Let our prowess turn your dreams to reality</p>
    </div>

    <div class="row service-container">
        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 col-xs-4">
            <div class="services-number">01</div>
            <h4 class="service-title">UI and UX Design</h4>
            <p class="service-text">
                We focus on maximizing usability and the user experience. Our goal is to make the user's interaction as simple and efficient as possible, in terms of accomplishing user goals.
                We use graphic design and typography to support usability, influencing how the user performs certain interactions and improving the aesthetic appeal of the design.
                Our design process balances technical functionality and visual elements. Every detail matters to us.
            </p>
        </div>

        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 col-xs-4">
            <div class="services-number">02</div>
            <h4 class="service-title">Web Development</h4>
            <p class="service-text">
                Our work ranges from developing the simplest static single page of plain text to the most complex web-based internet applications such as social network services, e-commerce, blogs, admin panels, web servers and more.
                We always make sure our web development meets the highest of standards and is best-suited for your target project needs.
            </p>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 col-xs-4">
            <div class="services-number">03</div>
            <h4 class="service-title">Web Design</h4>
            <p class="service-text">
                We build visually compelling websites that instantly reinforce credibility and that drive conversions.
                Our team design and develop websites that are Responsive – that provide an optimal viewing experience across a wide range of devices.
                We deliver a complete solutions from concept to implementation and every website we produce is made to your exact specifications.
            </p>
        </div>
        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 col-xs-4">
            <div class="services-number">04</div>
            <h4 class="service-title">Web + Mobile Apps</h4>
            <p class="service-text">
                In this area, we only develop IOS apps. We have very good, well trained and experienced IOS developers who work along side our web developers, who are in charge of the backend.
            </p>
        </div>
    </div>

    <div class="container">
        <a href="/start_project" class="start">
            Start A Project
        </a>
    </div>
@endsection