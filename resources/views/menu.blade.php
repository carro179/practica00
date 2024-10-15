<ul
        class="nav nav-tabs"
        id="navId"
        role="tablist"
    >
        <li class="nav-item">
            <a
                href="#tab1Id"
                class="nav-link active"
                data-bs-toggle="tab"
                aria-current="page"
                ></a
            >
        </li>

        @guest
        <li class="nav-item" role="presentation">
            <a href="{{route('login')}}" class="nav-link"
                >Login</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{route('register')}}" class="nav-link" 
                >Register</a
            >
        </li>
        
        @endguest
        @auth
        <li class="nav-item" role="presentation">
            <a href="/insertar" class="nav-link" 
                >Insertar canción</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="/crplaylist" class="nav-link" 
                >Crear playlist</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="/vrplaylist" class="nav-link" 
                >Ver playlists creadas</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="" class="nav-link" 
                >Buscar playlists</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="/profil" class="nav-link" 
                >Perfil</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <form action="{{ route('logout')}}" method="post">
                @csrf
                <button>Log out</button>
            </form>
        </li>
        @endauth
    </ul>
    

    
    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
        var triggerEl = document.querySelector("#navId a");
        bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
    </script>

@auth
{{Auth::user()->name}}
<br>
{{Auth::user()->email}}
@endauth