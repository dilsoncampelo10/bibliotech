<div>
    <nav class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 100vh;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="fa-solid fa-book"></i>
          <span class="fs-4 ms-4">Bibliotech</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
                <i class="fa-solid fa-house"></i>
             Tela Inicial
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-book-bookmark"></i>
              Livros
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <i class="fa-solid fa-book-open-reader"></i>
              Leitores
            </a>
          </li>
         
          <li>
            <a href="#" class="nav-link text-white">
               
                <i class="fa-brands fa-leanpub"></i>
              Empréstimos
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-land-mine-on"></i>
              Reservas
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-users"></i>
              Usuários
            </a>
          </li>
    
        </ul>
    
           
          <form method="POST" action="/logout">
            @csrf
              <button type="submit" class="btn btn-danger form-control ">  <i class="fa-solid fa-right-from-bracket"></i> Sair</button>
          </form>
      
        <hr>
        <div class="dropdown">
          
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          
            <strong>{{Auth::user()->name}}</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </nav>
</div>