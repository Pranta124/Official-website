@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>View Contact</h1>
        </div>
        <div class="card-body">
            <p>Name: {{$contact->name}}</p>
            <p>Email: {{$contact->email}}</p>
            <p>Subject: {{$contact->subject}}</p>
            <p>Message: {{$contact->message}}</p>
            <p>Created_At: {{$contact->created_at}}</p>


        </div>
        </div>
    </div>

@endsection

