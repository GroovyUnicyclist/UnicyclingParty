@extends('main.layouts.page')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <h1>Unicycling Guide</h1>
            <hr>
            <p>Hey gamers, welcome to Eli Brill's Unischool Extreme let's get started.</p>
            <p>
                If you've been looking to learn how to unicycle, you've come to the right place. Just follow these 6 easy steps and you'll be a pro unicyclist in no time!
            </p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/Uniskool1.png" alt="It's ok you can do it." style="width:100%">
                                <p class="caption"><span class="step-num">1. </span>Don't be ashamed or embarrassed to be riding your unicycle.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/Uniskool2.png" alt="Watch the genitals!" style="width:100%">
                                <p class="caption"><span class="step-num">2. </span>Make sure to position your genitals properly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/Uniskool3.png" alt="WATCH THE GENITALS!!!!!" style="width:100%">
                                <p class="caption"><span class="step-num">3. </span>Whoops you didn't position your genitals properly.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                    <img src="/images/Uniskool4.png" alt="Handsome Squidward" style="width:100%">
                                <p class="caption"><span class="step-num">4. </span>Unicycling is like ballet: you have to be skinny and beautiful, so get plastic surgery until you look like handsome Squidward.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                    <img src="/images/Uniskool5.png" alt="Lose some weight!" style="width:100%">
                                <p class="caption"><span class="step-num">5. </span>...And puke a lil to get that weight down. You can't spell ballet without bulimia.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/Uniskool6.png" alt="Confidence and smashed gonads" style="width:100%">
                                <p class="caption"><span class="step-num">6. </span>Congratulations! You may not be able to unicycle and you're a shadow of your former self and your gonads are smashed to oblivion, but you now have confidence and optimism and that's the real lesson here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <p>
                I hoped you learned something from this guide! If you did, <a href="{{ route('feedback') }}">let us know!</a>
            </p>
            <small>Guide written by Jorm from the <a href="https://discord.gg/8BAb7Cf">Unicycling Discord</a></small>
        </div>
    </div>
@endsection

@section('style')
<style>
    body {
        font-family:cursive;
    }
    .card {
        margin-bottom: 30px
    }
    .card-body {
        padding:0;
    }
    .step-num {
        font-size:1.5rem;
    }
    .caption {
        margin:1rem
    }
</style>
@endsection
