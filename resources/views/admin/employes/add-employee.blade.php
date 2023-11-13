@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Add New Employee Here</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('employe_overview.index') }}">back</a></li>
          </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Creat your account here</h5>

                <!-- General Form Elements -->
                <form action="{{ route('employe_overview.store') }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                      @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                      @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">phone</label>
                    <div class="col-sm-10">
                      <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
                      @error('phone')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">DoB</label>
                    <div class="col-sm-10">
                      <input type="date" name="DoB" class="form-control" value="{{ old('DoB') }}">
                      @error('DoB')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">zone_id</label>
                    <div class="col-sm-10">
                      <input type="number" name="zone_id" class="form-control" value="{{ old('zone_id') }}">
                      @error('zone_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                      @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Password Confirmation</label>
                    <div class="col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
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
