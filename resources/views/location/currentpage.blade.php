@extends('layouts.app')

@section('content')
<div>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</div>
@endsection