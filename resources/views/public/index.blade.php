@section('title', 'Articles List')
<!doctype html>
<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="{{ asset('../assets/assets/') }}"
  data-template="vertical-menu-template-free">
@include('common.header')

<style>
.article-table a {
    color: #16b1ff;
    text-decoration: none;
    font-weight: 500;
}
.article-table a:hover {
    text-decoration: underline;
}
</style>

<body>
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <div class="container">
      <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold">Articles List</h4>

            @if(!session()->has('admin_id'))
                <a href="{{ route('login') }}" class="btn btn-primary">Admin Login</a>
            @endif
        </div>

          <div class="card">
            <div class="table-responsive text-nowrap article-table">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($articles as $article)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <a href="{{ route('public.articles.show', $article->id) }}">
                          {{ $article->title }}
                        </a>
                      </td>
                      <td>{{ ucfirst(\Illuminate\Support\Str::limit(strip_tags($article->content), 20)) }}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Content</th>
                  </tr>
                </tfoot>
              </table>
              {{ $articles->links() }}
            </div>
          </div>

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
