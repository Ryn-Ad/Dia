@extends('layouts.frame')

@section('title')
{{ config('name', 'List Gejala') }}
@endsection

@section('main_content')
    <div class="text">LIST GEJALA</div>
    <div class="add_space">
        <a href="/insert-gejala" class="add_button">Tambah Data</a>
    </div>
    <table>
        <colgroup>
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 55%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 20%;">
        </colgroup>
        <tr>
            <th>KODE</th>
            <th>NAMA GEJALA</th>
            <th>INDEX</th>
            <th>OPSI</th>
        </tr>
        @foreach ($gejala as $g_admin)
        <tr>
            <td>{{$g_admin->kode_gejala}}</td>
            <td>{{$g_admin->nama_gejala}}</td>
            <td>{{$g_admin->index_gejala}}</td>
            <td>
                <a href="/edit-gejala/{{$g_admin->index_gejala}}" class="edit">
                    <i class='bx bxs-edit'></i>
                </a>
                <a href="/delete-gejala/{{$g_admin->index_gejala}}" class="remove" onclick="event.preventDefault(); document.getElementById('submit-form{{$g_admin->index_gejala}}').submit();">
                    <i class='bx bxs-trash'></i>
                </a>
                <form action="/delete-gejala/{{$g_admin->index_gejala}}" id="submit-form{{$g_admin->index_gejala}}" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="paginate_links">
    {{$gejala->links() }}
    </div>

@endsection