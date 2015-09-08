@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<link rel="stylesheet" type="text/css" href="/css/image-picker.css">
<link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

@stop


@section('content')
@include('admin.layouts.title-and-toggle', array('title' => 'Modifica Attività'))
<p>In questa sezione puoi modificare una 'Profilo Staff'</p>
@include('admin.layouts.errors')
@include('flash::message')

    @include('admin.staff.partials.edit-section-simple')
    
@stop

@section('footer_scripts')


<script type="text/javascript" src="/js/summernote.js"></script>
<script type="text/javascript" src="/js/summernote-bindings.js"></script>


@stop