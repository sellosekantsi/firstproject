@extends('layouts.app')
    
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Add New Tutor</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('tutor.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="{{ route('tutor.store') }}" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="inputDOB" class="form-label"><strong>DOB:</strong></label>
            <input 
                type="text" 
                name="dob" 
                class="form-control @error('dob') is-invalid @enderror" 
                id="inputDOB" 
                placeholder="DOB">
            @error('dob')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Phone:</strong></label>
            <textarea 
                class="form-control @error('phone') is-invalid @enderror" 
                style="height:20px" 
                name="phone" 
                id="inputDetail" 
                placeholder="phone"></textarea>
            @error('phone')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  
  </div>
</div>
@endsection