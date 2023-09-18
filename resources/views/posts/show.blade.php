@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-header">
        Post Info
    </div>
    <div class="card-body">
        <h5 class="card-title"><b>ID:- </b>{{ $post->id }}</h5>
        <h5 class="card-title"><b>Title:- </b>{{ $post->title }}</h5>
        <h5 class="card-title"><b>Descriptions:- </b>{{ $post->descriptopn }}</h5>
    </div>
</div>
</div>
@endsection