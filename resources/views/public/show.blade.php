@section('title', 'View Article')
<!doctype html>
<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="{{ asset('../assets/assets/') }}"
  data-template="vertical-menu-template-free">
@include('common.header')

<body>
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="container">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

          <h2 class="fw-bold mb-3">View Article</h2>

          <div class="card p-4 mb-3">
            <h4>{{ $article->title }}</h4>
            <div class="article-content mt-2">
              <p>{!! nl2br(e($article->content)) !!}</p>
            </div>
          </div>

          <a href="{{ route('public.articles.index') }}" class="btn btn-primary">
            Back to Articles
          </a>

        </div>
      </div>

      <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl">
          <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
              &#169;
              <script>document.write(new Date().getFullYear());</script>, made with ❤️ by
              <a href="#" target="_blank" class="footer-link fw-medium">Manit Singh</a>
            </div>
          </div>
        </div>
      </footer>

    </div>
  </div>
</div>

@include('common.footer')
</body>
</html>
