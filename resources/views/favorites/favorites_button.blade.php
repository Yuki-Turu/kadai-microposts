    @if (Auth::check())   
        @if (Auth::user()->is_favorite($micropost->id))
            {!! Form::open(['route' => ['favorites.unfavorite',$micropost->id]]) !!}
                {!! Form::submit('Unfavorite', ['class' => "btn btn-danger"]) !!}
            {!! Form::close() !!}
        @else
            {!! Form::open(['route' => ['favorites.favorite',$micropost->id]]) !!}
                {!! Form::submit('Favorite',['class' => "btn btn-success"]) !!}
            {!! Form::close() !!}
        @endif
    @endif