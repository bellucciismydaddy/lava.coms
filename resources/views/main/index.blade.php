@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <img class="img-fluid" src="{{ 'storage/'.$post->image_preview }}" alt="Card image cap">
                    <p class="card-text">
                        {!! $post->content !!}
                    <p class="card-text"><small class="text-muted">Alexey | {{ $post->created_at->format('Y-m-d') }}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
