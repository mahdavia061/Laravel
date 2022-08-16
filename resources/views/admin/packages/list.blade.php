@extends('layouts.admin')

@section('content')

    @include('admin.partials.notifications')
    <table class="table table-bordered">

        <thead>
        @include('admin.packages.columns')
        </thead>

    @if ($packages && count($packages)>0)




            @foreach ($packages as $package)
                @include('admin.packages.item',$package)
            @endforeach
        @else
        @include('admin.packages.no-item')

    @endif

    </table>

@endsection
