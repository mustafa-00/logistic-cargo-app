@extends('admin.dashboard')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Order Page</h1>
        @include('common.alertmessage')
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
                        <ul class="nav nav-tabs nav-tabs-bordered pb-3">
                            {{-- overview --}}
                            <li class="nav-item col-8">
                                <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">OrderOverview</button>
                            </li>
                            <li class="nav-item col-4">
                                <a href="{{ route('customer.create') }}" class="nav-link"><button class="btn btn-primary float-end">Add New Order</button></a>
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
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Sour_Add</th>
                                                    <th scope="col">Dest_Add</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count = 1;
                                                @endphp
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <th scope="row">{{ $count }}</th>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ $item->date }}</td>
                                                        <td>{{ $item->source_address }}</td>
                                                        <td>{{ $item->destination_address }}</td>
                                                        <td>
                                                        @if(Auth::user()->role === 'admin')
                                                        <a href="{{ route('order.destroy',$item->id) }}"
                                                            onclick="event.preventDefault(); document.getElementById('order-{{ $item->id }}').submit();"
                                                            title="Delete"><i class="bx bx-trash-alt me-1"
                                                            style="font-size: 20px"></i></a>
                                                        @endif

                                                        <a href="{{ route('order.edit', $item->id) }}" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a>
                                                        <a href="{{ route('order.show', $item->customer_id) }}" title="View Invoice"><i class="bx bx-show-alt me-1" style="font-size: 20px"></i></a>
                                                        </td>
                                                        <form id="order-{{ $item->id }}"
                                                            action="{{ route('order.destroy',$item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </tr>
                                                @php
                                                    $count++;
                                                @endphp
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
