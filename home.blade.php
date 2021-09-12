@extends('layout')

@section('content')
    @if(count($users))
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <thead>
            @foreach($users as $user)
            <tr>
                <th scope="col"> {{$user->id}}</th>
                <th scope="col">{{$user->name}}</th>
                <th scope="col">{{$user->email}}</th>
                <th scope="col">{{$user->phone}}</th>
            </tr>
            @endforeach
            </thead>
        </table>
    </div>

        {{$users->appends(['s'=>request()->s])->links()}}
    @else
        <p>Записей не найдено... </p>
    @endif
@endsection
