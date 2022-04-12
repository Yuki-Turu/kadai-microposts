    @if (Auth::check())   
        @if (Auth::user()->is_favorite($micropost->id))
            {!! Form::open(['route' => ['favorites.unfavorite',$micropost->id], 'method' => 'delete']) !!}
                {!! Form::submit('Unfavorite', ['class' => "btn btn-danger"]) !!}
            {!! Form::close() !!}
        @else
            {!! Form::open(['route' => ['favorites.favorite',$micropost->id]]) !!}
                {!! Form::submit('Favorite',['class' => "btn btn-success"]) !!}
            {!! Form::close() !!}
        @endif
    @endif
    
    {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfollow', ['class' => "btn btn-danger btn-block"]) !!}