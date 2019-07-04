@extends('main.layouts.page')

@section('body')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body p-5"> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Welcome to Unicycling.Party!</h1>
                                <h3>Your all in one unicycling resource</h3>
                                <hr>
                                <h5>Coming soon</h5>
                                {{-- <h5>I want to...</h5>
                                <div class="container rounded" style="border: 2px solid #dee2e6; padding:0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified bg-light">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#club">Learn about the club</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#learn">Learn how to unicycle</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#ohio">Find Ohio unicyclists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#me">Talk to unicycle guy</a>
                                        </li>
                                    </ul>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane container fade py-md-3 active show" id="club">
                                            <p>
                                                Join the mailing list and/or GroupMe <a href="https://goo.gl/forms/1C36aOLqBBXz18U92">here</a>.
                                            </p>
                                        </div>
                                        <div class="tab-pane container fade py-md-3" id="learn">...</div>
                                        <div class="tab-pane container fade py-md-3" id="ohio">...</div>
                                        <div class="tab-pane container fade py-md-3" id="me">
                                            <p>
                                                If you'd like to get in contact with me, the unicycle guy, just email me at <a href="mailto:braun.368@osu.edu">braun.368@osu.edu</a>!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Or Explore the World of Unicycling!</h3>
                                <div class="container rounded" style="border: 2px solid #dee2e6; padding:0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified bg-light">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#what">What is Unicycling?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#buy">Buy a Unicycle</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#meet">Meet Unicyclists</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#vids">Explore Videos</a>
                                        </li>
                                    </ul>
                                    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane container fade py-md-3 active show" id="what">
                                            <p>
                                                Stuff
                                            </p>
                                        </div>
                                        <div class="tab-pane container fade py-md-3" id="buy">...</div>
                                        <div class="tab-pane container fade py-md-3" id="meet">...</div>
                                        <div class="tab-pane container fade py-md-3" id="vids">
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
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <a class="btn btn-scarlet" href="#myCarousel" data-slide="prev" style="margin:10px"><i class="fas fa-chevron-left"></i> Prev</a>
                                                <a class="btn btn-scarlet" href="#myCarousel" data-slide="next" style="margin:10px">Next <i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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