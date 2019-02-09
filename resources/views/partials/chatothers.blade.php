<div class="chat-others">
    <ul class="">

        @if(isset($users))
            @foreach($users as $user)
                @unless($user->id == auth()->id())
                    <li class="">
                        <a href="{{ route( 'conversations.show', ['id' => $user->id] ) }}">
                            {{--TODO: Missing avatar img--}}
                            {{--<img src="{{$user->avatar}}">--}}
                            <div class=""><i class="fa fa-user-circle"></i> {{ $user->name }}</div>
                        </a>
                    </li>
                @endunless
            @endforeach
        @endif

    </ul>
</div>