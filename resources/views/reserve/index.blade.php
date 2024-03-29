@extends('layouts.hotel')

@section('body')
    <table>
    <th>お名前</th><th>ご住所</th><th>電話番号</th><th>人数</th><th>チェックイン</th><th>チェックアウト</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->getName()}}</td>
        <td>{{$item->getAddress()}}</td>
        <td>{{$item->getTel()}}</td>
        <td>{{$item->member}}</td>
        <td>{{$item->checkin}}</td>
        <td>{{$item->checkout}}</th>
    </tr>
    @endforeach
    </table>
@endsection

<style>
    table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }

</style>