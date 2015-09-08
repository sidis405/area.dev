@extends('admin.layouts.master')
@section('content')

@include('admin.layouts.title-and-toggle', array('title' => 'Lista Attivita'))

<p>In questa sezione si possono vedere le 'Attività' presenti sul sito ed inserirne nuove</p>
@include('admin.layouts.errors')
@include('flash::message')
<div class="panel panel-default">
    <div class="panel-body">
        <a href="/admin/attivita/crea"><i class="fa fa-plus-square-o"></i>&nbsp; Inserisci nuova attività</a>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-body">
        
        <div class="table-responsive">
            <table class="table table-striped">
                
                <thead>

                    <td>Titolo</td>
                    <td>Sottotitolo</td>
                    <td>Descrizione</td>
                    <td>In Slide</td>
                </thead>
                <tbody>
                    @foreach($activities as $item)
                    <tr>
                        
                        <td><a href="/admin/attivita/{{$item['id']}}/modifica">{{$item['title']}}</a></td>
                        <td>{{$item['subtitle']}}</td>
                        <td>{{$item['description']}}</td>
                        <td>{{$item['featured']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop