@extends('layouts.admin')

@section('title', 'Create Opening')

@section('content')

<form method="POST"
    action="{{ isset($opening) ? route('openings.update', ['opening' => $opening->id]) : route('openings.store') }}">
    @csrf

    @if(isset($opening))
        @method('PUT')
        <input type="hidden" name="opening_id" value="{{ $opening->id }}">
    @endif

    <label for="title">Title:</label>
    <input type="text" name="title"
        value="{{ old('title', isset($opening) ? $opening->title : '') }}"
        required>

    <label for="sub_title">Subtitle:</label>
    <input type="text" name="sub_title"
        value="{{ old('sub_title', isset($opening) ? $opening->sub_title : '') }}"
        required>

    <!-- Add a hidden input with the same name and value 0 to ensure the unchecked value is submitted -->
    <input type="hidden" name="status" value="0">

    <button type="submit">
        {{ isset($opening) ? 'Update' : 'Create' }}
    </button>
</form>

@endsection
