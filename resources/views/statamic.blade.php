@extends('layouts.app')
@section('title', $title)
@section('content')
    {{$content}}
    @glide('/assets/IMG_1325.jpeg', ['width' => 100])
    <p>URL is {{ $url }}</p>
    <img src="{{ $url }}">
    <p>Width is {{ $width }}</p>
    <p>Hight is {{ $height }}</p>
    @endglide
@endsection
