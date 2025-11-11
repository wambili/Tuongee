@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="row">
        {{-- Left side: Contact Form --}}
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="card shadow-lg rounded-4 border-0 h-100">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Contact Us</h4>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}">
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                                   value="{{ old('subject') }}">
                            @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" rows="4"
                                      class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Right side: Image --}}
        <div class="col-md-6">
            <div class="h-100" style="height:100%; min-height: 100%;">
                <img src="{{ asset('images/contact-side.jpg') }}"
                     alt="Contact illustration"
                     class="w-100 h-100 rounded-4 shadow-lg"
                     style="object-fit: cover; display: block;">
            </div>
        </div>
    </div>
@endsection
