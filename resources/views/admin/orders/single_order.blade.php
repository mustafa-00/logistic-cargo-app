@extends('admin.dashboard')

@section('content')
    <main class="main" id="main">
        <div class="pagetitle">
            <h1>Single Order Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('order.index') }}">back</a></li>
                </ol>
            </nav>
        </div>

        
  </main>
@endsection
