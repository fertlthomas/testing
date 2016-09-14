@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Teams</div>

            <table>
                <tr>
                    <th>Sportart</th>
                    <th>Name</th>
                    <th>Ort</th>
                    <th>Marktwert</th>
                </tr>
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->Sportart}}</td>
                    <td>{{$team->Name}}</td>
                    <td>{{$team->Ort}}</td>
                    <td>{{$team->Marktwert}}</td>
                    <form action="{{url("Teams/".$team->id."/Spieler")}}" method="get">
                        <td><input type="submit" value="Anzeigen"></td>
                    </form>

                    <form action="{{url('Update/'.$team->id)}}" method="get">
                        {{ csrf_field() }}
                        {{ method_field('UPDATE') }}
                        <td><input type="submit" value="Update"></td>
                    </form>

                    <form action="{{url("deleting/".$team->id)}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <td><input type="submit" value="Delete"></td>
                    </form>
                </tr>
            @endforeach
            </table>
            <a href="{{url('/Insert')}}">Insert</a>
        </div>
    </div>
@endsection