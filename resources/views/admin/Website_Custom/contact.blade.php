@extends('admin.dashboard')

@section('content')
<main class="main" id="main">
    <div class="pagetitle">
        <h1>Contact Page</h1>
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

            <form class="row g-3" action="{{ isset($contact) ? route('contact.update', $contact->id) : route('contact.store') }}" method="POST">
                @csrf
                @if (isset($contact))
                    @method('put')
                @endif
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="city" class="form-control" id="floatingName"
                            placeholder="City" value="{{ isset($contact) ? $contact->city : old('city') }}">
                        <label for="floatingName">City</label>
                        @error('city')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="address" class="form-control" id="floatingName"
                            placeholder="Address" value="{{ isset($contact) ? $contact->address : old('address') }}">
                        <label for="floatingName">Address</label>
                        @error('address')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="number" name="phone" class="form-control" id="floatingName"
                            placeholder="Phone" value="{{ isset($contact) ? $contact->phone : old('phone') }}">
                        <label for="floatingName">Phone</label>
                        @error('phone')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="worktime" class="form-control" id="floatingName"
                            placeholder="Work Time" value="{{ isset($contact) ? $contact->worktime : old('worktime') }}">
                        <label for="floatingName">Work Time</label>
                        @error('worktime')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingName"
                            placeholder="Email" value="{{ isset($contact) ? $contact->email : old('contact') }}">
                        <label for="floatingName">Email</label>
                        @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="emailmessage" class="form-control" id="floatingName"
                            placeholder="Email Message" value="{{ isset($contact) ? $contact->emailmessage : old('emailmessage') }}">
                        <label for="floatingName">Email Message</label>
                        @error('emailmessage')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn {{ isset($contact) ? "btn-success" : "btn-primary" }}">{{ isset($contact) ?'UPDATE' : 'STORE'}}</button>
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
                        <th scope="col">City</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Worktime</th>
                        <th scope="col">Email</th>
                        <th scope="col">Emailmessage</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($contacts as $item)
                        <tr>
                            <th scope="row">{{ $count }}</th>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->worktime }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->emailmessage }}</td>
                            <td class="d-flex">
                                <form action="{{ route('contact.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                                <a href="{{ route('contact.edit', $item->id) }}"><button class="btn btn-success rounded-pill">Edit</button></a>
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
