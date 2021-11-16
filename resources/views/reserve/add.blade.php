@extends('layouts.hotel')

@section('body')
<form action="/reserve/add" method="POST">
    @csrf
    <tr><th>利用者ID: </th><td><input type="text" name="user_id" class="form-control" required autofocus></td></tr>
    <tr><th>人数: </th><td><input type="number" name="member" class="form-control" required></td></tr>
    <tr><th>チェックイン: </th><td><input type="date" name="checkin" class="form-control" required></td></tr>
    <tr><th>チェックアウト: </th><td><input type="date" name="checkout" class="form-control" required></td></tr>
    <tr><th></th><td><input type="submit" value="予約" class="form-control-sm"></td></tr>
</form>
@endsection

<style>
    form {
        width: 50%;
    }
    input:required{
        background: #ffe1e4; 
    }
    input:valid{
        background: transparent;
    }
    input:focus{
        background: #DCEDC8;
    }
    
    </style>