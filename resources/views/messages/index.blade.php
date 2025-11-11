@extends('layouts.app')

@section('title', 'All Messages')

@section('content')
    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body">
            <h4 class="mb-3">All Messages</h4>

            <table class="table table-striped table-bordered align-middle">
                <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($messages as $msg)
                    <tr>
                        <td>{{ $msg->id }}</td>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->subject }}</td>
                        <td>{{ $msg->message }}</td>
                        <td>{{ $msg->created_at->format('d M Y, h:i A') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No messages found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
