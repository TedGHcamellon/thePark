@extends('layouts.chat')

@section('content-chat')
    <div class="row chat-history">
        <ul id="talkMessages">

            @if($conversation->messages->count())
                @foreach($conversation->messages as $message)
                    <li class="" id="message-{{ $message->id }}">
                        @if($message->sender->id == auth()->id())
                            <div class="message my-message">
                                {{ $message->message }}
                                <div>
                                    {{ $message->humans_time }} ago.
                                </div>
                                {{--TODO: Messages options--}}
                                <form action="{{ url('message/delete/'. $message->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <button class="delete_btn" name="delete-message" type="submit"><span class="glyphicon glyphicon-trash"></span> <em>Delete</em></button>
                                </form>
                                <button name="fwd_btn" type="submit" value="#"></button>
                            </div>
                        @else
                            <div class="message other-message float-left">
                                {{ $message->message }}
                                <div>
                                    {{ $message->humans_time }} ago.
                                    Sent by {{ $message->sender->name }}.
                                </div>
                                {{--TODO: Messages options--}}
                                <form action="{{ url('message/delete/'. $message->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <button class="delete_btn" name="delete-message" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                                </form>
                                <button name="fwd_btn" type="submit" value="#">Forward</button>

                            </div>
                        @endif
                    </li>
                @endforeach
            @else
                <div>Say Hi! to {{ $conversation->withUser->name }}</div>
            @endif
        </ul>

    </div> <!-- end chat-history -->

@endsection
