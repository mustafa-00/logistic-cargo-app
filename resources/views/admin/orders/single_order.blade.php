@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Order Page</h1>
        @include('common.alertmessage')
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('order.index') }}">back</a></li>
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
                <h2>{{ $order->name }}</h2>
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
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Products</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Product Details</h5>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label ">Id</div>
                          <div class="col-lg-9 col-md-8">{{ $order->id }}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label ">Source_Address</div>
                          <div class="col-lg-9 col-md-8">{{ $order->source_address }}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Destination_Address</div>
                          <div class="col-lg-9 col-md-8">{{$order->destination_address}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Date</div>
                          <div class="col-lg-9 col-md-8">{{$order->date}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Price</div>
                          <div class="col-lg-9 col-md-8">{{$order->price}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Status</div>
                          <div class="col-lg-9 col-md-8">{{$order->status}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Product_id</div>
                          <div class="col-lg-9 col-md-8">{{$order->product_id}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Zone_id</div>
                          <div class="col-lg-9 col-md-8">{{$order->zone_id}}</div>
                      </div>
                  </div>

                  <!-- Profile Edit Form -->
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <form method="POST" action="{{ route('order.update', $order->id) }}">
                      @csrf
                      @if (isset($order))
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
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Source_Address</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="source_address" type="text" class="form-control" id="fullName" value="{{ $order->source_address }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Email" class="col-md-4 col-lg-3 col-form-label">Destination_Address</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="destination_address" type="text" class="form-control" id="Email" value="{{$order->destination_address}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Date</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="date" type="date" class="form-control" id="Phone" value="{{$order->date}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Price</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="price" type="number" class="form-control" id="Job" value="{{$order->price}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Status</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="status" type="text" class="form-control" id="Job" value="{{$order->status}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Product_id</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="product_id" type="number" class="form-control" id="Job" value="{{$order->product_id}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Zone_id</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="zone_id" type="number" class="form-control" id="Job" value="{{$order->zone_id}}">
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
