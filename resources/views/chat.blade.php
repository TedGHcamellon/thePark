@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Chat</h1>
        </div>

        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>

@endsection