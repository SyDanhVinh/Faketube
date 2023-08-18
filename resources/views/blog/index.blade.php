@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @php
        $count = $currentPage * $perPage - $perPage;
    @endphp

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center my-4">Title</h2>
                <a name="" id="" class="btn btn-primary" href="{{ route('blog.create') }}" role="button">Create
                    new ...</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                @php
                                    $user = $blog->user;
                                @endphp
                                <tr>
                                    <th scope="row">{{ ++$count }}</th>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->user->name }}</td>
                                    <td class="d-flex gap-2 justify-content-center">
                                        <a class="btn btn-primary btn-sm" href="{{ route('blog.show', $blog) }}"
                                            role="button"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('blog.edit', $blog) }}" class="btn btn-primary btn-sm"><i
                                                class="bi bi-pencil-square"></i></a>
                                        {{-- Modal --}}
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $count }}"><i class="bi bi-trash"></i>
                                        </button>
                                        <div class="modal fade" id="modalId-{{ $count }}" tabindex="-1"
                                            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                            aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Confirm</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">No
                                                        </button>
                                                        <form action="{{ route('blog.destroy', $blog) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
