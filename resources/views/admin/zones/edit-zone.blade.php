@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Edit Zone Page</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('zone.index') }}">back</a></li>
            </ol>
        </nav>
    </div>

    <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('zone.update', $zone->id) }}" method="POST">
                @csrf
                @if (isset($zone))
                    @method('put')
                @endif
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Zone Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4" value="{{ $zone->name }}">
              </div>

              <div class="col-12">
                <label for="inputEmail4" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="inputEmail4" value="{{ $zone->price }}">
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>
    </div>
</main>
@endsection
