@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Add New Order Here</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('order.index') }}">back</a></li>
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
                <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="customer_id" value="{{ $customer[0]->id }}">

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="customer-name" readonly value="{{ $customer[0]->name }}"  class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name"  class="form-control">
                      @error('name')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Short_Description</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="short_description" style="height: 100px">{{ old('short_description') }}</textarea>
                      @error('short_description')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                      <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
                      @error('quantity')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                      @error('price')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Width</label>
                    <div class="col-sm-10">
                      <input type="number" name="width" class="form-control" value="{{ old('width') }}">
                      @error('width')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-10">
                      <input type="number" name="weight" class="form-control" value="{{ old('weight') }}">
                      @error('weight')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Height</label>
                    <div class="col-sm-10">
                      <input type="number" name="height" class="form-control" value="{{ old('height') }}">
                      @error('height')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Lenght</label>
                    <div class="col-sm-10">
                      <input type="number" name="lenght" class="form-control" value="{{ old('lenght') }}">
                      @error('lenght')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                      @error('image')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Source_Address</label>
                    <div class="col-sm-10">
                      <input type="text" name="source_address" class="form-control" value="{{ old('source_address') }}">
                      @error('source_address')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Destination_Address</label>
                    <div class="col-sm-10">
                      <input type="text" name="destination_address" class="form-control" value="{{ old('destination_address') }}">
                      @error('destination_address')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" name="date" class="form-control" value="{{ old('date') }}">

                      @error('date')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Payment Status</label>
                    <div class="col-sm-10">
                      <input type="text" name="status" class="form-control" value="{{ old('status') }}">
                      @error('status')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Zone_id</label>
                    <div class="col-sm-10">
                      <input type="number" name="zone_id" class="form-control" value="{{ old('zone_id') }}">
                      @error('zone_id')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  {{-- <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">User_id</label>
                    <div class="col-sm-10">
                      <input type="number" name="user_id" class="form-control" value="{{ old('user_id') }}">
                      @error('user_id')
                        <div class="btn btn-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div> --}}

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Warehouse_id</label>
                    <div class="col-sm-10">
                        {{-- @foreach ($warehouses as )

                        @endforeach --}}
                      <input type="number" name="warehouse_id" class="form-control" value="{{ old('warehouse_id') }}">
                      @error('warehouse_id')
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
</main>
@endsection
