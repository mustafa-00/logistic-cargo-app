@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Warehouse Page</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('warehouse.index') }}">back</a></li>
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
                <h2>{{ $order[0]->name }}</h2>
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



                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Order Details</h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Id</div>
                        <div class="col-lg-9 col-md-8">{{ $order[0]->id }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Name</div>
                        <div class="col-lg-9 col-md-8">{{ $order[0]->name }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Short_description</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->short_description}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">quantity</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->quantity}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">width</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->width}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">weight</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->weight}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">height</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->height}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">lenght</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->lenght}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">image</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->image}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Sour_Add</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->source_address}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Dest_Add</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->destination_address}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Date</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->date}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Price</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->price}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Status</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->status}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Zone_id</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->zone_id}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">User_id</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->user_id}}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Warehouse_id</div>
                        <div class="col-lg-9 col-md-8">{{$order[0]->warehouse_id}}</div>
                    </div>
                  </div>


                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
@endsection
