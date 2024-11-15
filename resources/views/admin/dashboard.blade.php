@extends('layout.app')
@section('title', 'Pybot | Dashboard') <!-- Set the page title -->

@section('dashboard', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



  </main><!-- End #main -->

@endsection