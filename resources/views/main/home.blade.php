@extends('main.layouts.page')

@section('body')
<h1>Welcome to Unicycling.Party!</h1>
<h3>Your all in one unicycling resource</h3>
<hr>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="margin-bottom:20px">
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
            <div class="card" style="margin-bottom:20px">
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
        </div>
    </div>
    <hr>
    <h3>Explore the disciplines of Unicycling!</h3>
    <div class="row">
        <div class="col-md-12">
            @include('main.disciplines')
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
