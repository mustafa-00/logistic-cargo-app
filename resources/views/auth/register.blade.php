@extends('layouts.guest')

@section('content')

<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>

                <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="col-12">
                    <label for="yourName" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" id="yourName" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" id="yourEmail" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">phone</label>
                    <input type="number" name="phone" class="form-control" id="yourEmail" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">DoB</label>
                    <input type="date" name="DoB" class="form-control" id="yourEmail" value="{{ old('DoB') }}">
                    @error('DoB')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourEmail" class="form-label">zone_id</label>
                    <input type="text" name="zone_id" class="form-control" id="yourEmail" value="{{ old('zone_id') }}">
                    @error('zone_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" value="{{ old('password') }}">
                    @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" id="yourPassword">
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms">
                      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                      <div class="invalid-feedback">You must agree before submitting.</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                  </div>
                  <div class="col-12">
                    <a href="/" class="btn btn-outline-primary w-100" >Cancel</a>
                </div>
                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                  </div>
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
@endsection
