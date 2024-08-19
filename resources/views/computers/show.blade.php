@extends('layouts.app')

@section('content')
<div class="wrapper computer-details">
    <h1>Order for {{ $computer->name }}</h1>
    <p class="type">Type {{ $computer->type }}</p>
    <p class="brand">Brand {{ $computer->brand }}</p>

    <form action="/computers/{{ $computer->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>    
</div>
<p><a href="/computers" class="back">Back</a></p>    
@endsection