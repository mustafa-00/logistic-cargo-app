@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Invoice Page</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('invoice.index') }}">back</a></li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
          {{-- overview --}}
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img src="assets_admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <h2>{{ $invoice->name }}</h2>
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Invoice</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Product Details</h5>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Id</div>
                          <div class="col-lg-9 col-md-8">{{ $invoice->id }}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Payment_Status</div>
                          <div class="col-lg-9 col-md-8">{{ $invoice->payment_status }}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Typeof_Payment</div>
                          <div class="col-lg-9 col-md-8">{{$invoice->typeof_payment}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Order_id</div>
                          <div class="col-lg-9 col-md-8">{{$invoice->order_id}}</div>
                      </div>
                  </div>

                  <!-- Profile Edit Form -->
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <form method="POST" action="{{ route('invoice.update', $invoice->id) }}">
                      @csrf
                      @if (isset($invoice))
                          @method('put')
                      @endif
                      {{-- <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="assets/img/profile-img.jpg" alt="Profile">
                          <input type="file" class="form-control" id="image" accept="image/*">
                        </div>
                      </div> --}}

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Payment_Status</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="payment_status" type="text" class="form-control" id="fullName" value="{{ $invoice->payment_status }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Email" class="col-md-4 col-lg-3 col-form-label">Typeof_Payment</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="typeof_payment" type="text" class="form-control" id="Email" value="{{$invoice->typeof_payment}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Order_id</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="order_id" type="number" class="form-control" id="Phone" value="{{$invoice->order_id}}">
                          </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
                  </div>
                  <!-- End Profile Edit Form -->

                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>

</main>

@endsection
