@section('title', 'Login')
<!doctype html>
<html
  lang="en"
  class="layout-wide customizer-hide"
  data-assets-path="{{ asset('../assets/assets/') }}"
  data-template="vertical-menu-template-free">
  @include('common.header')
  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6 mx-4">
          <!-- Login -->
          <div class="card p-sm-7 p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="index.html" class="app-brand-link gap-3">
                <span class="app-brand-text demo text-heading fw-semibold">User Login</span>
              </a>
            </div>
            <!-- /Logo -->
            <div class="card-body mt-1">
              @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              @endif

              @if($errors->any())
                  <div class="alert alert-danger">
                      <ul class="mb-0">
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form id="formAuthentication" class="mb-5" action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-floating form-floating-outline mb-5 form-control-validation">
                  <input
                    type="text"
                    class="form-control @error('username') is-invalid @enderror"
                    id="username"
                    name="username"
                    placeholder="Username"
                    autofocus 
                    required
                    value="{{ old('username') }}" />
                  <label for="username">Username</label>
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="mb-5">
                  <div class="form-password-toggle form-control-validation">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password"
                          class="form-control @error('password') is-invalid @enderror"
                          name="password"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password" 
                          required
                          value="{{ old('password') }}" />
                        <label for="password">Password</label>
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <span class="input-group-text cursor-pointer"
                        ><i class="icon-base ri ri-eye-off-line icon-20px"></i
                      ></span>
                    </div>
                  </div>
                </div>
                <div class="mb-5">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>

              <p class="text-center mb-5">
                <span>Need to register?</span>
                <a href="{{ route('register') }}">
                  <span>Create an account</span>
                </a><br>
              </p>
            </div>
          </div>
          <!-- /Login -->
          <img
            src="{{ asset('../assets/assets/img/illustrations/tree-3.png') }}"
            alt="auth-tree"
            class="authentication-image-object-left d-none d-lg-block" />
          <img
            src="{{ asset('../assets/assets/img/illustrations/auth-basic-mask-light.png') }}"
            class="authentication-image d-none d-lg-block scaleX-n1-rtl"
            height="172"
            alt="triangle-bg" />
          <img
            src="{{ asset('../assets/assets/img/illustrations/tree.png') }}"
            alt="auth-tree"
            class="authentication-image-object-right d-none d-lg-block" />
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/item/materio-dashboard-pro-bootstrap/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    @include('common.footer')
  </body>
</html>
