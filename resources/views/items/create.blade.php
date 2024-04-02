@extends('layouts.app')

@section('content')
    <div>
        <h2>Create New Item</h2>
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
