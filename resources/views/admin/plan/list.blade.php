@extends('layouts.admin')

@section('content')

    @if ($plans && count($plans)>0)

        <table class="table table-bordered">

            <thead>
            @include('admin.plan.columns')
            </thead>

            @foreach ($plans as $plan)
                @include('admin.plan.item',$plan)
            @endforeach

        </table>
    @endif

@endsection
