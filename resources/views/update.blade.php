@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Update</div>
            <div>
                <form action="{{url("updating/".$team->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <table>
                        <tr>
                            <td>Sportart</td>
                            <td><input type="text" name="sportart" value="{{$team->Sportart}}"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"  value="{{$team->Name}}"></td>
                        </tr>
                        <tr>
                            <td>Ort</td>
                            <td><input type="text" name="ort"  value="{{$team->Ort}}"></td>
                        </tr>
                        <tr>
                            <td>Marktwert</td>
                            <td><input type="text" name="marktwert"  value="{{$team->Marktwert}}"></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/Teams')}}">Zurück</a> </td>
                            <td><input type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
