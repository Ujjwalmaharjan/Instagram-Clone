@extends('layouts.app')

@section('content')
<div class="container">
        @foreach($posts as $post)

            <div class="row pb-2">
                <div class="col-6 offset-1">
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" style="max-width: 40px;">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-1">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </div>
            </div>

        <div class="row pt-2 pb-4">
                <div class="col-6 offset-1">
                    <p> <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark pr-2">{{$post->user->username}}</span>
                    </a>
                </span>{{$post->caption}}
                    </p>

                </div>
            </div>
        @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>

@endsection
