@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Add New Invoice Here</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('invoice.index') }}">back</a></li>
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
                <form action="{{ route('customer.store') }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name </label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="paid,pending">
                      @error('name')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Phone </label>
                    <div class="col-sm-10">
                      <input type="text" name="phone" class="form-control" placeholder="cash,card">
                      @error('phone')
                      <div class="text-danger">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control">
                      @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>

          </div>
        </div>
      </section>
</main>
@endsection
