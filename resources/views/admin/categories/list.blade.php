@extends('layouts.admin')

@section('content')

    @include('admin.partials.notifications')
    <table class="table table-bordered">

        <thead>
        @include('admin.categories.columns')
        </thead>

    @if ($categories && count($categories)>0)




            @foreach ($categories as $category)
                @include('admin.categories.item',$category)
            @endforeach
        @else
        @include('admin.categories.no-item')

    @endif

    </table>

@endsection
