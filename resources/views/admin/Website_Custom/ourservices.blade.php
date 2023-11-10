@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Our Services Page</h1>
        @include('common.alertmessage')
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

            <form class="row g-3" action="{{ isset($ourservice) ? route('ourservices.update', $ourservice->id) : route('ourservices.store') }}" method="POST">
                @csrf
                @if (isset($ourservice))
                    @method('put')
                @endif
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="tittle" class="form-control" id="floatingName"
                            placeholder="Your Tittle" value="{{ isset($ourservice) ? $ourservice->tittle : old('tittle') }}">
                        <label for="floatingName">Tittle</label>
                        @error('tittle')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea  name="description" class="form-control" id="floatingButton"
                            placeholder="Your Description">{{ isset($ourservice) ? $ourservice->description : old('description') }}</textarea>
                        <label for="floatingButton">Description</label>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn {{ isset($ourservice) ? "btn-success" : "btn-primary" }}">{{ isset($ourservice) ?'UPDATE' : 'STORE'}}</button>
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
                        <th scope="col">Tittle</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($ourservices as $item)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item->tittle }}</td>
                            <td>{{ $item->description }}</td>
                            <td class="d-flex">
                                <form action="{{ route('ourservices.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                                <a href="{{ route('ourservices.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
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
