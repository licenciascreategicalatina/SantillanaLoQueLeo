@extends('layouts.app')

@section('content')

    {{-- <form id="logout" method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="dropdown-item" href="#">
            <i id="logout-icon" class="mr-50" data-feather="power"></i>
            Cerrar Sesión
        </button>
    </form> --}}

    <view-home></view-home>
    {{-- <view-component></view-component> --}}
    {{-- <button-view></button-view> --}}

@endsection

@push('styles')
    <style>
        #logout {
            background: #e4e2e25c;
            position: fixed;
            z-index: 777;
            right: 0;
        }
        .dropdown-item {
            padding: 0.25rem 1rem;
            font-weight: 500;
        }
        svg#logout-icon {
            margin-top: -3px;
            margin-right: 3px;
        }
    </style>
@endpush
