@extends('layouts.main')

@section('title','Principal')

@section('content')
    <div class="container">
      
        <div class="card">
            <div class="card-header">
                <h1>Adicionar Autor</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <label for="name" class="form-label">Nome <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="Informe nome do autor do Livro">
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar Ação</button>
            </div>
                </form>
        </div>
    </div>

@endsection