@section('title', 'Edit Article')
<!doctype html>
<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="{{ asset('../assets/assets/') }}"
  data-template="vertical-menu-template-free">
  @include('common.header')
  <style>
    .table-top-bar{
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .table-right{
      margin-right: 20px;
    }
    .options-wrap{
      display: flex;
      flex-direction: row;
      gap: 5px;
    }
    .options-wrap .options-btn{
      color: #fff;
      padding: 6px;
      font-size: 14px;
    }
    .options-wrap .options-btn1{
      background-color: #16b1ff;
    }
    .options-wrap .options-btn2{
      background-color: #ff4c51;
      border-radius: 0px;
      color: #fff !important;
    }
    .options-wrap .options-btn3{
      background-color: #8a8d93;
    }
    .options-btn i{
      vertical-align: text-top;
    }
  </style>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        @include('common.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="icon-base ri ri-menu-line icon-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
              <!-- Search -->
              <!-- <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="icon-base ri ri-search-line icon-lg lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div> -->
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- <li class="nav-item lh-1 me-4">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/materio-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li> -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('../assets/assets/img/avatars/1.png') }}" alt="alt" class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('../assets/assets/img/avatars/1.png') }}" alt="alt" class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">{{ ucwords(session('admin_name')) }}</h6>
                            <small class="text-body-secondary">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- <li>
                      <div class="dropdown-divider my-1"></div>
                    </li> -->
                    <!-- <li>
                      <a class="dropdown-item" href="">
                        <i class="icon-base ri ri-user-line icon-md me-3"></i>
                        <span>My Profile</span>
                      </a>
                    </li> -->
                    <!-- <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 icon-base ri ri-bank-card-line icon-md me-3"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                      </a>
                    </li> -->
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <div class="d-grid px-4 pt-2 pb-1">
                        <a class="btn btn-danger d-flex" href="{{ route('login') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                          <!-- <small class="align-middle">Logout</small> -->
                          <i class="ri ri-logout-box-r-line ms-2 ri-xs"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              @session('success')
                  <div class="alert alert-success alert-dismissible" role="alert">
                  {{ $value }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endsession
              <!-- Bootstrap Table with Header - Footer -->
              <div class="card col-8">
                <h5 class="card-header">Edit The Article</h5>
                <div class="card-body">
                    <form action="{{ route('articles.update', $article) }}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-floating form-floating-outline mb-6">
                        <input type="text" name="title" value="{{ $article->title }}" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                        <label for="basic-default-fullname">Title</label>
                        </div>
                        <div class="form-floating form-floating-outline mb-6">
                            <textarea
                                id="basic-default-message"
                                class="form-control"
                                name="content"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                                style="height: 60px">{{ $article->content }}</textarea>
                            <label for="basic-default-message">Content</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Article <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m10 15.17l9.192-9.191l1.414 1.414L10 17.999l-6.364-6.364l1.414-1.414z"/></svg></button>
                    </form>
                </div>
              </div>
              <!-- Bootstrap Table with Header - Footer -->

              <hr class="my-12" />
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    &#169;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="#" target="_blank" class="footer-link fw-medium"
                      >Manit Singh</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

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
