@extends('admin.dashboard')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Employes Page</h1>
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
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                {{-- overview --}}
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Employes Overview</button>
                                </li>
                                <li class="col-4">
                                    <a href="{{ route('employe_overview.create') }}" class="nav-link"><button class="btn btn-primary">Add New Employee</button></a>
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
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $count = 1;
                                                    @endphp
                                                    @foreach ($employes as $item)
                                                        <tr>
                                                            <th scope="row">{{ $count }}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->role }}</td>
                                                            <td>
                                                                <ul
                                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                        data-bs-placement="top"
                                                                        class="avatar avatar-xs pull-up"
                                                                        title="{{ $item->name }}">
                                                                        <img src="{{ asset('images/users') }}/{{ $item->profile_photo_path }}"
                                                                        style="width: 35px" alt="Avatar"
                                                                        class="rounded-circle" />
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('employe_overview.destroy', $item->id) }}"
                                                                    onclick="event.preventDefault(); document.getElementById('User-{{ $item->id }}').submit();"
                                                                    title="Delete"><i class="bx bx-trash-alt me-1"
                                                                        style="font-size: 20px"></i></a>
                                                                <a href="{{ route('employe_overview.show', $item->id) }}"
                                                                    title="View"><i class="bx bx-show-alt me-1"
                                                                        style="font-size: 20px"></i></a>
                                                            </td>
                                                            <form id="User-{{ $item->id }}"
                                                                action="{{ route('employe_overview.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                            </form>
                                                        </tr>
                                                        @php $count++ @endphp
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
