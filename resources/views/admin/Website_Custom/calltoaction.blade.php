@extends('admin.dashboard')

@section('content')
    <main class="main" id="main">
        <div class="pagetitle">
            <h1>Call To Action Page</h1>
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

                <form class="row g-3" action="{{ isset($calltoaction) ? route('calltoaction.update', $calltoaction->id) : route('calltoaction.store') }}" method="POST">
                    @csrf
                    @if (isset($calltoaction))
                        @method('put')
                    @endif
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="tittle" class="form-control" id="floatingName"
                                placeholder="Your Tittle" value="{{ isset($calltoaction) ? $calltoaction->tittle : old('tittle') }}">
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
                            <input type="text" name="button" class="form-control" id="floatingButton"
                                placeholder="Your Button" value="{{ isset($calltoaction) ? $calltoaction->button : old('button') }}">
                            <label for="floatingButton">Button</label>
                            @error('button')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn {{ isset($calltoaction) ? "btn-success" : "btn-primary" }}">{{ isset($calltoaction) ?'UPDATE' : 'STORE'}}</button>
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
                            <th scope="col">Id</th>
                            <th scope="col">Tittle</th>
                            <th scope="col">Button</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                        @endphp
                        @foreach ($calltoactions as $item)
                            <tr>
                                <th scope="row">{{ $count }}</th>
                                <td>{{ $item->tittle }}</td>
                                <td>{{ $item->button }}</td>
                                <td class="d-flex">
                                    <form action="{{ route('calltoaction.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger rounded-pill">Delete</button>
                                    </form>
                                    <a href="{{ route('calltoaction.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
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
