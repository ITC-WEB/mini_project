<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('frontend/images/logo itc.png')}}" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <!-- Navbar  -->
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">Beranda</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link {{ request()->is('tentangkami') ? 'active' : '' }}" href="{{ url('/tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link {{ request()->is('katalog') ? 'active' : '' }}" href="{{ url('/katalog') }}">Katalog</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link {{ request()->is('syaratdankentenuan') ? 'active' : '' }}" href="{{ url('/syaratdankentenuan') }}">S&K</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">Kontak</a>
                </li>
            </ul>
            <!-- Mobile button -->
            <!-- <form class="form-inline d-sm-block d-md-none">
                <a href="{{url('/logout')}}" class="btn btn-login my-2 my-sm-0">Masuk</a>
            </form> -->
            <!-- Desktop Button -->
            <!-- <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <a href="{{url('/logout')}}" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style="line-height: 40px; padding: 10px 0;">Masuk</a>
            </form> -->
            @if (!Auth::user())
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <a href="/log" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" style="line-height: 40px; padding: 10px 0;">Masuk</a>
            </form>
            @else

            <div class="dropdown" id="avatarDropdown">
                <span style="cursor: pointer;" onclick="toggleDropdown()">
                    @if (Auth::user()->data->photo == NULL)
                    <img src="#" style="width: 50px;" alt="Avatar">
                    @elseif (Auth::user()->data->photo)
                    <img src="{{ asset('storage/'. Auth::user()->data->photo) }}" class="rounded-circle" style="width: 40px; height: 40px;" alt="">
                    @elseif (Auth::user()->gender == 'male')
                    <img src="{{ asset('frontend/images/man.png') }}" style="width: 50px;" alt="">
                    @else
                    <img src="{{ asset('frontend/images/woman.png') }}" style="width: 50px;" alt="">
                    @endif

                </span>
                <div class="dropdown-menu" aria-labelledby="avatarDropdown" id="avatarDropdownMenu">
                    <a class="dropdown-item" href="{{ url('/profilecustumer') }}">Profile</a>
                    <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                </div>
            </div>

            @endif
        </div>
    </nav>
</div>
<!-- EndNavbar -->
<script>
    function toggleDropdown() {
        const dropdownMenu = document.getElementById('avatarDropdownMenu');
        dropdownMenu.classList.toggle('show');
    }

    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('avatarDropdown');
        if (!dropdown.contains(event.target)) {
            const dropdownMenu = document.getElementById('avatarDropdownMenu');
            dropdownMenu.classList.remove('show');
        }
    });
</script>