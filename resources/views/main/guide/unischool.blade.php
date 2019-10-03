@extends('main.layouts.page')

@section('body')
    <h1>Eli Brill's Unicycle School</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <img src="/images/Skill_Tree.PNG" alt="Skill Tree" style="width:100%">

            {{--  <p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ridingAUnicycle">
                    Riding a Unicycle
                </button>
            </p>  --}}
        </div>
    </div>
    {{--  <div class="row">
        <div class="col-md-12">
            <h3>Work in Progress</h3>
            <p>This will soon be an interactive page used to track your progress on the skill tree. For now, check out the <a href="https://discord.gg/RXgdcTw">Unicycling Discord Server's</a> channels dedicated to Unischool to get help and track your progression.</p>
        </div>
    </div>  --}}
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

@section('style')

@endsection
