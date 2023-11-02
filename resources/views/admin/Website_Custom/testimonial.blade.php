@extends('admin.dashboard')

@section('content')
<main class="mian" id="main">
    <div class="pagetitle">
        <h1>Testimonial Page</h1>
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
                action="{{ isset($testimonial) ? route('testimonial.update', $testimonial->id) : route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($testimonial))
                    @method('put')
                @endif
                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea name="description" class="form-control" id="floatingName" placeholder="Description">{{ isset($testimonial) ? $testimonial->description : old('description') }}</textarea>
                        <label for="floatingName">Description</label>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="file" name="photo" class="form-control" id="floatingName" value="{{ isset($testimonial) ? $testimonial->photo : old('photo') }}">
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
                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" value="{{ isset($testimonial) ? $testimonial->name : old('name') }}">
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
                        <input type="text" name="job" class="form-control" id="floatingName" placeholder="Your Job" value="{{ isset($testimonial) ? $testimonial->job : old('job') }}">
                        <label for="floatingName">Job</label>
                        @error('job')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn {{ isset($testimonial) ? "btn btn-success" : "btn btn-primary" }}">{{ isset($testimonial) ? "Update" : "Store" }}</button>
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
                        <th scope="col">Description</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Job</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($testimonials as $item)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item->description }}</td>
                            <td><img src="{{ $item->photo }}" alt="photo" style="width: 50px"></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->job }}</td>
                            <td class="d-flex">
                                <form action="{{ route('testimonial.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                                <a href="{{ route('testimonial.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
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
