@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="links">
                <a href="{{ url('/post/blog')}}">get post from drive</a>

            </div>
            You are logged in!
        </div>
    </div>
    </br>
    </br>
    <h1>POSTS FROM DRIVE</h1>
    <div class="row ">
        </br>
        @foreach($posts as $post)
        <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> <a href="{{ url('/post/wp',$post->id)}}">{{$post->title}}</a></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
