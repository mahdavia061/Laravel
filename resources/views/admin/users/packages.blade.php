@extends('layouts.admin')

@section('content')

    <table class="table table-bordered table-hover">
        <tr>
            <th>Package</th>
            <th>Price</th>
            <th>Date</th>
        </tr>

        @if($user_packages && count($user_packages)>0)

            @foreach($user_packages as $package)

            <tr>
                <td>{{$package->package_title}}</td>
                <td>{{$package->pivot->amount}}</td>
                <td>{{$package->pivot->created_at}}</td>
            </tr>

            @endforeach

        @else
            <tr>
                <td colspan="3">
                    <span>There isn't any package.</span>
                </td>
            </tr>

        @endif

    </table>

@endsection
