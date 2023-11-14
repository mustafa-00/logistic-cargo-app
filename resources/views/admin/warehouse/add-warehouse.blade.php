@extends('admin.dashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add New Warehouse Here</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('warehouse.index') }}">back</a></li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="{{ route('warehouse.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>

                {{-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Capacity</label>
                  <div class="col-sm-2">
                    <span class="input-group-text" style="display:block">Kg</span>
                    <input type="number" name="capacity" class="form-control" value="{{ old('capacity') }}">
                    @error('capacity')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div> --}}

                <div class="input-group mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Capacity</label>
                    <span class="input-group-text">Kg</span>
                    <input type="number" name="capacity" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{ old('capacity') }}">
                    @error('capacity')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="address" style="height: 100px">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!--
@endsection
