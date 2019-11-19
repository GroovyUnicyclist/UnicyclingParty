@extends('main.layouts.page')

@section('body')
    <h1>Eli Brill's Unicycle School</h1>
    <hr>
    <p>Work in Progress</p>
    <div class="row">
        <div class="col-lg-12">
            <figure id="projectsvg">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080" preserveAspectRatio="xMinYMin meet" >
                    <!-- set your background image -->
                    <image width="1920" height="1080" xlink:href="/images/Skill_Tree.PNG" />
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#ridingAUnicycle">>
                            <rect x="765" y="958" opacity="0.2" fill="#FFFFFF" width="220" height="83"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            {{--  <text x="1230.7" y="952" font-size="20">Second zone</text>  --}}
                            <rect x="764" y="808" opacity="0.2" fill="#FFFFFF" width="221" height="83"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="764" y="660" opacity="0.2" fill="#FFFFFF" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="504" y="660" opacity="0.2" fill="#FFFFFF" width="220" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="255" y="660" opacity="0.2" fill="#FFFFFF" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="1010" y="660" opacity="0.2" fill="#FFFFFF" width="222" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="1265" y="660" opacity="0.2" fill="#FFFFFF" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="376" y="537" opacity="0.2" fill="#FFFFFF" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="https://example.com/link2.html">
                            <rect x="1011" y="414" opacity="0.2" fill="#FFFFFF" width="220" height="82"></rect>
                        </a>
                    </g>
                </svg>
            </figure>
        </div>
    </div>
@endsection

@section('modals')
<div class="modal" id="ridingAUnicycle">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Riding a Unicycle</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>

                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ride" id="ride">Practice Riding
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="freemount" id="freemount">Practice Freemounting
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="turn" id="turn">Try Turning
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="changeSpeed" id="changeSpeed">Try Changing Speeds
                    </label>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
@endsection
