@extends('main.layouts.page')

@section('body')
    <div class="row" style="margin-bottom: 20px">
        <div class="col-md-12">
            <h1>FAQ</h1>
            <dl>
                <dt>I'm new to unicycling, where should I start?</dt>
                <dd>
                    <p>
                        Well the first thing you'll need to do is find a unicycle! It's recommended that you find a cheap one on ebay or at a garage sale just to learn on, but if you've got a little bit more money to spend, check out <a target="_blank" rel="noopener noreferrer" href="https://unicycle.com">unicycle.com</a> and consider choosing a unicycle appropriate to your chosen <a href="#disciplines">discipline</a>.
                    </p>
                    <p>
                        Once you've got your unicycle, check out the <a href="{{ route('guide') }}">guide</a> to begin learning how to ride!
                    </p>
                </dd>

                <dt>What are all the different disciplines of unicycling?</dt>
                <dd>
                    <p>You can explore the disciplines and see exampls of what they look like here:</p>
                    @include('main.disciplines')
                </dd>
            </dl>
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
