{{-- @extends('layouts.back') --}}

{{-- @section('content') --}}
<div>
    <h3>Bonjour : {{ Auth::user()->name}} {{ Auth::user()->prenom}} </h3>
</div>

<div>


    <form action="{{ route("logout") }}" method="POST">
        @csrf
        <button class="btn btn-primary">Deconnexion</button>

        </form>
</div>

{{-- @endsection --}}

