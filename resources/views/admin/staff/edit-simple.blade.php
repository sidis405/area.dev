@extends('admin.layouts.master')

@section('header_scripts')

<link rel="stylesheet" type="text/css" href="/css/summernote.css">

@stop



@section('content')

@include('admin.layouts.title-and-toggle', array('title' => 'Modifica Profilo Staff'))

<p>In questa sezione puoi creare una nuova 'Profilo Staff'</p>
@include('admin.layouts.errors')
@include('flash::message')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Per favore compilare il form sottostante</h3>
    </div>
    <div class="panel-body">
        
        <form action="/admin/staff/{{$staff->id}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="staff_id" value="{{$staff->id}}">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Nome Completo</label>
                    <input class="form-control" name="name" placeholder="Nome Completo" value="{{old('name', $staff->name)}}">
                </div>
                <div class="form-group">
                    <label>Indirizzo Mail</label>
                    <input class="form-control" name="email" placeholder="Indirizzo Mail" value="{{old('email', $staff->email)}}" >
                </div>
                <div class="form-group">
                    <label>Intro</label>
                    <textarea class="form-control" name="intro" rows="5" placeholder="Intro" required>{{old('intro', $staff->intro)}}</textarea>
                </div>
                
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Descrizione</label>
                    <textarea class="form-control" name="description" id="staff_description" rows="5" placeholder="Descrivi attività" required>{{old('description', $staff->description)}}</textarea>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            
            <div class="col-lg-7 col-lg-offset-5">
                
                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-warning">Abbandona</button>
            </div>
        </form>
    </div>
</div>
</div>

@include('admin.staff.partials.delete-partial')


@stop

@section('footer_scripts')


<script type="text/javascript" src="/js/summernote.js"></script>
<script type="text/javascript" src="/js/summernote-bindings.js"></script>


@stop