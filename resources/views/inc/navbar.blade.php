<header class="navbar navbar-expand-sm bg-info navbar-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('dashboard') }}"
                class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none fw-bold fs-5 me-3">
                {{ env('APP_NAME') }}
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                @guest

                @else
                <li><a href="{{ route('dashboard') }}" class="nav-link px-2 text-dark">Beranda</a></li>
                <li><a href="{{ route('item') }}" class="nav-link px-2 text-dark">Barang</a></li>
                {{-- <li><a href="{{ route('supplier') }}" class="nav-link px-2 text-dark">Suppliers</a></li> --}}
                {{-- <li><a href="{{ route('category') }}" class="nav-link px-2 text-dark">Kategori</a></li> --}}
                {{-- <li><a href="{{ route('department') }}" class="nav-link px-2 text-dark">Perusahaan</a></li> --}}
                <li><a href="{{ route('borrower') }}" class="nav-link px-2 text-dark">Peminjam</a></li>
                <li><a href="{{ route('gudang') }}" class="nav-link px-2 text-dark">Gudang</a></li>
                <li><a href="/history" class="nav-link px-2 text-dark">History</a></li>
                <div class="btn-group dropend">
                    <button type="button" class="dropdown-toggle px-2 text-dark text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                        Market
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('supplier') }}">Suppliers</a></li>
                        <li><a class="dropdown-item" href="{{ route('category') }}">Kategori</a></li>
                        <li><a class="dropdown-item" href="{{ route('department') }}">Perusahaan</a></li>
                    </ul>
                </div>
                @endguest
            </ul>
        </div>
            
            @guest
            <div class="text-end">
                <a href="{{ route('index') }}" class="px-2 text-dark text-decoration-none">Sign in</a>
                <a href="{{ route('register') }}" class="px-2 text-dark text-decoration-none">Sign up</a>
            </div>
            @else
            <div class="text-end">
                <div class="btn-group dropstart">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
            
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                    </ul>
                </div>
            @endguest
        
        </div>
    </div>
</header>
