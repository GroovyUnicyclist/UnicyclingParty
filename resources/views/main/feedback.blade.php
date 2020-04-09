@extends('main.layouts.page')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <h1>Send me a message</h1>
            <hr>
            <h5>Need help unicycling? Got a suggestion for the website? Fill out this form to contact me!</h3>

            <form action="{{ route('submit-feedback') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" name="comment" required>{{old('comment')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email (Optional):</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="captcha">Captcha:</label>
                    <div class="captcha" style="margin-bottom:20px">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-success btn-refresh" title="Get a new captcha"><i class="fas fa-sync"></i></button>
                    </div>
                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" autocomplete="off" required>


                    @if ($errors->has('captcha'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('captcha') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('style')

@endsection

@section('scripts')
<script type="text/javascript">


    $(".btn-refresh").click(function(){
      $.ajax({
         type:'GET',
         url:'/refresh_captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });


</script>
@endsection
