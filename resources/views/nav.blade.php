<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#" style="color: white">
                @if (session()->has('uname'))
                    {{ session()->get('uname') }}
                @else
                    Guest
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/') }} style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/user') }} style="color: white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ url('/user/display') }} style="color: white">Customer</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
