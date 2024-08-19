@extends('layouts.app')

@section('content')
<div class="computer-index">
    <div class="content">
        <div class="title m-b-md">
            Computer Orders
        </div>
        @foreach($computer as $orders)
            <div class='computer-item'>
                <h4><a href="/computers/{{ $orders->id }}">{{ $orders->name }}</a></h4>
            </div>
        @endforeach
    </div>
</div>
@endsection