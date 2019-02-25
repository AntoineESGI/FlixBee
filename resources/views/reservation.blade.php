@extends('layout.mainLayout')

@section('headerContent')
    <div class="container-fluid text-center" id="homeHeader"></div>
@endsection

@section('content')
    <form method="post">
        {{ csrf_field() }}

        <p><input type="text" name="arrival" placeholder="Votre lieu de déstination" value="{{old('arrival')}}"></p>
        @if($errors->has('arrival'))
            <p>{{$errors->first('arrival')}}</p>
        @endif

        <label>Je souhaite effectué ce trajet le plus tot possible</label>
        <p><input type="checkbox" name="now" checked></p>

        

        <!-- Rajouter une vérification , si checkbox décoché affiché les deuxs input suivant -->

        <label>Indiquez le jour de votre trajet</label>

        <p><input type="datetime-local" name="date"  value="{{old('date')}}"></p>

        @if($errors->has('date'))
            <p>{{$errors->first('date')}}</p>
        @endif


        <label>Indiquez l'emplacement de prise en charge

        <p><input type="checkbox" name="nowPos" checked></p>
            <label>Ma position</label>
            
        <!-- Rajouter une vérification , si checkbox décoché affiché l'input suivant -->

        <p><input type="text" name="start"  value="{{old('time')}}"></p>
        @if($errors->has('time'))
            <p>{{$errors->first('time')}}</p>
        @endif


        <p><input type="submit" value="validate"></p>
    </form>
@endsection