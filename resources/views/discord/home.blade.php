@extends('discord.layouts.page')

@section('body')
    <h1>The Unicycling Discord</h1>
    <h3>Learn from and chat with unicyclists from around the world!</h3>
    <hr>
    <p>Click the button to join!</p>
    <a target="_blank" rel="noopener noreferrer" href="{{ route('invite') }}" class="btn btn-dark" style="background-color:#7289DA; border-color:#7289DA; display: inline-flex; align-items: center; ">
        <i class="fab fa-discord fa-4x"></i><span style="margin-left:1rem; font-size: 2rem">Join Today!</span>
    </a>
    {{-- <div class="col-md-6">
        <div class="card bg-notblack text-white" style="margin-bottom:20px">
            <div class="card-header">
                <h4 style="margin:0">
                    <div class="row justify-content-center" style="align-items: center; flex-wrap: nowrap">
                        <div class="div-sqr"><i class="fas fa-question icon-sqr"></i></div>
                        New to Unicycling?
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <h5 style="text-align:center">Check out the <a href="{{ route('faq') }}">FAQ</a>!</h5>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-notblack text-white" style="margin-bottom:20px">
            <div class="card-header">
                <h4 style="margin:0">
                    <div class="row justify-content-center" style="align-items: center; flex-wrap: nowrap">
                        <div class="div-sqr">
                            <i class="fas fa-book-open icon-sqr"></i>
                        </div>
                        Need help getting started?
                    </div>
                </h4>
            </div>
            <div class="card-body">
                <h5 style="text-align:center">Follow the <a href="{{ route('guide') }}">Guide</a>!</h5>
            </div>
        </div>
    </div> --}}
    <hr>
    <h3>Optional:</h3>
    <p>Part of Unicycle Club at OSU? Click the button below to get verified once you join the server!</p>
    <div id="osu-collapsable" class="row" style="margin:0">
        <div class="card bg-dark" style="border:none">
            <a class="card-header" data-toggle="collapse" href="#osu">
                <div class="row" style="align-items: center; flex-wrap: nowrap">
                    OSU Verification
                </div>
            </a>
            <div id="osu" class="collapse" data-parent="#osu-collapsable">
                <div class="card-body">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScpcuxdtY13o4ntz9xUBcDrz4ZrialxRa4wksQCBHKGf2Pkaw/viewform?embedded=true" width="640" height="630" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
<style>
    .collapsed.last {
        border-bottom: none
    }
    .div-sqr {
        display: table;
        width: 1.5em;
        height: 1.5em;
        margin-right: 10px;
    }
    .icon-sqr {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
        border-radius: .25em;
        background-color:rgb(39, 116, 218);
        color:rgb(255,255,255);
      }
</style>
@endsection
