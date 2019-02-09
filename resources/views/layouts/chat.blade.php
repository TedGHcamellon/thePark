@extends('layouts.app')

@section('content')
<div class="container chat">
    <div class="row chat-header">
        <div class="chat-about">

            @if(isset($conversation->withUser))
              {{--TODO: User Avatar--}}
              {{--<img src="{{ @$user->avatar }}" alt="avatar" />--}}
                {{--TODO: Missing glyphicon--}}
                <div class="chat-with">
                    <a href="{{ url('home') }}">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a> {{ $conversation->withUser->name }}
                </div>
            @else
                <div class="chat-with">No thread selected.</div>
            @endif

            {{--TODO: I can do better deleting a conv--}}
            {{--@unless(isNull($conversation->messages['0']['conversation_id']))--}}
                {{--<a href="{{ url('conversation/delete/' . $conversation->messages['0']['conversation_id']) }}"><span class="glyphicon glyphicon-trash"></span>Delete</a>--}}
            {{--@endunless--}}

        </div>

        {{--TODO: Improve chat with others--}}
        @include('partials.chatothers')

    </div> <!-- end chat-header -->
      
    @yield('content-chat')
    {{--TODO: Delete example chat--}}
{{--    @include('partials.chathistory')--}}

    <div class="row chat-message col-xs-12">
        {{--<form action="{{ url('/message/') }}" method="post" id="talkSendMessage">--}}
        <form action="{{ route('messages.store', ['id' => @request()->route('id')]) }}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="receiver_id" value="{{ @request()->route('id') }}">
            <textarea class="col-xs-10" name="msg_body" id="message-data" placeholder ="Type your message" rows="1" required></textarea>
            <button class="col-xs-2" type="submit" id="btn_send">Send</button>

        </form>
    </div> <!-- end chat-message -->
      
</div> <!-- end chat container -->

{{--TODO: script for sending msg--}}
      {{--<script>--}}
          {{--var __baseUrl = "{{url('/')}}"--}}
      {{--</script>--}}
    {{--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>--}}
    {{--<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>--}}
    {{--<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>--}}



        {{--<script src="{{asset('chat/js/talk.js')}}"></script>--}}

    {{--<script>--}}
        {{--var show = function(data) {--}}
            {{--alert(data.sender.name + " - '" + data.message + "'");--}}
        {{--};--}}

        {{--var msgshow = function(data) {--}}
            {{--var html = '<li id="message-' + data.id + '">'--}}
                {{--+ '<div class="message-data">'--}}
                {{--+ '<span class="message-data-name"> <a href="#" class="talkDeleteMessage" data-message-id="'--}}
                {{--+ data.id--}}
                {{--+ '" title="Delete Messag"><i class="fa fa-close" style="margin-right: 3px;"></i></a>'--}}
                {{--+ data.sender.name + '</span>'--}}
                {{--+ '<span class="message-data-time">1 Second ago</span>'--}}
                {{--+ '</div>'--}}
                {{--+ '<div class="message my-message">' +--}}
            {{--data.message +--}}
            {{--'</div>' +--}}
            {{--'</li>';--}}

            {{--$('#talkMessages').append(html);--}}
        {{--}--}}

    {{--</script>--}}
    {{--{!! talk_live(['user'=>["id"=>auth()->user()->id, 'callback'=>['msgshow']]]) !!}--}}

@endsection
