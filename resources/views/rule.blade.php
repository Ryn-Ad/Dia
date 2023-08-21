@extends('layouts.frame')

@section('title')
{{ config('name', 'List Aturan Penyakit') }}
@endsection

@section('main_content')
    <div class="text">LIST ATURAN PENYAKIT</div>
    <table>
        <colgroup>
            <col span="1" style="width: 30%;">
            <col span="1" style="width: 30%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <tr>
            <th>KODE PENYAKIT</th>
            <th>LIST GEJALA</th>
            <th>G1</th>
            <th>G2</th>
            <th>G3</th>
            <th>G4</th>
        </tr>
        @foreach ($aturan as $a_admin)
        <tr>
            <td>{{$a_admin->kode_penyakit}}</td>
            <td>{{$a_admin->list_gejala}}</td>
            <td>{{$a_admin->gejala_1}}</td>
            <td>{{$a_admin->gejala_2}}</td>
            <td>{{$a_admin->gejala_3}}</td>
            <td>{{$a_admin->gejala_4}}</td>
        </tr>
        @endforeach
    </table>

    <div class="paginate_links">
    {{$aturan->links() }}
    </div>
@endsection