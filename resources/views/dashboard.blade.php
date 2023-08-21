@extends('layouts.frame')

@section('title')
{{ config('name', 'DiaCo Admin Dashboard') }}
@endsection

@section('main_content')
    <div class="text">DASHBOARD</div>
    <div class="welcome_text"><b>Selamat datang di DiaCo<b></div>
    <div class="welcome_text">Website ini ditujukan untuk mendiagnosa penyakit dalam tanaman tembakau</div>
    <div class="p_text">Halaman ini merupakan halaman awal.</div>
    <div class="p_text">Admin dapat melakukan perubahan gejala, penyakit, solusi, dan/atau aturan penyakit</div>
    <div class="p_text">yang terdapat dalam Website ini melalui Navigation Menu pada samping kiri halaman ini.</div>
@endsection