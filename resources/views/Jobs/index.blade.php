
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Portal Lowongan Kerja</h1>
    <p class="text-muted">Temukan pekerjaan yang sesuai dengan minat Anda.</p>

    <div class="row">
        @forelse ($jobs as $job)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img
    src="{{ asset('assets/images/' . $job->image) }}"
    class="card-img-top"
    alt="{{ $job->title }}"
    style="height: 530px; object-fit: cover;"
>

                    <div class="card-body">
                        <h5 class="card-title">{{ $job->title }}</h5>
                        <p class="mb-1">{{ $job->company }}</p>
                        <p class="text-muted">{{ $job->location }}</p>
                        <p>{{ $job->salary }}</p>

                        <a href="{{ route('jobs.show', $job->id) }}"
                           class="btn btn-primary">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p>Belum ada lowongan kerja yang tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
 