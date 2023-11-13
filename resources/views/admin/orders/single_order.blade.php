@extends('admin.dashboard')

@section('content')
    <main class="main" id="main">
        <div class="pagetitle">
            <h1>Single Order Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('order.index') }}">back</a></li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">
                {{-- order overview start --}}
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('images/orders') }}/{{ $order->image }}" alt="Profile"
                                class="rounded-circle">
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
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Order Overview</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                {{-- Order over view start --}}
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Order Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Id</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->id }}</div>
                                    </div>

                                    <div class="row">
                                        <label for="profileImage" class="col-lg-3 col-md-4 label">Product Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="{{ asset('images/orders') }}/{{ $order->image }}" width="90px"
                                                height="100px" alt="Profile" class="rounded-circle" style="margin: 10px">
                                            {{-- <input type="file" class="form-control" name="image" id="image" accept="image/*"> --}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Short_description</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->short_description }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">quantity</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->quantity }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">width</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->width }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">weight</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->weight }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">height</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->height }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">lenght</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->lenght }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Source_Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->source_address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Destination_Address</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->destination_address }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Date</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->date }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Price</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->price }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Payment Status</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->status }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Zone_id</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->zone_id }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">User_id</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->user_id }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Warehouse_id</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->warehouse_id }}</div>
                                    </div>
                                </div>
                                {{-- Order over view End --}}
                            </div>
                            <!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </main>
@endsection
