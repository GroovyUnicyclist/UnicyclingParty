@extends('main.layouts.page')

@section('body')
    <h1>Trick</h1>
    <hr>
    <div class="row">
        <div class="col-md-7 py-3">
            <p>
                Content
            </p>
            {{-- <trick :trick="jump"></trick> --}}
            <small>
                Note: this trick is very hard
            </small>
            <img src="/images/trick.gif" alt="trick" style="max-width:100%">
        </div>
        <div class="col-md-5 py-3">
            <div class="card">
                <div class="card-header">Trick</div>
                <div class="card-body">
                    <dl>
                        <dt>Alternate Names</dt>
                        <dd>Cool hip daddio spin</dd>
                        <dt>Categories</dt>
                        <dd>spin, flip</dd>
                        <dt>Definition</dt>
                        <dd>Do a jump, a spin, and then a flip.</dd>
                        <dt>Invented/First Landed By</dt>
                        <dd>The Unipiper</dd>
                        <dt>Year</dt>
                        <dd>1969</dd>
                        <dt>Tutorial</dt>
                        <dd><iframe src="https://www.youtube.com/embed/Q_a2AquBw6Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection