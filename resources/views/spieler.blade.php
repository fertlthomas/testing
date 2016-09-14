@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Teams</div>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Herkunft</th>
                    <th>Nummer</th>
                </tr>
                @foreach($spielers as $spieler)
                    <tr>
                        <td>{{$spieler->Name}}</td>
                        <td>{{$spieler->Position}}</td>
                        <td>{{$spieler->Herkunft}}</td>
                        <td>{{$spieler->Nummer}}</td>

                        <form action="{{url('"/Teams/".$spieler->team_id."/Spieler/Update/'.$spieler->id)}}" method="get">
                            {{ csrf_field() }}
                            {{ method_field('UPDATE') }}
                            <td><input type="submit" value="Update"></td>
                        </form>

                        <form action="{{url("/Teams/".$spieler->team_id."/Spieler/deleting/".$spieler->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <td><input type="submit" value="Delete"></td>
                        </form>

                    </tr>
                @endforeach
                    <tr>
                        <td><a href="{{url('/Teams')}}">Zurück</a> </td>
                    </tr>
            </table>
            <a href="{{url('/Teams/'.$spieler->team_id.'/Spieler/Insert')}}">Insert</a>
        </div>
    </div>
@endsection