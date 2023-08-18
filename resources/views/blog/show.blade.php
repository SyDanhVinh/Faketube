@extends('layouts.app')

@section('title', 'Show')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-4">Something details</h1>
                {{-- Card here --}}

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Something: {{ $blog->title }}</h4>
                        <h4 class="card-title">Something: {{ $blog->content }}</h4>
                        <h4 class="card-title">Something: {{ $user->name }}</h4>
                        <h4 class="card-title">Something: {{ $blog->created_at }}</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
