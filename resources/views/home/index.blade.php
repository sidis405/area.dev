@extends('layouts.master')

@section('title', 'Areea')

@section('header_scripts')
<link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
@stop

@section('content')

    @include('home.partials.opening')
    
    @include('home.partials.studio')

    @include('home.partials.activities')

    
@stop

@section('footer_scripts')

<script src="/js/main.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>

    <div class="hidden-galleries">

    @include('home.partials.gallery-partial-main') 

    </div>

@stop