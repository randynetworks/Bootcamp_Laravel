@extends('master')

@section('content')
<h1>SanberBook</h1>
    <h3>Social MEdia Developer Santai Berkualitas</h3>
    <p>Belajar dan Berbagi agar hidup ini semakin berkualitas</p>
    <h4>Benefit Join di SanberBook</h4>
    <ul>
        <li>Mendapatkan Motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sambercode</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h4>Cara Bergabung ke SanberBook</h4>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="{{url('/register')}}">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
@endsection
