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
                    <textarea class="form-control" rows="5" name="comment" required></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email (Optional):</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('style')

@endsection
