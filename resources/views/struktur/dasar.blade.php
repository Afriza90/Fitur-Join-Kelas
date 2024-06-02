<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- meta --}}
    <meta charset="utf-8">
    <meta content="initial-scale=1, width=device-width" name="viewport">
    <meta content="upgrade-insecure-requests" http-equiv="content-security-policy">
    @stack('meta')
    {{-- meta --}}
    <title>{{ config('app.name') }}</title>
    {{-- font --}}
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"
    >
    {{-- font --}}
    {{-- css --}}
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    @stack('css')
    {{-- css --}}
    {{-- ikon favorit --}}
    <link href="{{ asset('img/unsiclass.jpg') }}" rel="icon" type="image/jpeg">
    {{-- ikon favorit --}}
</head>
@includeWhen(in_array(url()->current(), [route('autentikasi.masuk'), route('autentikasi.daftar')]), 'struktur.tata-letak.autentikasi')
@includeUnless(in_array(url()->current(), [route('autentikasi.masuk'), route('autentikasi.daftar')]), 'struktur.tata-letak.utama')
</html>
