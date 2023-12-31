@extends('admin.dashboard')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Warehouse Page</h1>
            @include('common.alertmessage')
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
                            <ul class="nav nav-tabs nav-tabs-bordered row pb-3">
                                {{-- overview --}}
                                <li class="nav-item col-8">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Warehouse Overview</button>
                                </li>
                                <li class="col-4">
                                    <a href="{{ route('warehouse.create') }}" class="nav-link"><button class="btn btn-primary float-end">Add New Warehouse</button></a>
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
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Capacity</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @php
                                                        $count = 1;
                                                    @endphp --}}
                                                    @foreach ($warehouses as $item)
                                                        <tr>
                                                            <th scope="row">{{ $item->id }}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>{{ $item->capacity }}</td>
                                                            <td>
                                                            @if(Auth::user()->role ===  'admin')
                                                            <a href="{{ route('warehouse.edit', $item->id) }}" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a>
                                                            <a href="{{ route('warehouse.destroy', $item->id) }}"
                                                                onclick="event.preventDefault(); document.getElementById('warehouse-{{ $item->id }}').submit();"
                                                                title="Delete"><i class="bx bx-trash-alt me-1" style="font-size: 20px"></i></a>
                                                            @endif

                                                            <a href="{{ route('warehouse.show', $item->id) }}" title="View"><i class="bx bx-show-alt me-1" style="font-size: 20px"></i></a>
                                                            </td>
                                                            <form id="warehouse-{{ $item->id }}"
                                                                action="{{ route('warehouse.destroy',$item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
                                                        </tr>
                                                        {{-- @php $count++ @endphp --}}
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $warehouses->links() }}
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
