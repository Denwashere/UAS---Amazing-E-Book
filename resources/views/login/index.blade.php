@extends('layouts.main')

@section('container')
    

<div class="modal-dialog pt-4" role="document">
  <div class="modal-content rounded-5 shadow">

    @if(session()->has('success'))
    <div class="m-5 mb-0">
      <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="m-5 mb-0">
      <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
    @endif

    <div class="modal-header p-5 pb-4 border-bottom-0">
      <!-- <h5 class="modal-title">Modal title</h5> -->
      <h2 class="fw-bold mb-0">Welcome Back</h2>
    </div>

    <div class="modal-body p-5 pt-0">
      <form action="/login" method="post" class="form-signin">
        @csrf
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control rounded-4 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('name') }}">
          <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control rounded-4 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-warning" type="submit">Submit</button>
       <a href="/register" class="text-decoration-none text-primary">Dont have an account? click here to Sign Up</a></small>
        <hr class="my-4">
      </form>
    </div>
  </div>
</div>
    
@endsection