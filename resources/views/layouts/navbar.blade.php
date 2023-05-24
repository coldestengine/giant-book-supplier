<div class="d-flex justify-content-center mb-3">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  @foreach ($categories as $cat)
                    <li><a class="dropdown-item" href="{{ route('book.category', $cat->id) }}">{{$cat->name}}</a></li>              
                  @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="{{ route('publisher') }}">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-primary" href="{{ route('contact') }}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>