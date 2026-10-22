
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <a href="{{ route('events.index') }}" class="btn btn-secondary mb-3">
        ← Kembali ke Daftar Event
    </a>

    <div class="card shadow-sm">
        <div class="card-body">
            <h2>{{ $event->name }}</h2>
            <hr>

            <p><strong>Penyelenggara:</strong> {{ $event->organizer }}</p>
            <p><strong>Lokasi:</strong> {{ $event->location }}</p>
            <p><strong>Tanggal:</strong> {{ $event->date }}</p>
            <p><strong>Waktu:</strong> {{ $event->time }}</p>
            <p><strong>Harga Tiket:</strong>
                @if ($event->ticket_price == 0)
                    Gratis
                @else
                    Rp{{ number_format($event->ticket_price, 0, ',', '.') }}
                @endif
            </p>

            <p><strong>Deskripsi:</strong></p>
            <p>{{ $event->description }}</p>

            <p><strong>Banner:</strong> {{ $event->banner }}</p>
        </div>
    </div>
</div>
@endsection
