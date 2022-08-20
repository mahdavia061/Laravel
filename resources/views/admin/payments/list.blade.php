@extends('layouts.admin')

@section('content')

    @include('admin.partials.notifications')
    <table class="table table-bordered">

        <thead>
        @include('admin.payments.columns')
        </thead>

    @if ($payments && count($payments)>0)




            @foreach ($payments as $payment)
                @include('admin.payments.item',$payment)
            @endforeach
        @else
        @include('admin.payments.no-item')

    @endif

    </table>

@endsection
