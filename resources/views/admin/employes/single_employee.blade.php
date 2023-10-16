@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Single Employes Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <h5><a href="{{ route('employe_overview.index') }}">back</a></h5>
                </li>
            </ol>
        </nav>
    </div>


<section class="section profile">
    <div class="row">
      {{-- overview --}}
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets_admin/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>{{ $employee->name }}</h2>
            <h3>{{$employee->role}}</h3>
            <div class="social-links mt-2">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Name</div>
                      <div class="col-lg-9 col-md-8">{{ $employee->name }}</div>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{$employee->email}}</div>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8">{{$employee->phone}}</div>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label">DoB</div>
                      <div class="col-lg-9 col-md-8">{{$employee->DoB}}</div>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label">role</div>
                      <div class="col-lg-9 col-md-8">{{$employee->role}}</div>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label">zone_id</div>
                      <div class="col-lg-9 col-md-8">{{$employee->zone_id}}</div>
                  </div>
              </div>

              <!-- Profile Edit Form -->
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <form method="POST" action="{{ route('profile.update', $employee->id) }}">
                  @csrf
                  @if (isset($employee))
                      @method('put')
                  @endif
                  {{-- <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <img src="assets/img/profile-img.jpg" alt="Profile">
                      <input type="file" class="form-control" id="image" accept="image/*">
                    </div>
                  </div> --}}

                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="name" type="text" class="form-control" id="fullName" value="{{ $employee->name }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{$employee->email}}">
                      </div>
                  </div>

                  <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="number" class="form-control" id="Phone" value="{{$employee->phone}}">
                      </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">DoB</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="DoB" type="date" class="form-control" id="Job" value="{{$employee->DoB}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="role" type="text" class="form-control" id="Job" value="{{$employee->role}}">
                      </div>
                  </div>

                  <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">zone_id</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="zone_id" type="text" class="form-control" id="Job" value="{{$employee->zone_id}}">
                      </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
              </div>
              <!-- End Profile Edit Form -->

              <!-- Change Password Form -->
              <div class="tab-pane fade pt-3" id="profile-change-password">
                <form method="POST" action="{{ route('change', $employee->id) }}">
                  @csrf
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>
                <!-- End Change Password Form -->
              </div>
            </div>
            <!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  </main>

@endsection
