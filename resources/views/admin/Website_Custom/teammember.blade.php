@extends('admin.dashboard')

@section('content')
    <main class="main" id="main">
        <div class="pagetitle">
            <h1>Our Team Members Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <h5><a href="{{ route('dashboard') }}">back</a></h5>
                    </li>
                </ol>
            </nav>
        </div>

        <!-- Floating Labels Form -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Store your data here</h5>

                <form class="row g-3"
                    action="{{ isset($teammember) ? route('teammember.update', $teammember->id) : route('teammember.store') }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (isset($teammember))
                        @method('put')
                    @endif
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" name="photo" class="form-control" id="floatingName" value="{{ isset($teammember) ? $teammember->photo : old('photo') }}">
                            <label for="floatingName">Photo</label>
                            @error('photo')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" value="{{ isset($teammember) ? $teammember->name : old('name') }}">
                            <label for="floatingName">Name</label>
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="position" class="form-control" id="floatingName" placeholder="Your Position" value="{{ isset($teammember) ? $teammember->position : old('position') }}">
                            <label for="floatingName">Position</label>
                            @error('position')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn {{ isset($teammember) ? "btn btn-success" : "btn btn-primary" }}">{{ isset($teammember) ? "Update" : "Store" }}</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- Floating form end --}}

        <!-- Table with hoverable rows -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Table with hoverable rows</h5>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($teammembers as $item)
                            <tr>
                                <th scope="row">{{ $count }}</th>
                                <td><img src="{{ $item->photo }}" alt="photo" style="width: 50px"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->position }}</td>
                                <td class="d-flex">
                                    <form action="{{ route('teammember.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger rounded-pill">Delete</button>
                                    </form>
                                    <a href="{{ route('teammember.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
                                </td>
                            </tr>
                            @php
                                $count++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Table with hoverable rows -->
    </main>
@endsection
