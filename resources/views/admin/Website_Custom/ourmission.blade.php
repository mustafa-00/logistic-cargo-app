@extends('admin.dashboard')

@section('content')
<main id="main" id="main">
    <div class="pagetitle">
        <h1>Our Mission Page</h1>
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

            <form class="row g-3" action="{{ isset($ourmission) ? route('ourmission.update', $ourmission->id) : route('ourmission.store') }}" method="POST">
                @csrf
                @if (isset($ourmission))
                    @method('put')
                @endif
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="tittle" class="form-control" id="floatingName"
                            placeholder="Your Tittle" value="{{ isset($ourmission) ? $ourmission->tittle : null }}">
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
                        <input type="text" name="subtittle" class="form-control" id="floatingName"
                            placeholder="Your Subtittle" value="{{ isset($ourmission) ? $ourmission->subtittle : null }}">
                        <label for="floatingName">SubTittle</label>
                        @error('subtittle')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea  name="description" class="form-control" id="floatingButton"
                            placeholder="Your Description">{{ isset($ourmission) ? $ourmission->description : null }}</textarea>
                        <label for="floatingButton">Description</label>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="secondsubtittle" class="form-control" id="floatingName"
                            placeholder="Your Secondsubtittle" value="{{ isset($ourmission) ? $ourmission->secondsubtittle : null }}">
                        <label for="floatingName">Second Subtittle</label>
                        @error('secondsubtittle')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <textarea  name="seconddescription" class="form-control" id="floatingButton"
                            placeholder="Your SecondDescription">{{ isset($ourmission) ? $ourmission->seconddescription : null }}</textarea>
                        <label for="floatingButton">Second Description</label>
                        @error('seconddescription')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="button" class="form-control" id="floatingName"
                            placeholder="Your button" value="{{ isset($ourmission) ? $ourmission->button : null }}">
                        <label for="floatingName">Button</label>
                        @error('button')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn {{ isset($ourmission) ? "btn-success" : "btn-primary" }}">{{ isset($ourmission) ?'UPDATE' : 'STORE'}}</button>
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
                    @foreach ($ourmissions as $item)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item->tittle }}</td>
                            <td>{{ $item->subtittle }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->secondsubtittle }}</td>
                            <td>{{ $item->seconddescription }}</td>
                            <td class="d-flex">
                                <form action="{{ route('ourmission.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                                <a href="{{ route('ourmission.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
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
