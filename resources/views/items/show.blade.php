@extends('layouts.app')

@section('content')
    <div>
        <h2>Item Details</h2>
        <p><strong>Name:</strong> {{ $item->name }}</p>
        <p><strong>Description:</strong> {{ $item->description }}</p>
        <a href="{{ route('items.edit', $item->id) }}">Edit</a>
        <form action="{{ route('items.destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
