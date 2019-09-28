@extends('layouts.app')

@section('title','Contact Us')

@section('content')
    <h1>Contact me</h1>

    @if( ! session()->has('message'))
        <form action="{{ route('contact.store') }}" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                <div>{{ $errors->first('name')}}</div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                <div>{{ $errors->first('email')}}</div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                          class="form-control">{{ old('email') }}</textarea>
                <div>{{ $errors->first('message')}}</div>
            </div>

            @csrf
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    @endif
@endsection
