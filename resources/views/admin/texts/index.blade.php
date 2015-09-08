@extends('admin.layouts.master')
@section('content')

@include('admin.layouts.title-and-toggle', array('title' => 'Lista Testi Sito'))

<p>In questa sezione si possono vedere listare i testi editabili della home-page</p>
@include('admin.layouts.errors')
@include('flash::message')

<div class="panel panel-default">
    <div class="panel-body">
        
        <div class="table-responsive">
            <table class="table table-striped">
                
                <thead>

                    <td>Titolo</td>
                    <td>Testo</td>
                </thead>
                <tbody>
                    @foreach($texts as $item)
                    <tr>
                        
                        <td style="width:25%"><a href="/admin/testi/{{$item['id']}}/modifica">{{$item['title']}}</a></td>
                        <td>{!!$item['value']!!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop