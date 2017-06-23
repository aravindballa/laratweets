@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <form class="form-inline" action="/home" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="text" placeholder="What's up?" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                            Post
                        </button>
                    </div>
                </div>
            </form>

            <br><br>

            @foreach ($tweets as $tweet)
            <div class="panel panel-default">
                <div class="panel-body"><h4>{{ $tweet->text }}</h4></div>

                <div class="panel-footer">
                    <small>{{ $tweet->user->name }}</small>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
