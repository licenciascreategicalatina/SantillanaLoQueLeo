@extends('layouts.app')

@section('content')

    <div class="container p-4">
        @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
        @endif

        <div class="row mt-5">
            <form action="{{ route('import-data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Importar datos</label>
                    <input type="file" name="data" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-3">importar</button>
            </form>
        </div>
    </div>

@endsection

@push('styles')

@endpush
