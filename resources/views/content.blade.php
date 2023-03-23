@extends('layout.main')

@push('title')
    <title>Content</title>
@endpush

@section('main-section')
    <div class="text-center">
        <h1>Content</h1>
        {{time()}}
    </div>
@endsection
