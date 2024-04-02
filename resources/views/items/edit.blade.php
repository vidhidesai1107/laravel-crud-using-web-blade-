@extends('layouts.app')

@section('content')
    <div>
        <h2>Edit Item</h2>
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $item->name }}">
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $item->description }}</textarea>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection
