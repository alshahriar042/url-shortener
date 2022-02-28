<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i
                        data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>

            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">

        {{-- <div class="dropdown-title" style="margin-top: 5px;">{{ Auth::user()->name }}</div> --}}
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                    src="{{ !empty($user->avatar) ? asset('upload/user_images/' . $user->avatar) : asset('upload/avatar.png') }}"
                    class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">

                              <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" class="dropdown-item has-icon">
                    <i class="fas fa-sign-out-alt"></i>
                    @csrf
                    <a href="route('logout')" class="text-danger" onclick="event.preventDefault();
                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>

            </div>
        </li>
    </ul>
</nav>
