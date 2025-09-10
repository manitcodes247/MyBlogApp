@section('title', 'View Article')
<!doctype html>
<html lang="en"
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="{{ asset('../assets/assets/') }}"
  data-template="vertical-menu-template-free"> 
@include('common.header')   
  <body>
    <!-- Content -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h2 class="">View Article</h4>
            <h4 class="">{{ $article->title }}</h4>
            <div class="view-content">
                <p>
                    {{ $article->content }}
                </p>
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
