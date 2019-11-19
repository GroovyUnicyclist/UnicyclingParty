@extends('main.layouts.page')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <h1>FAQ</h1>
            <dl>
                <dt>I'm new to unicycling, where should I start?</dt>
                <dd>
                    <p>
                        Well the first thing you'll need to do is find a unicycle! It's recommended that you find a cheap one on ebay or at a garage sale just to learn on, but if you've got a little bit more money to spend, check out <a href="https://unicycle.com">unicycle.com</a> and consider choosing a unicycle appropriate to your chosen <a href="#disciplines">discipline</a>.
                    </p>
                    <p>
                        Once you've got your unicycle, check out the <a href="{{ route('guide') }}">guide</a> to begin learning how to ride!
                    </p>
                </dd>

                <dt>What are all the different disciplines of unicycling?</dt>
                <dd>
                    <p>You can explore the disciplines and see exampls of what they look like here:</p>
                    <div id="disciplines" style="border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 0.25rem">
                        <div class="card" style="border:none">
                            <a class="card-header" data-toggle="collapse" href="#road">
                                Road/Commuter/Touring
                            </a>
                            <div id="road" class="collapse" data-parent="#disciplines">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            This style of unicycling encompasses all forms of long distance road unicycling. These unicycles typically have a large wheel so as to increase speed and distance per pedal rotation. Long distance unicycles are sometimes fitted with handlebars and a place to mount cargo for long trips.
                                        </div>
                                        <div class="col-md-8">
                                            <img src="/images/Road.png" alt="Road/Commuter/Touring" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="border:none">
                            <a class="card-header" data-toggle="collapse" href="#freestyle">
                                Freestyle
                            </a>
                            <div id="freestyle" class="collapse" data-parent="#disciplines">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Freestyle is the oldest discipline of unicycling, consisting of a smoother, more flowing strings of tricks. It is commonly practiced as part of individual, partner and group routines, often performed at competitions. Freestyle is almost always done on unicycles with 20″ tires, short cranks and a white tire that won’t mark gym floors.
                                        </div>
                                        <div class="col-md-8">
                                            <img src="/images/Freestyle.gif" alt="Freestyle" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="border:none">
                            <a class="card-header" data-toggle="collapse" href="#muni">
                                Muni
                            </a>
                            <div id="muni" class="collapse" data-parent="#disciplines">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Muni, short for Mountain Unicycling, is exactly what it sounds like. It is the equivalent of mountain biking, but on a unicycle. Muni riders ride through rough terrain, take drops, and ride over naturally occurring obstacles. Muni riders typically ride unicycles with wheels of larger diameter (typically 24″, 26″, 29″) and thickness.
                                        </div>
                                        <div class="col-md-8">
                                            <img src="/images/Muni.gif" alt="Muni" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="border:none">
                            <a class="card-header collapsed last" data-toggle="collapse" href="#urban">
                                Urban
                            </a>
                            <div id="urban" class="collapse" data-parent="#disciplines">
                                <div class="card-body">
                                    <p>Urban unicycling is a term used to describe 3 similar disciplines of unicycling. All subsets of urban unicycling are typically done on unicycles with thick 20″ tires and durable but lightweight parts.</p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3>Trials</h3>
                                            <p>
                                                The goal of trials unicycling is to clear obstacles or sets of obstacles, called lines. A line is cleared by jumping across gaps, onto and off of platforms, across rails and over any other obstacles riders can think of.
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <img src="/images/Trials.gif" alt="Trials" style="width:100%">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3>Flatland</h3>
                                            <p>
                                                In flatland unicycling, riders perform tricks on flat ground. Flatland tricks typically consist of unispins, crankflips and rolls. These tricks are stringed together to make combos. In competition, riders battle against each other, 1 on 1, attempting to perform the most difficult, stylish combos.
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <img src="/images/Flatland.gif" alt="Flatland" style="width:100%">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3>Street</h3>
                                            <p>
                                                Street unicycling is a combination of trials and flatland unicycling. Street unicycling includes doing trips onto, off of and across obstacles and includes many aspects of trials and flatland unicycling as well as some other skills such as grinding rails and catching tricks in the air.
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <img src="/images/Street.gif" alt="Street" style="width:100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </dd>
            </dl>
        </div>
    </div>
@endsection

@section('style')
<style>
    .row {
        margin-bottom: 20px
    }
    .collapsed.last {
        border-bottom: none
    }
</style>
@endsection
