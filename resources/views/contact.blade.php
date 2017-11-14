@extends('master-layouts.app')

@section('meta-title', 'Contact Form')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ url('contact') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name')}}">

                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email')}}">

                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" rows="5">{{ old('message')}}</textarea>

                    <small class="text-danger">{{ $errors->first('message') }}</small>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection