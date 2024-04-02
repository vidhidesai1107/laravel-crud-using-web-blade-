@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Items</h2>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('items.create') }}" class="btn btn-sm btn-primary">Create Item</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('items.destroy', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        <!-- Add delete button if needed -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
