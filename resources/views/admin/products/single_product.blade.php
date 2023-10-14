@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Product Page</h1>
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
                        <li class="nav-item">
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
                                                <th scope="col">Photo</th>
                                                <th scope="col">quantity</th>
                                                <th scope="col">price</th>
                                                <th scope="col">width</th>
                                                <th scope="col">weight</th>
                                                <th scope="col">height</th>
                                                <th scope="col">lenght</th>
                                                <th scope="col">user_id</th>
                                                <th scope="col">warehouse_id</th>
                                                {{-- <th scope="col">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>clothes</td>
                                                    <td>winter clothes</td>
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
                                                    <td>1</td>
                                                    <td>200</td>
                                                    <td>100</td>
                                                    <td>50</td>
                                                    <td>50</td>
                                                    <td>50</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    {{-- <td>
                                                    <a href="" title="Edite"><i class="bx bx-edit-alt me-1" style="font-size: 20px"></i></a>
                                                    <a href="" title="Delete"><i class="bx bx-trash-alt me-1" style="font-size: 20px"></i></a>
                                                    <a href="" title="View"><i class="bx bx-show-alt me-1" style="font-size: 20px"></i></a>
                                                    </td> --}}
                                                </tr>
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
