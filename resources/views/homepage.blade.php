<x-layout>
@auth
</h1>Hello! {{auth()->user()->name}}</h1>
<br>
<p>{{auth()->user()->email}}</p>
<a class="nav-link" href="{{ url('/logout') }}">Logout</a>
@endauth
</x-layout>

