@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Update</div>
            <div>
                <form action="{{url("/Teams/".$team_id."/Spieler/updating/".$spieler->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="Name" value="{{$spieler->Name}}"></td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td><input type="text" name="Position"  value="{{$spieler->Position}}"></td>
                        </tr>
                        <tr>
                            <td>Herkunft</td>
                            <td><input type="text" name="herkunft"  value="{{$spieler->Herkunft}}"></td>
                        </tr>
                        <tr>
                            <td>Nummer</td>
                            <td><input type="text" name="nummer"  value="{{$spieler->Nummeer}}"></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/Teams/'.$team_id.'/Spieler')}}">Zurück</a> </td>
                            <td><input type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
