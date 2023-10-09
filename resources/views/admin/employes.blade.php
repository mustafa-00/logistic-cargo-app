@extends('admin.dashboard')

@section('content')

<main id="main" class="main">
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
</main>
@endsection
