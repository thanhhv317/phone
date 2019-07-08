@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <form method="post" action="{{ route('profile') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Name:</label>
                            <input type="text" name="name" class="col-md-6 form-control" value="{{ Auth::user()->name}}">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Address:</label>
                            <input type="text" name="address" class="col-md-6 form-control" value="{{ Auth::user()->address}}">
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
