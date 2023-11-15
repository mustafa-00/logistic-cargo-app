@extends('admin.dashboard')

@section('content')
    <main class="main" id="main">
        <div class="pagetitle">
            <h1>Edit Order Page</h1>
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

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Order Edit</button>
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
                                        <div class="col-lg-3 col-md-4 label">Zone</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->zone->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Employee Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->user->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Warehouse</div>
                                        <div class="col-lg-9 col-md-8">{{ $order->warehouse->name }}</div>
                                    </div>
                                </div>
                                {{-- Order over view End --}}

                                <!-- Order Edit Form -->
                                <div class="tab-pane pt-3" id="profile-edit">

                                    <form method="POST" action="{{ route('order.update', $order->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <label for="profileImage" class="col-lg-3 col-md-4 label">Product Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img width="90px"
                                                    src="{{ asset('images/orders') }}/{{ $order->image }}"
                                                    alt="Profile" class="rounded-circle" style="margin: 10px">
                                                <input type="file" class="form-control" name="image" id="image"
                                                    accept="image/*">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="fullName"
                                                    value="{{ $order->name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Short_Description</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="short_description" type="text" class="form-control"
                                                    id="fullName" value="{{ $order->short_description }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Quantity</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="quantity" type="number" class="form-control"
                                                    id="fullName" value="{{ $order->quantity }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Price</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="price" type="number" class="form-control" id="fullName"
                                                    value="{{ $order->price }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Width</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="width" type="number" class="form-control" id="fullName"
                                                    value="{{ $order->width }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Weight</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="weight" type="number" class="form-control" id="fullName"
                                                    value="{{ $order->weight }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Height</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="height" type="number" class="form-control" id="fullName"
                                                    value="{{ $order->height }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Lenght</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="lenght" type="number" class="form-control" id="fullName"
                                                    value="{{ $order->lenght }}">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Source_Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="source_address" type="text" class="form-control"
                                                    id="fullName" value="{{ $order->source_address }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email"
                                                class="col-md-4 col-lg-3 col-form-label">Destination_Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="destination_address" type="text" class="form-control"
                                                    id="Email" value="{{ $order->destination_address }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Date</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="date" type="date" class="form-control" id="Phone"
                                                    value="{{ $order->date }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Price</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="price" type="number" class="form-control" id="Job"
                                                    value="{{ $order->price }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job"
                                                class="col-md-4 col-lg-3 col-form-label">Zone_id</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="zone_id" id="zone" class="form-control">
                                                    <option value="{{ $order->zone_id }}">{{ $order->zone->name }}</option>
                                                    @foreach ($zones as $zone)
                                                        <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Job"
                                                class="col-md-4 col-lg-3 col-form-label">User</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="user_id" type="text" readonly class="form-control"
                                                    id="Job" value="{{ $order->user->name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName"
                                                class="col-md-4 col-lg-3 col-form-label">Warehouse_id</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="warehouse_id" id="zone" class="form-control">
                                                    <option value="{{ $order->warehouse_id }}">{{ $order->warehouse->name }}</option>
                                                    @foreach ($warehouses as $warehouse)
                                                        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End order Edit Form -->



                            </div>
                            <!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
@endsection
