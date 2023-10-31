@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>About Us Page</h1>
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

            <form class="row g-3" action="{{ isset($aboutus) ? route('aboutus.update', $aboutus->id) : route('aboutus.store') }}" method="POST">
                @csrf
                @if (isset($aboutus))
                    @method('put')
                @endif

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="subtittle" class="form-control" id="floatingButton"
                            placeholder="Your Button" value="{{ isset($aboutus) ? $aboutus->subtittle : null }}">
                        <label for="floatingButton">Subtittle</label>
                        @error('subtittle')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Address" id="floatingTextarea" value="{{ isset($aboutus) ? $aboutus->description : null }}" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Description</label>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn {{ isset($aboutus) ? "btn-success" : "btn-primary" }}">{{ isset($aboutus) ?'UPDATE' : 'STORE'}}</button>
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
                        <th scope="col">Subtittle</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($aboutuses as $item)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item->subtittle }}</td>
                            <td>{{ $item->description }}</td>
                            <td class="d-flex">
                                <form action="{{ route('aboutus.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                                <a href="{{ route('aboutus.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
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
