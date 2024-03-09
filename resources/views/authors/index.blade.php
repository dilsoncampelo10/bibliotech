@extends('layouts.main')

@section('title','Principal')

@section('content')
    <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Autores</h1>
                <a href="{{route('author.create')}}" class="btn btn-outline-primary">Adicionar Autor</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Cód.</th>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sosd</td>
                            <td>1</td>
                            <td>
                                ds
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
   
    </div>

@endsection