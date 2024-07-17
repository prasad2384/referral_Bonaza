@php
    use Illuminate\Support\Facades\Route;
@endphp
@if (Route::currentRouteName() !== 'profile_dashboard' && Route::currentRouteName() !== 'edit_profile')
    <!-- Header START -->
    <header class="header-sticky header-absolute">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg nav-section">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img class="light-mode-item navbar-brand-item"
                        src="{{ asset('images/logo.PNG') }}" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu-item mb-2 mb-lg-0">
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact-v1.html">Share referrals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('how_it_works') }}">how it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-v1.html">browse referrals</a>
                        </li>
                        <!-- Nav item -->
                    </ul>
                    <a href="#" class="btn btn-sm btn-light create-btn mb-0"><i
                            class="bi bi-person-circle me-1"></i>Create
                        Account</a>
                </div>
            </div>
        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->
@else
    <!-- Header START -->
    <header class="header-sticky header-absolute">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg nav-section">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><img class="light-mode-item navbar-brand-item"
                        src="{{ asset('images/logo.PNG') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <div class="dropdown">
                        <button class="dropdown-toggle bg-transparent border-0" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (isset($data) && $data->logo != '')
                                <img src="{{ asset('images/'.$data->logo) }}" alt="profile-img"
                                    class="rounded-circle img-fluid  tc-card-img ">
                            @else
                                <img src="{{ asset('images/default_user_logo.png') }}" alt="profile-img"
                                    class="rounded-circle img-fluid  tc-card-img ">
                                    @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start text-center p-0" style="text-align: center;">
                            <li class="p-0">
                                <a class="dropdown-item text-center p-0" href="{{ url('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>

                    </div>


                </div>

            </div>

        </nav>
        <!-- Logo Nav END -->
    </header>
    <!-- Header END -->
@endif
