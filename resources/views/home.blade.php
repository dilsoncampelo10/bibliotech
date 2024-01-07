@extends('layouts.main')

@section('title','Principal')

@section('content')
    <div class="container">
      
      <div class="row">
        <div class="col-3">
          <x-card bgColor="primary" icon="fa-solid fa-book" description="Livros"></x-card>
        </div>
        <div class="col-3">
          <x-card bgColor="success" icon="fa-solid fa-users" description="Empréstimos"></x-card>
        </div>
        <div class="col-3">
          <x-card bgColor="danger" icon="fa-solid fa-calendar-days" description="Atrasos"></x-card>
        </div>
        <div class="col-3">
          <x-card bgColor="warning" icon="fa-solid fa-book-open-reader" description="Leitores"></x-card>
        </div>
      </div>

      <div>
        <a href="" class="btn btn-success"><i class="fa-solid fa-book-medical"></i> Adicionar Livro ao Acervo</a>
       
      </div>
      <div class="mt-5">
        <h2>Últimos Livros Adicionados:</h2>
        <div>
            <form class="d-flex">
                <input type="text" name="" id="search_title" class="form-control" placeholder="Buscar Livro pelo Título">
                <button type="submit" class="btn btn-secondary d-flex align-items-center px-5">
                  <i class="fa-solid fa-magnifying-glass"></i> 
                </button>
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-3">
              <x-card-book title="O Pequeno Princípe" cover="https://m.media-amazon.com/images/I/61ATa0Pc4AL._AC_UF1000,1000_QL80_.jpg"></x-card-book>
            </div>
            <div class="col-3">
              <x-card-book title="Sherlock Holmes" cover="https://cdl-static.s3-sa-east-1.amazonaws.com/covers/gg/9788537802809/as-aventuras-de-sherlock-holmes.jpg"></x-card-book>
            </div>
            <div class="col-3">
              <x-card-book title="O Princípe" cover="https://edipro.com.br/wp-content/uploads/2020/07/o-principe.jpg"></x-card-book>
            </div>
            <div class="col-3">
              <x-card-book title="Arquitetura Limpa" cover="https://m.media-amazon.com/images/I/61r4tYVsRVL._AC_UF1000,1000_QL80_.jpg"></x-card-book>
            </div>
        </div>
      </div>
    </div>

@endsection