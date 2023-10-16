@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Product Page</h1>
        @include('common.alertmessage')
        <nav>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><h3><a href="{{ route('dashboard') }}">dashboard</a></h3></li>
            <li class="breadcrumb-item"><h5><a href="{{ route('product.index') }}">back</a></h5></li>
          </ul>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
          {{-- overview --}}
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img src="assets_admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <h2>{{ $product->name }}</h2>
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
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Product Details</h5>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label ">Id</div>
                          <div class="col-lg-9 col-md-8">{{ $product->id }}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label ">Name</div>
                          <div class="col-lg-9 col-md-8">{{ $product->name }}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Short_description</div>
                          <div class="col-lg-9 col-md-8">{{$product->short_description}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">quantity</div>
                          <div class="col-lg-9 col-md-8">{{$product->quantity}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Price</div>
                          <div class="col-lg-9 col-md-8">{{$product->price}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">width</div>
                          <div class="col-lg-9 col-md-8">{{$product->width}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">weight</div>
                          <div class="col-lg-9 col-md-8">{{$product->weight}}</div>
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">height</div>
                          <div class="col-lg-9 col-md-8">{{$product->height}}</div>
                      </div>
                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">lenght</div>
                          <div class="col-lg-9 col-md-8">{{$product->lenght}}</div>
                      </div>
                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">User_id</div>
                          <div class="col-lg-9 col-md-8">{{$product->user_id}}</div>
                      </div>
                      <div class="row">
                          <div class="col-lg-3 col-md-4 label">Warehouse_id</div>
                          <div class="col-lg-9 col-md-8">{{$product->warehouse_id}}</div>
                      </div>
                  </div>

                  <!-- Profile Edit Form -->
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <form method="POST" action="{{ route('product.update', $product->id) }}">
                      @csrf
                      @if (isset($product))
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
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="name" type="text" class="form-control" id="fullName" value="{{ $product->name }}">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Email" class="col-md-4 col-lg-3 col-form-label">Short_Description</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="short_description" type="text" class="form-control" id="Email" value="{{$product->short_description}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Quantity</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="quantity" type="number" class="form-control" id="Phone" value="{{$product->quantity}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Price</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="price" type="number" class="form-control" id="Job" value="{{$product->price}}">
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Width</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="width" type="number" class="form-control" id="Job" value="{{$product->width}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Weight</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="weight" type="number" class="form-control" id="Job" value="{{$product->weight}}">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Height</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="height" type="number" class="form-control" id="Job" value="{{$product->height}}">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Lenght</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="lenght" type="number" class="form-control" id="Job" value="{{$product->lenght}}">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">User_id</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="user_id" type="number" class="form-control" id="Job" value="{{$product->user_id}}">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Warehouse_id</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="warehouse_id" type="number" class="form-control" id="Job" value="{{$product->warehouse_id}}">
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
