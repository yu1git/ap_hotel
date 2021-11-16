@extends('layouts.hotel')


@section('body')
<form action="/user/add" method="post">
   <table>
      @csrf
      <tr><th>お名前: </th><td><input type="text" name="name" class="form-control" required autofocus></td></tr>
      <tr><th>ご住所: </th><td><input type="text" name="address" class="form-control" required></td></tr>
      <tr><th>電話番号: </th><td><input type="text" name="tel" class="form-control" required></td></tr>
      <tr><th></th><td><input type="submit" value="新規登録" class="form-control-sm"></td></tr>
   </table>
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