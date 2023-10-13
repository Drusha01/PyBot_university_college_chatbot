@extends('layout.app')
@section('title', 'Pybot | Model') <!-- Set the page title -->

@section('model', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Model</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

 

  </main><!-- End #main -->

@endsection