list all books
@extends('layout.main.app')

@section('content')

@foreach($listing as $list)
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Author</th>
            <th>Category</th>
            <th>Image</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$list->name}}</td>
            <td>{{$list->author}}</td>
            <td>{{$list->category}}</td>
            <td>{{$list->image}}</td>
            <td>{{$list->status}}</td>
        </tr>
    </tbody>
</table>

@endsection