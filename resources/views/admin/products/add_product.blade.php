@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Add New Product Here</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><h5><a href="{{ route('dashboard') }}">back</a></h5></li>
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
                <form action="{{ route('product.store') }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Short_Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="short_description" style="height: 100px"></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                      <input type="number" name="quantity" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="price" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Width</label>
                    <div class="col-sm-10">
                      <input type="number" name="width" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-10">
                      <input type="number" name="weight" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Height</label>
                    <div class="col-sm-10">
                      <input type="number" name="height" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Lenght</label>
                    <div class="col-sm-10">
                      <input type="number" name="lenght" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">User_id</label>
                    <div class="col-sm-10">
                      <input type="number" name="user_id" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Warehouse_id</label>
                    <div class="col-sm-10">
                      <input type="number" name="warehouse_id" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="address" style="height: 100px"></textarea>
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
</main>
@endsection
