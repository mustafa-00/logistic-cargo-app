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

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered row">
                            {{-- overview --}}
                            <li class="nav-item col-8">
                                <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <!-- Table with hoverable rows -->
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Short_Description</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Width</th>
                                                    <th scope="col">Weight</th>
                                                    <th scope="col">Height</th>
                                                    <th scope="col">Lenght</th>
                                                    <th scope="col">User_id</th>
                                                    <th scope="col">Warehouse_id</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($products)
                                                @foreach ($products as $product)
                                                <tr>
                                                    <th scope="row">{{ $product->id }}</th>
                                                    <td scope="row">{{ $product->name }}</td>
                                                    <td scope="row">{{ $product->short_description }}</td>
                                                    <td scope="row">{{ $product->quantity }}</td>
                                                    <td scope="row">{{ $product->price }}</td>
                                                    <td scope="row">{{ $product->width }}</td>
                                                    <td scope="row">{{ $product->weight }}</td>
                                                    <td scope="row">{{ $product->height }}</td>
                                                    <td scope="row">{{ $product->lenght }}</td>
                                                    <td scope="row">{{ $product->user_id }}</td>
                                                    <td scope="row">{{ $product->warehouse_id }}</td>
                                                    <td scope="row">
                                                    <a href="" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a>
                                                    <a href="" title="Delete"><i class="bx bx-trash-alt me-1" style="font-size: 20px"></i></a>
                                                    <a href="{{ route('warehouse.show', $product->id) }}" title="View"><i class="bx bx-show-alt me-1" style="font-size: 20px"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <h2>There is no product in this warehouse yet.</h2>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
