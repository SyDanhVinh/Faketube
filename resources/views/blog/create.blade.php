@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-4">Create </h1>
                <form action="{{ route('blog.store') }}" method="post">
                    @csrf
                    {{-- Form control here --}}

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary" class="d-flex mx-auto">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
