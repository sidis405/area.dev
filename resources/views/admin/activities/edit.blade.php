@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<link rel="stylesheet" type="text/css" href="/css/image-picker.css">

@stop


@section('content')
@include('admin.layouts.title-and-toggle', array('title' => 'Modifica Attività'))
<p>In questa sezione puoi modificare una 'Attività'</p>
@include('admin.layouts.errors')
@include('flash::message')

    @include('admin.activities.partials.edit-section')
    
    @include('admin.activities.partials.gallery-section')
    
@stop

@section('footer_scripts')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
<script type="text/javascript" src="/js/dropzone-bindings.js"></script>
<script type="text/javascript" src="/js/image-picker.min.js"></script>

<script type="text/javascript">
    
    $("#featured_image_id").imagepicker({limit: 1});

</script>


@stop