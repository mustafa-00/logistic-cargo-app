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


        <form method="POST" action="{{ route('warehouse.edit', $warehouse->id) }}">
          @csrf
          @if (isset($warehouse))
              @method('put')
          @endif


          <div class="row mb-3">
            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
            <div class="col-md-8 col-lg-9">
              <input name="name" type="text" class="form-control" id="fullName" value="{{ $warehouse->name }}">
            </div>
          </div>

          <div class="row mb-3">
              <label for="Email" class="col-md-4 col-lg-3 col-form-label">Address</label>
              <div class="col-md-8 col-lg-9">
                <input name="address" type="text" class="form-control" id="Email" value="{{$warehouse->address}}">
              </div>
          </div>

          <div class="row mb-3">
              <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Capacity</label>
              <div class="col-md-8 col-lg-9">
                <input name="capacity" type="number" class="form-control" id="Phone" value="{{$warehouse->capacity}}">
              </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div> --}}
</main>
@endsection
