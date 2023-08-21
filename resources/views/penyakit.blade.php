@extends('layouts.frame')

@section('title')
{{ config('name', 'List Penyakit dan Solusi') }}
@endsection

@section('main_content')
    <div class="text">LIST PENYAKIT DAN SOLUSI</div>
    <div class="add_space">
        <a href="/insert-penyakit" class="add_button">Tambah Data</a>
    </div>
    <table>
        <colgroup>
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 35%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 20%;">
        </colgroup>
        <tr>
            <th>KODE</th>
            <th>NAMA PENYAKIT</th>
            <th>INDEX</th>
            <th>SOLUSI</th>
            <th>OPSI</th>
        </tr>
        @foreach ($penyakit as $p_admin)
        <tr>
            <td>{{$p_admin->kode_penyakit}}</td>
            <td>{{$p_admin->nama_penyakit}}</td>
            <td>{{$p_admin->index_penyakit}}</td>
            <td><a href="#" class="solusi_button">Cek Solusi</a></td>
            <td>
                <a href="#" class="edit">
                    <i class='bx bxs-edit'></i>
                </a>
                <a href="#" class="remove">
                    <i class='bx bxs-trash'></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="paginate_links">
    {{$penyakit->links() }}
    </div>
@endsection