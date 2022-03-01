@if (Route::has('login'))

@auth
<li>

    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
</li>
@else
<li>

    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
</li>

@if (Route::has('register'))
<li>
    <a href="{{ route('register') }}" class=" text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
</li>
@endif
@endauth

@endif
