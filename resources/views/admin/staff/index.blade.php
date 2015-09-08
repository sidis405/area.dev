@extends('admin.layouts.master')
@section('content')

@include('admin.layouts.title-and-toggle', array('title' => 'Lista Profili Staff'))

<p>In questa sezione si possono vedere i 'Profili Staff' presenti sul sito ed inserirne nuovi</p>
@include('admin.layouts.errors')
@include('flash::message')
<div class="panel panel-default">
    <div class="panel-body">
        <a href="/admin/staff/crea"><i class="fa fa-plus-square-o"></i>&nbsp; Inserisci nuova profilo</a>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        
        <div class="table-responsive">
            <table class="table table-striped">
                
                <thead>

                    <td>Nome</td>
                    <td>Intro</td>
                </thead>
                <tbody>
                    @foreach($staff as $item)
                    <tr>
                        
                        <td><a href="/admin/staff/{{$item['id']}}/modifica">{{$item['name']}}</a></td>
                        <td>{{$item['intro']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop