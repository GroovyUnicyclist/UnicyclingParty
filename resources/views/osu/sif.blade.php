@extends('osu.layouts.page')

@section('body')
    <div class="row justify-content-center">
        <img src="/images/Unicycle_Club_Logo_Official.png" alt="Logo" style="max-height:250px;">
    </div>
    <hr>
    <div class="row justify-content-center">
        <h1 class="h1-join">Interested in joining Unicycle Club?</h1>
    </div>
    <a href="https://goo.gl/forms/1C36aOLqBBXz18U92" class="btn btn-scarlet btn-join">Join the Mailing List or GroupMe!</a>
    <hr>
    <h3>Who</h3>
    <p>Any OSU student may join Unicycle Club. <b>No experience or unicycle is required.</b> We have lots of extras!</p>
    <h3>What</h3>
    <p>Join the <a href="{{ route('discord') }}">Discord</a> to participate in club activities and learn about unicycling! Unicycle rentals and lessons available absolutely free!</p>
    <h3>Where</h3>
    <p><b>Online!</b> Until the pandemic dies down, Unicycle Club will be conducted 100% virtually on <a href="{{ route('discord') }}">Discord</a>.</p>
    <h3>When</h3>
    <p><b>Whenever you want!</b> Learn at your own pace, and ask questions in <a href="{{ route('discord') }}">Discord</a> to get help from other riders from around the world as well as your fellow club members!</p>
    <h3>Why</h3>
    <p>Along with being a great form of exercise, unicycling is lots of fun, and once you learn how to unicycle, you will feel good having learned a new skill. It's great exercise for the mind and the body!</p>
    <h3>Questions?</h3>
    <p>Email <a href="mailto:braun.368@osu.edu">Nick Braun</a> or ask in the GroupMe or <a href="{{ route('discord') }}">Discord</a>!</p>
    <hr>
    <div class="row" style="justify-content: center">
        <div id="pictures" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#pictures" data-slide-to="0" class="active"></li>
                <li data-target="#pictures" data-slide-to="1"></li>
                <li data-target="#pictures" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="join-carousel" src="/images/EthanLearning.jpg" alt="Learn to Unicycle!">
                    <div class="carousel-caption">
                        <label style="padding:0.5rem; background-color:rgba(0, 0, 0, 0.5)">Learn to Unicycle!</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="join-carousel" src="/images/Basketball.jpg" alt="Basketball!" rotate="90">
                    <div class="carousel-caption">
                        <label style="padding:0.5rem; background-color:rgba(0, 0, 0, 0.5)">Play Basketball!</label>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="join-carousel" src="/images/ClubMembers.jpg" alt="Our Members!" rotate="90">
                    <div class="carousel-caption">
                        <label style="padding:0.5rem; background-color:rgba(0, 0, 0, 0.5)">Make friends!</label>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#pictures" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#pictures" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
@endsection
