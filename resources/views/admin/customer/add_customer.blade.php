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
                <h5 class="card-title">register your customer information here:</h5>
                <style>
                    #new-customer{
                        display: none;
                    }
                </style>

                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <select name="customer" id="customer" class="form-control">
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                          @error('customer')
                              <div class="alert alert-danger">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                      </div>
                      <input type="submit" class="btn btn-success mb-3" value="Add Customer order">
                </form>

                <button class="btn btn-info" onclick="newCustomer()">New Customer</button>
                <!-- General Form Elements -->
                <form id="new-customer" action="{{ route('customer.store') }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Customer Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="Your Name">
                      @error('name')
                          <div class="alert alert-danger">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="text" name="phone" class="form-control" placeholder="+93">
                      @error('phone')
                      <div class="alert alert-danger">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Customer Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                      @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
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

<script>
    function newCustomer() {
        document.getElementById("new-customer").style.display = "block";
    }
</script>
@endsection
