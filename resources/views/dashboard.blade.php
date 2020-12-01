@extends('layouts.app')
<title>Dashboard</title>
@section('content')
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr onclick="document.location = 'dashboard/{{$item->id}}'">
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

