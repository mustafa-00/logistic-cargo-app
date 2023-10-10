@extends('admin.dashboard')

@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Employes Page</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><h5><a href="{{ route('dashboard') }}">back</a></h5></li>
          </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
          {{-- overview --}}

          <div class="col-xl-8">
            <div class="card">
              <div class="card-body pt-3">
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
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
                                        <th scope="col">photo</th>
                                        <th scope="col">action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">{{ $employes[0]->id }}</th>
                                        <td>{{ $employes[0]->name }}</td>
                                        <td><ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Lilian Fuller">
                                            <img src="../assets_employe/img/avatars/5.png" style="width: 40px" alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>
                                        </td>
                                        <td><button class="btn btn-info">view</button></td>
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

      <section>
          <div class="card">
              <div class="card-body">
                <h5 class="card-title">Table with hoverable rows</h5>

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">phone</th>
                      <th scope="col">DoB</th>
                      <th scope="col">role</th>
                      <th scope="col">zone_id</th>
                      <th scope="col">photo</th>
                      <th scope="col">joined</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">{{ $employes[0]->id }}</th>
                      <td>{{ $employes[0]->name }}</td>
                      <td>{{ $employes[0]->email }}</td>
                      <td>{{ $employes[0]->phone }}</td>
                      <td>{{ $employes[0]->DoB }}</td>
                      <td>{{ $employes[0]->role }}</td>
                      <td>{{ $employes[0]->zone_id }}</td>
                      <td><ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Lilian Fuller">
                            <img src="../assets_employe/img/avatars/5.png" style="width: 40px" alt="Avatar" class="rounded-circle" />
                          </li>
                        </ul>
                      </td>
                      <td>{{ $employes[0]->created_at }}</td>
                      <td><button class="btn btn-danger">Delete</button></td>
                      <td><button class="btn btn-primary">Edit</button></td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with hoverable rows -->
              </div>
          </div>
      </section>
</main>
@endsection
