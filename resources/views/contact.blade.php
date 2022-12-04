@extends('layouts.app')

@section('title-block')Contacts @endsection

@section('content')
    <h1>Contacts</h1>


    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Letter</label>
            <input type="text" name="subject" placeholder="Letter" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
