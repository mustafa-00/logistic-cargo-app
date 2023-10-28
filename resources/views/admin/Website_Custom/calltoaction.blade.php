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

                <form class="row g-3" action="{{ route('calltoaction.store') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="tittle" class="form-control" id="floatingName"
                                placeholder="Your Tittle">
                            <label for="floatingName">Tittle</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="button" class="form-control" id="floatingButton"
                                placeholder="Your Button">
                            <label for="floatingButton">Button</label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td>Designer</td>
                            <td>
                                <button class="btn btn-danger rounded-pill">Delete</button>
                                <button class="btn btn-success rounded-pill">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Table with hoverable rows -->

    </main>
@endsection
