@extends('admin.layouts.master')

@section('header_scripts')

<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="/css/summernote.css">

@stop


@section('content')

@include('admin.layouts.title-and-toggle', array('title' => 'Modifica Testo'))

<p>In questa sezione puoi modificare testi sito</p>
@include('admin.layouts.errors')
@include('flash::message')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Per favore compilare il form sottostante</h3>
    </div>
    <div class="panel-body">
        
        <form action="/admin/testi/{{$text->id}}" method="POST">
            {{csrf_field()}}
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>{{$text->title}}</label>
                    <textarea class="form-control" name="value" rows="5" id="text_body" placeholder="Testo">{{old('value', $text->value)}}</textarea>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            
            <div class="col-lg-8 col-lg-offset-4">
                
                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-warning">Abbandona</button>
            </div>
        </form>
    </div>
</div>
@stop

@section('footer_scripts')


<script type="text/javascript" src="/js/summernote.js"></script>
<script type="text/javascript" src="/js/summernote-bindings.js"></script>

@stop