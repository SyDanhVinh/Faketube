@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @php
        $count = 0;
    @endphp

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center my-4">Faketube</h2>
                <a name="" id="" class="btn btn-primary" href="{{ route('channel.create') }}"
                    role="button">Create
                    new channel</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Subscribers</th>
                                <th scope="col" class="text-center">URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($channels as $channel)
                                <tr>
                                    <th scope="row">{{ ++$count }}</th>
                                    <td>{{ $channel->ChannelName }}</td>
                                    <td>{{ $channel->SubscribersCount }}</td>
                                    <td>{{ $channel->URL }}</td>
                                    <td class="d-flex gap-2 justify-content-center">
                                        <a class="btn btn-primary btn-sm" href="{{ route('channel.show', $channel) }}"
                                            role="button"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('channel.edit', $channel) }}" class="btn btn-primary btn-sm"><i
                                                class="bi bi-pencil-square"></i></a>
                                        {{-- Modal --}}
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $channel->ChannelID }}"><i class="bi bi-trash"></i>
                                        </button>
                                        <div class="modal fade" id="modalId-{{ $channel->ChannelID }}" tabindex="-1"
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
                                                        <form action="{{ route('channel.destroy', $channel) }}"
                                                            method="post">
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
    </div>

@endsection
