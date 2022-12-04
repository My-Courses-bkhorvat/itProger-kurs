@extends('layouts.app')

@section('title-block')Record update @endsection

@section('content')
    <h1>Record update</h1>


    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Letter</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Letter" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message">{{ $data->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
