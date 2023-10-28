@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Invoice Page</h1>
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
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            {{-- overview --}}
                            <li class="nav-item col-8">
                                <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Invoice Overview</button>
                            </li>
                            <li class="nav-item col-4">
                                <a href="{{ route('invoice.create') }}" class="nav-link"><button class="btn btn-primary">Add New Invoice</button></a>
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
                                                    <th scope="col">Payment_Status</th>
                                                    <th scope="col">Typeof_Payment</th>
                                                    <th scope="col">Order_id</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count = 1;
                                                @endphp
                                                @foreach ($invoices as $item)
                                                    <tr>
                                                        <th scope="row">{{ $count }}</th>
                                                        <td>{{ $item->payment_status }}</td>
                                                        <td>{{ $item->typeof_payment }}</td>
                                                        <td>{{ $item->order_id }}</td>
                                                        <td>
                                                        {{-- <a href="" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a> --}}
                                                        <a href="{{ route('invoice.destroy', $item->id) }}"
                                                            onclick="event.preventDefault(); document.getElementById('invoice-{{ $item->id }}').submit();"
                                                            title="Delete"><i class="bx bx-trash-alt me-1"
                                                            style="font-size: 20px"></i></a>
                                                        <a href="{{ route('invoice.show', $item->id) }}"
                                                            title="View"><i class="bx bx-show-alt me-1"
                                                            style="font-size: 20px"></i></a>
                                                        </td>
                                                        <form id="invoice-{{ $item->id }}"
                                                            action="{{ route('invoice.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </tr>
                                                @php
                                                    $count++
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
