@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Add New Zone Here</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('zone.index') }}">back</a></li>
          </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">General Form Elements</h5>

                <!-- General Form Elements -->
                <form action="{{ route('zone.store') }}" method="POST">
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

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" name="address" class="form-control" value="{{ old('address') }}">
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

                </form>

              </div>
            </div>

          </div>
        </div>
      </section>
</main>
@endsection
