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


            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Employees Overview</button>
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
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Source_Address</th>
                                                <th scope="col">Destination_Address</th>
                                                <th scope="col">Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->source_address }}</td>
                                                    <td>{{ $item->destination_address }}</td>
                                                    <td>
                                                        <ul
                                                            class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-bs-placement="top"
                                                                class="avatar avatar-xs pull-up"
                                                                title="Lilian Fuller">
                                                                <img src="../assets_employe/img/avatars/5.png"
                                                                style="width: 40px" alt="Avatar"
                                                                class="rounded-circle" />
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
