@extends('admin.dashboard')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Order Page</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><h5><a href="{{ route('dashboard') }}">back</a></h5></li>
          </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
            {{-- overview --}}

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            {{-- overview --}}
                            <li class="nav-item col-8">
                                <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                            </li>
                            <li class="nav-item col-4">
                                <a href="{{ route('order.create') }}" class="nav-link"><button class="btn btn-primary">Add New Order</button></a>
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
                                                    <th scope="col">SorurceAddress</th>
                                                    <th scope="col">DestinationAddress</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <th scope="row">{{ $item->id }}</th>
                                                        <td>{{ $item->source_address }}</td>
                                                        <td>{{ $item->destination_address }}</td>
                                                        <td>{{ $item->date }}</td>
                                                        <td>
                                                        {{-- <a href="" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a> --}}
                                                        <a href="" title="Delete"><i class="bx bx-trash-alt me-1" style="font-size: 20px"></i></a>
                                                        <a href="{{ route('order.show', $item->id) }}" title="View"><i class="bx bx-show-alt me-1" style="font-size: 20px"></i></a>
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
