@extends('layouts.app')

@section('content')
<div class="wrapper create-order">
    <h1>Create New Computer</h1>
    <form action="/computers" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <label for="type">Choose item:</label>
        <select name="type" id="type">
            <option value="CPU">CPU</option>
            <option value="GPU">GPU</option>
            <option value="RAM">RAM</option>
            <option value="SSD">SSD</option>
        </select>
        <label for="brand">Choose brand:</label>
        <select name="brand" id="brand">
            <option value="AMD">AMD</option>
            <option value="INTEL">INTEL</option>
            <option value="TXT">TXT</option>
            <option value="SEAGATE">SEAGATE</option>
        </select>   
        <input type="submit" value="Submit">
    </form>   
</div>     
@endsection