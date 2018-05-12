@extends('layouts.start_project')

@section('title') Start A Project With Tkulstudios @endsection

@section('content')
    <h2 class="start-project__title">Start A Project</h2>
    <form action="/project" method="post" enctype="multipart/form-data">
        @csrf
        <h3 class="start-project__title2">We’re eager to hear what you have in store for us.</h3>
        <div class="project-vertical-line"></div>
        <p class="project-comments">HEY THERE!</p>
        <p class="project-questions">What should we call you?</p>
        <input type="text" name="name" class="start-project-input" placeholder="Write your name here" required>
        <p class="project-questions">We’ll email you back as quickly as we can</p>
        <input type="email" name="email" class="start-project-input" placeholder="Email address" required>
        <p class="project-questions">We may even give you a call</p>
        <input type="tel" name="telephone" class="start-project-input" placeholder="Phone number" required>
        <p class="project-questions">Are you from a company?</p>
        <input type="text" name="company" class="start-project-input" placeholder="Company name"><br/></br>
        <div class="project-vertical-line"></div>
        <p class="project-comments">HOW CAN WE HELP?</p>
        <p class="project-questions">Tell us about your project</p><br/>
        <textarea name="description" class="start-project-textarea" placeholder="Describe your project, requirement & goals" required></textarea>
        <p class="project-questions">Got anything to share?</p>
        <input type="file" name="upload">
        <div class="checkbox-div upload_file">
            <p style="padding: 10pt 0px 14px 7px;">Upload file <i class="fa fa-plus"></i></p>
        </div>
        <br/>
        <div class="project-vertical-line"></div>
        <p class="project-comments">EXTRA DETAILS</p>
        <P class="project-questions">Select the services that you require, we can then estimate how much you can expect to pay for our time</P>
        <br/>
        @foreach($services as $item)
            <div class="checkbox-div {{$item->name}}" v-on:click="checkCheckbox('.{{$item->name}}')">
                <p>{{$item->question}} <i class="fa fa-plus"></i></p>
                <input type="checkbox" value="{{$item->id}}" name="{{$item->name}}">
            </div>
        @endforeach
        <p class="project-questions">Share your budget range</p><br/>
        <div style="width: 100%">
            <div class="row">
                <div class="col-md-6 col-xs-6 col-lg-6 colxl-6 col-sm-6">
                    <input type="text" name="budget_from" class="start-project-input" value="0.00" placeholder="From">
                </div>
                <div class="col-md-6 col-xs-6 col-lg-6 colxl-6 col-sm-6">
                    <input type="text" name="budget_to" class="start-project-input" value="0.00" placeholder="To">
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <div style="width: 100%">
            <input type="submit" class="submit_project" value="Submit">
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $('.upload_file').click(function () {
            $('input[name="upload"]').click();
        });

        $('input[name="upload"]').change(function () {
            $('.upload_file').html("<p>File chosen <i class='fa fa-plus'></i></p>");
        });
    </script>
@endsection