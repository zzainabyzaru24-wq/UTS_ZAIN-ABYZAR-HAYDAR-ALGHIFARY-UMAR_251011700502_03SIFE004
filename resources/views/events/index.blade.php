
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-2">Event Komunitas</h1>
    <p class="text-muted mb-4">
        Temukan berbagai acara menarik dari komunitas.
    </p>

    <div class="row">
        @forelse ($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
    <img
        src="{{ asset('assets/images/' . $event->banner) }}"
        class="card-img-top"
        alt="{{ $event->name }}"
        style="weidth: 100px; object-fit: cover;"
    >

    <div class="card-body">
                        <h5 class="card-title">{{ $event->name }}</h5>

                        <p class="mb-1">
                            <strong>Penyelenggara:</strong>
                            {{ $event->organizer }}
                        </p>

                        <p class="mb-1">
                            <strong>Lokasi:</strong>
                            {{ $event->location }}
                        </p>

                        <p class="mb-3">
                            <strong>Tanggal:</strong>
                            {{ $event->date }}
                        </p>

                        <a href="{{ route('events.show', $event->id) }}"
                           class="btn btn-primary">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p>Belum ada data event.</p>
        @endforelse
    </div>
</div>
@endsection
 <!-- #region -->