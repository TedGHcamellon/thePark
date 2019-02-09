<ul class="list">

    @foreach($threads as $inbox)

        @unless($inbox->withUser->name == $user->name)
            <li>
                <a href="{{ route('message.read', [ 'id' => $inbox->withUser->id ]) }}">
                    {{--TODO: Missing avatar--}}
                    {{--<img src="{{ $inbox->withUser->avatar }}" alt="avatar" />--}}
                    <div class="about">
                        <div class="name">{{ $inbox->withUser->name }}</div>
                        <div class="status">
                            @unless(auth()->user()->id == $inbox->thread->sender->id)
                                <span class="fa fa-reply"></span>
                            @endunless
                            <span>{{ substr($inbox->thread->message, 0, 20) }}</span>
                        </div>
                    </div>
                </a>
            </li>
        @endunless

    @endforeach

</ul>