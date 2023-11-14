@extends('admin.dashboard')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Warehouse Page</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('warehouse.index') }}">back</a></li>
            </ol>
        </nav>
    </div>

    <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('warehouse.update', $warehouse->id) }}" method="POST">
                @csrf
                @if (isset($warehouse))
                    @method('put')
                @endif
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Warehouse Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4" value="{{ $warehouse->name }}">
              </div>

              <div class="col-12">
                <label for="inputEmail4" class="form-label">Adress</label>
                <input type="text" name="address" class="form-control" id="inputEmail4" value="{{ $warehouse->address }}">
              </div>

              <div class="input-group mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Capacity</label>
                <span class="input-group-text">Kg</span>
                <input type="number" name="capacity" class="form-control" aria-label="Amount (to the nearest dollar)" id="inputPassword4" value="{{ $warehouse->capacity }}">
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form>
            <!-- Vertical Form -->
          </div>
        </div>
    </div>
</main>
@endsection
