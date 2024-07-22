@extends('layouts.app')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Tutor</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('tutor.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('tutor.update', $tutor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input
                    type="text"
                    name="name"
                    value="{{ $tutor->name }}"
                    class="form-control @error('name') is-invalid @enderror"
                    id="inputName"
                    placeholder="Name">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputId" class="form-label"><strong>ID:</strong></label>
                <input
                    type="text"
                    name="id"
                    value="{{ $tutor->id }}"
                    class="form-control @error('id') is-invalid @enderror"
                    id="inputId"
                    placeholder="ID">
                @error('id')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputPhone" class="form-label"><strong>Phone:</strong></label>
                <input
                    type="text"
                    name="phone"
                    value="{{ $tutor->phone }}"
                    class="form-control @error('phone') is-invalid @enderror"
                    id="inputPhone"
                    placeholder="Phone">
                @error('phone')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputDob" class="form-label"><strong>Date of Birth:</strong></label>
                <input
                    type="date"
                    name="dob"
                    value="{{ $tutor->dob }}"
                    class="form-control @error('dob') is-invalid @enderror"
                    id="inputDob"
                    placeholder="Date of Birth">
                @error('dob')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>
@endsection