@if(Route::has('login'))
    <div>
    @auth
        <a href="{{url('/home')}}" class="text-grey text-sm underline">Home</a>
        <a href="{{url('/logout')}}" class="text-grey text-sm underline">Logout</a>
    @else
        <a href="{{url('/login')}}" class="text-grey text-sm underline">Login</a>

        @if(Route::has('register'))
            <a href="{{route('register') }}">Register</a>
        @endif
    @endauth
    </div>
@endif