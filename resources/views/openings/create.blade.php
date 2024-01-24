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
    <input type="text" name="title" value="{{ isset($opening) ? $opening->title : '' }}" required>

    <label for="sub_title">Subtitle:</label>
    <input type="text" name="sub_title" value="{{ isset($opening) ? $opening->sub_title : '' }}" required>

    <label for="status">Status:</label>
    <input type="checkbox" name="status" value="1"
        {{ (isset($opening) && $opening->status) ? 'checked' : '' }}>

        <button type="submit">{{ isset($opening) ? 'Update' : 'Create' }}</button>
    </form>

@endsection
