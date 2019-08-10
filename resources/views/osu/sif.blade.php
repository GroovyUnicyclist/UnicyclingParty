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
    <p>If you've never unicycled before, show up at any meeting to get <b>free lessons.</b> Just bring yourself and a little determination and you're good to go!</p>
    <h3>Where</h3>
    <p>Lincoln Tower Park Tennis/Basketball Courts (Just outside the RPAC). Join the mailing list to get updates in case of inclement weather.</p>
    <h3>When</h3>
    <p>Unicycle Club meets <b>every Sunday from 2-4pm.</b> You can come late or leave early if you want as well!</p>
    <h3>Why</h3>
    <p>Along with being a great form of exercise, unicycling is lots of fun, and once you learn how to unicycle, you will feel good having learned a new skill. It's great exercise for the mind and the body!</p>
    <h3>Questions?</h3>
    <p>Email <a href="mailto:braun.368@osu.edu">Nick Braun</a> or ask in the GroupMe!</p>
    <hr>
    <div class="row" style="justify-content: center">
        <div id="pictures" class="carousel slide" data-ride="carousel">
    
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#pictures" data-slide-to="0" class="active"></li>
                <li data-target="#pictures" data-slide-to="1"></li>
                {{-- <li data-target="#pictures" data-slide-to="2"></li> --}}
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
                {{-- <div class="carousel-item">
                    <img class="join-carousel" src="/images/Unicycle_Club_Logo_Card_Size.png" alt="3">
                </div> --}}
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