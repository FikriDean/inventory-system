@extends('layouts.main')

@section('content-page')
    <div class="content-page">
        <h6 class="mb-3">Last Updated: {{ $warehouse->updated_at->diffForHumans() }}</h6>
        @livewire('warehouse-edit', ['warehouse' => $warehouse], key($warehouse->id))
    </div>
@endsection
