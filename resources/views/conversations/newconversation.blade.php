@extends('layouts.app')

@section('content')
    {{--TODO: Implment new conv--}}

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">All Users</div>

                    <div class="panel-body">

                        @foreach($users as $user)
                            @unless($user->id == auth()->id())
                                {{--TODO: Missing responsiveness--}}
                                <div>
                                    {{--TODO: Missing avatar img--}}
                                    {{--<img src="{{$user->avatar}}">--}}
                                    {{ $user->name }}
                                    <a href="{{ route('message.read', ['id'=>$user->id]) }}"
                                       class="btn btn-success pull-right">Send Message</a>
                                </div>
                            @endunless
                            <br>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
