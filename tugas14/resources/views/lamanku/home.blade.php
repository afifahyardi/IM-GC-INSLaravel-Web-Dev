@extends('layouts.master')
@section('title')
Halaman Utama
@endsection
@section('subtitle')
Halaman Utama
@endsection

@section('content')
    
            <h1>Garuda Cyber Institute</h1>
            <h3>Jadilah Programmer Handal Bersama GC-INS</h3>
            <p>Grow Together With Garuda Cyber Institute</p>

            <style>
  body {
   background-color: lightblue;
  }
</style>

        <div class="content">
            
            <div class="benefit">
                <h4>Syarat dan Ketentuan</h4>
                <ul>
                    <li>Tamatan SMA/SMK</li>
                    <li>Tamatan Perguruan Tinggi</li>
                    <li>Pekerja IT</li>
                    <li>Freelancer</li>
                </ul>
            </div>

            <div class="cara_join">
                <h4>Cara Bergabung</h4>
                <ol>
                    <li>Kunjungi Website GC-INS</li>
                    <li>Register <a href="/register">Form Sign Up</a></li>
                    <li>Lakukan Pembayaran</li>
                </ol>
                <footer>
		<p>&copy; <a href=> @nurulafifahyardi.com</a>.2023 - 2024</p>
	</footer>
            </div>
        </div>
@endsection
