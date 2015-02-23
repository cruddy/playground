@extends('app')

@section('title')
Welcome!
@overwrite

@section('content')
    {!! $content !!}

    <p class="text-center">
        <a href="/backend" class="btn btn-primary btn-lg">
            Proceed to Backend
        </a>
    </p>
@overwrite