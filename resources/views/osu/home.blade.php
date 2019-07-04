@extends('osu.layouts.page')

@section('body')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body p-5"> --}}
                        <div class="row justify-content-center">
                            <img src="/images/Unicycle Club Logo_Official.png" alt="Logo" style="max-height:250px;">
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <h1>Welcome!</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>What brings you here?</h3>
                                <h5>I want to...</h5>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#club">
                                                Learn about the club
                                            </a>
                                        </div>
                                        <div id="club" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    Join the mailing list and/or GroupMe <a href="https://goo.gl/forms/1C36aOLqBBXz18U92">here</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#learn">
                                                Learn how to unicycle
                                            </a>
                                        </div>
                                        <div id="learn" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#ohio">
                                                Find Ohio unicyclists
                                            </a>
                                        </div>
                                        <div id="ohio" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#me">
                                                Talk to unicycle guy
                                            </a>
                                        </div>
                                        <div id="me" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                    If you'd like to get in contact with me, the unicycle guy, just email me at <a href="mailto:braun.368@osu.edu">braun.368@osu.edu</a>!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Or Explore the World of Unicycling!</h3>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#what">
                                                What is Unicycling?
                                            </a>
                                        </div>
                                        <div id="what" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Stuff
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#buy">
                                                Buy a Unicycle
                                            </a>
                                        </div>
                                        <div id="buy" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#meet">
                                                Meet Unicyclists
                                            </a>
                                        </div>
                                        <div id="meet" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="collapsed card-link" data-toggle="collapse" href="#vids">
                                                Explore Videos
                                            </a>
                                        </div>
                                        <div id="vids" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row justify-content-center">
                                                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                                                        <!-- Indicators -->
                                                        <ul class="carousel-indicators">
                                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                                        </ul>
                                                        
                                                        <!-- The slideshow -->
                                                        <div class="carousel-inner bg-gray rounded">
                                                            <div class="carousel-item active">
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ni1ePJGljy8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                <p class="text-white text-center"><b>Best of Unicycling</b></p>
                                                                <br>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/UzoQJFFcwBE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                <p class="text-white text-center"><b>Freestyle</b></p>
                                                                <br>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/laA8Cz_AKBU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                <p class="text-white text-center"><b>Muni</b></p>
                                                                <br>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/flaZql_hX9o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                <p class="text-white text-center"><b>Urban</b></p>
                                                                <br>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <!-- Left and right controls -->
                                                        {{-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                            <span class="carousel-control-prev-icon"></span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                            <span class="carousel-control-next-icon"></span>
                                                        </a> --}}
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <a class="btn btn-scarlet" href="#myCarousel" data-slide="prev" style="margin:10px"><i class="fas fa-chevron-left"></i> Prev</a>
                                                    <a class="btn btn-scarlet" href="#myCarousel" data-slide="next" style="margin:10px">Next <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('style')

@endsection