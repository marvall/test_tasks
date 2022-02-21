@section('navigation')
    <div class="navbar">
        @if(Auth::check())
            <ul >
                <li class="nav_item">
                    <a href="/search">Search</a>
                </li>
                <li class="nav_item">
                    <a href="/result">Result</a>
                </li>
                <li class="nav_item auth_item">
                    <a href="/logout">Logout</a>
                </li>
            </ul>
        @else
            <ul>
                <li class="nav_item auth_item">
                    <a href="/login">Login</a>
                </li>
                <li class="nav_item ">
                    <a href="/singup">Sing Up</a>
                </li>
            </ul>
        @endif
    </div>