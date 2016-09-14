@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Inserts</div>
            <div>
                <form action="{{url("inserting")}}" method="post">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <td>Sportart</td>
                            <td><input type="text" name="sportart"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Ort</td>
                            <td><input type="text" name="ort"></td>
                        </tr>
                        <tr>
                            <td>Marktwert</td>
                            <td><input type="text" name="marktwert"></td>
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
