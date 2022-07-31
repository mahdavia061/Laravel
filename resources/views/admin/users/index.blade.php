@extends('Layouts.admin')
@section('content')
    @include('admin.users.notifications')

    @if ($users && count($users)>0)

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>WALLET</th>
                    <th>OPERATIONS</th>
                </tr>
            </thead>

            @foreach ($users as $user)
                @include('admin.userS.item',$user)
            @endforeach

        </table>
    @endif

@endsection
