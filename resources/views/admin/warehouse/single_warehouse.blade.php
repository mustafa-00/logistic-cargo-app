@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Warehouse Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <h5><a href="{{ route('dashboard') }}">back</a></h5>
                </li>
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
                            <li class="col-4">
                                <a href="{{ route('warehouse.create') }}" class="nav-link"><button class="btn btn-primary">Add New Warehouse</button></a>
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
                                                    <th scope="col"></th>
                                                    <th scope="col">Capacity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($warehouses as $item)
                                                    <tr>
                                                        <th scope="row">{{ $item->id }}</th>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->capacity }}</td>
                                                        <td>
                                                        <a href="{{ route('employe_overview.update', $item->id) }}" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a>
                                                        <a href="" title="Delete"><i class="bx bx-trash-alt me-1" style="font-size: 20px"></i></a>
                                                        <a href="{{ route('employe_overview.show', $item->id) }}" title="View"><i class="bx bx-show-alt me-1" style="font-size: 20px"></i></a>
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
        </div>
    </section>
</main>
@endsection
