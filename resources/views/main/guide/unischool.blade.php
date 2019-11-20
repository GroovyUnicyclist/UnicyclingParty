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
                        <a xlink:href="#" data-toggle="modal" data-target="#rideAUnicycle">
                            <rect x="765" y="958" opacity="0.4" fill="#0099ff" width="220" height="83"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#gettingComfortable">>
                            <rect x="764" y="808" opacity="0.4" fill="#0099ff" width="221" height="83"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#Twist180">>
                            <rect x="764" y="660" opacity="0.4" fill="#0099ff" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#Unispin180">>
                            <rect x="504" y="660" opacity="0.4" fill="#0099ff" width="220" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#crankflip">>
                            <rect x="255" y="660" opacity="0.4" fill="#0099ff" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#crankgrab">>
                            <rect x="1010" y="660" opacity="0.4" fill="#0099ff" width="222" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#gettingMoreComfortable">>
                            <rect x="1265" y="660" opacity="0.4" fill="#0099ff" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#hickflipAndOutflip">>
                            <rect x="376" y="537" opacity="0.4" fill="#0099ff" width="221" height="82"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a xlink:href="#" data-toggle="modal" data-target="#grinds">>
                            <rect x="1011" y="414" opacity="0.4" fill="#0099ff" width="220" height="82"></rect>
                        </a>
                    </g>
                </svg>
            </figure>
        </div>
    </div>
@endsection

@section('modals')
<div class="modal" id="rideAUnicycle">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ride a Unicycle</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/LUNv6B6JBJ8"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="ride" id="ride">Practice riding.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="freemount" id="freemount">Practice freemounting.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="turn" id="turn">Try turning.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="changeSpeed" id="changeSpeed">Try changing speeds.
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

<div class="modal" id="gettingComfortable">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Getting Comfortable</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/vDv3kbqoXqk"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="seatDrop" id="seatDrop">Practice seat drops.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="hopDownCurb" id="hopDownCurb">Hop down a curb.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="rollingHop" id="rollingHop">Try a rolling hop.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="hopUpCurb" id="hopUpCurb">Try hopping up a curb.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="shifty" id="shifty">Try a shifty.
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

<div class="modal" id="Twist180">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">180 Twist</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/CfKSKZ5XFQY"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="180FakieHalfCab" id="180FakieHalfCab">Practice 180, fakie, half cab.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="half-revRev" id="half-revRev">Half-rev and rev.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="no-footer" id="no-footer">No-footers (SI, SIF, Seat Backward).
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

<div class="modal" id="Unispin180">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">180 Unispin</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/A1w62cM1Bfw"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="outspin1RevInspin" id="outspin1RevInspin">Outspin, 1 rev SIF, inspin with no hops.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="smallspin" id="smallspin">Smallspin.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="varial" id="varial">Varial.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="bodyVarial" id="bodyVarial">Body varial.
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

<div class="modal" id="crankflip">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crankflip</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/CF1csgQAh6Y"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="goRide" id="goRide">Go ride.
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

<div class="modal" id="crankgrab">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crankgrab</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/uoaHACiQZCI"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="pedalGrab" id="pedalGrab">Pedal grab.
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

<div class="modal" id="gettingMoreComfortable">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Getting More Comfortable</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/xxlhQV1E6gs"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="mounts" id="mounts">Try some new mounts.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="merge" id="merge">Merge two of your tricks.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="combo2" id="combo2">Land a combo of 2+ tricks.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="line3" id="line3">Land a line of 3+ tricks.
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

<div class="modal" id="hickflipAndOutflip">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hickflip & Outflip</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/UI_GSWqFuOQ"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="in-change" id="in-change">In-change.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="outflipInflipLine" id="outflipInflipLine">Outflip, inflip line.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="varialFlip" id="varialFlip">Varial flip.
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

<div class="modal" id="grinds">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Grinds</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/_O9XTAEvxX0"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="sesh" id="sesh">Sesh your local skatepark.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="handrail" id="handrail">Look for your first handrail.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="streetUniX" id="streetUniX">Check out <a target="_blank" rel="noopener noreferrer" href="https://daffodil.itch.io/street-uni-x">Steet Uni X</a>.
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
