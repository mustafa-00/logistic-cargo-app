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

    <!-- Profile Edit Form -->
    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

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
      </div>
      <!-- End Profile Edit Form -->
</main>
@endsection
