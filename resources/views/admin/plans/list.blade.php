@extends('layouts.admin')

@section('content')

    @include('admin.partials.notifications')
    <table class="table table-bordered">

        <thead>
        @include('admin.plans.columns')
        </thead>

    @if ($plans && count($plans)>0)




            @foreach ($plans as $plan)
                @include('admin.plans.item',$plan)
            @endforeach
        @else
        @include('admin.plans.no-item')

    @endif

    </table>

@endsection
