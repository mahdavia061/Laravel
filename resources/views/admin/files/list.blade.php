@extends('layouts.admin')

@section('content')

    @if ($files && count($files)>0)

        <table class="table table-bordered">

            <thead>
            @include('admin.files.columns')
            </thead>

            @foreach ($files as $file)
                @include('admin.files.item',$file)
            @endforeach

        </table>
    @endif

@endsection
