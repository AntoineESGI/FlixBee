@extends('mainTemplate')

@section('content')
    <form method="post">
        {{ csrf_field() }}
        <p><input type="email" name="email" placeholder="Email" value="{{old('email')}}"></p>
        @if($errors->has('email'))
            <p>{{$errors->first('email')}}</p>
        @endif

        <p><input type="password" name="password" placeholder="Mot de passe" value="{{old('password')}}"></p>
        @if($errors->has('password'))
            <p>{{$errors->first('password')}}</p>
        @endif
        <p><input type="submit" value="Connexion"></p>
    </form>
@endsection