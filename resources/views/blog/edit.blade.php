@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-4">Edit </h1>
                <form action="{{ route('blog.update', $blog) }}" method="post">
                    @csrf
                    @method('put')
                    {{-- Form control here --}}

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary" class="d-flex mx-auto">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
