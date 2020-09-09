@extends('main.layouts.page')

@section('body')
    <h1>Eli Brill's Unicycle School</h1>
    <hr>
    <p>Welcome to Eli Brill's Unicycle School! Soon you will be able to use this page to save your progress as you complete the homework for each video in this series. You can also join the <a href="{{ route('discord') }}">Unicycling Discord Server</a> to get help homework help and submit videos of yourself completing them in order to gain recognition for completing each homework assignment!</p>
    <p>Be sure to <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCgHpSZa5KBTj_GK1fpsmK1w?sub_confirmation=1"> subscribe to Eli</a> and <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/watch?list=PLdKARu4d6vwXYhdoLgOQNKOfvj8NVhnMa&v=LUNv6B6JBJ8">check out the full series</a>!</p>
    <div class="row">
        <div class="col-lg-12">
            <figure id="projectsvg">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080" preserveAspectRatio="xMinYMin meet" >
                    <!-- set your background image -->
                    <image width="1920" height="1080" xlink:href="/images/Skill_Tree.png" />
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#rideAUnicycle">
                            <rect x="638" y="949" width="217" height="79"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#gettingComfortable">
                            <rect x="638" y="802" width="216" height="79"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#twist180">
                            <rect x="638" y="656" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#unispin180">
                            <rect x="380" y="656" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#crankflip">
                            <rect x="134" y="656" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#crankgrab">
                            <rect x="882" y="656" width="217" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#gettingMoreComfortable">
                            <rect x="1134" y="656" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#hickflipAndOutflip">
                            <rect x="254" y="534" width="215" height="79"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#grinds">
                            <rect x="882" y="414" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#snappyFlips">
                            <rect x="121" y="411" width="217" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a class="clickable" data-toggle="modal" data-target="#comingSoon">
                            <rect x="384" y="411" opacity="0.5" fill="#000000" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="0">
                        <a class="clickable" data-toggle="modal" data-target="#twist360">
                            <rect x="636" y="412" width="216" height="77"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a class="clickable" data-toggle="modal" data-target="#comingSoon">
                            <rect x="122" y="243" opacity="0.5" fill="#000000" width="215" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a class="clickable" data-toggle="modal" data-target="#comingSoon">
                            <rect x="391" y="247" opacity="0.5" fill="#000000" width="215" height="77"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a class="clickable" data-toggle="modal" data-target="#comingSoon">
                            <rect x="384" y="44" opacity="0.5" fill="#000000" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a class="clickable" data-toggle="modal" data-target="#comingSoon">
                            <rect x="632" y="45" opacity="0.5" fill="#000000" width="216" height="78"></rect>
                        </a>
                    </g>
                    <g class="hover_group" opacity="1">
                        <a class="clickable" data-toggle="modal" data-target="#comingSoon">
                            <rect x="1134" y="45" opacity="0.5" fill="#000000" width="216" height="78"></rect>
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

<div class="modal" id="twist180">
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

<div class="modal" id="unispin180">
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

<div class="modal" id="snappyFlips">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Snapping Bigger Flips</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/mFnN0zV38Ds"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="doubleflip" id="doubleflip">Doubleflip.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="backflip" id="backflip">Backflip.
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

<div class="modal" id="twist360">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">360 Twists & Twist Variations</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    <div class="vid-container">
                        <iframe src="//www.youtube.com/embed/uj9AadpPjN0"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="360Oppo360" id="360Oppo360">360/Oppo 360.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="360Curb" id="360Curb">360 up/down an obstacle.
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="fullCab" id="fullCab">Full cab.
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

<div class="modal" id="comingSoon">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Coming Soon</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h4>Video</h4>
                <p>
                    Check out the Unischool playlist here:
                    <div class="vid-container">
                        <iframe src="https://www.youtube.com/embed/LUNv6B6JBJ8?listType=playlist&list=PLdKARu4d6vwXYhdoLgOQNKOfvj8NVhnMa"
                        frameborder="0" allowfullscreen class="video"></iframe>
                    </div>
                </p>
                <h4>Homework</h4>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="comingSoon" id="comingSoon" disabled>Coming soon...
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
