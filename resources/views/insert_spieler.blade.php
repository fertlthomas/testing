@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Inserts</div>
            <div>
                <form action="{{url("/Teams/".$team_id."/Spieler/inserting")}}" method="post">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td><input type="text" name="position"></td>
                        </tr>
                        <tr>
                            <td>Herkunft</td>
                            <td><input type="text" name="herkunft"></td>
                        </tr>
                        <tr>
                            <td>Nummer</td>
                            <td><input type="text" name="nummer"></td>
                        </tr>
                        <tr>
                            <td><a href="{{url("/Teams/".$team_id."/Spieler")}}">Zurück</a> </td>
                            <td><input type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection