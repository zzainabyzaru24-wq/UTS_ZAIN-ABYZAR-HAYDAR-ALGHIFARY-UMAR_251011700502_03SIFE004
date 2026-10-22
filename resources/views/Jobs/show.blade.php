
@extends('layouts.app')

@section('title', $job->title)

@section('content')

<a href="{{ route('jobs.index') }}"
   class="btn btn-outline-primary mb-4">
    &larr; Kembali ke Daftar Lowongan
</a>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4 p-md-5">

        <span class="badge bg-primary mb-3">
            {{ $job->type }}
        </span>

        <h1 class="fw-bold">{{ $job->title }}</h1>

        <h5 class="text-secondary mb-3">
            {{ $job->company }}
        </h5>

        <p>📍 {{ $job->location }}</p>

        <p class="text-success fw-bold fs-5">
            {{ $job->salary }}
        </p>

        <hr>

        <h4 class="fw-bold">Deskripsi Pekerjaan</h4>
        <p>{{ $job->description }}</p>

        <h4 class="fw-bold mt-4">Persyaratan</h4>
        <p>{{ $job->requirements }}</p>

        <p class="text-secondary mt-4">
            Tanggal publikasi: {{ $job->posted_date }}
        </p>

    </div>
</div>

@endsection
