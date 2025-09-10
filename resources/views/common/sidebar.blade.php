<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-semibold ms-2">MY DASHBOARD</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="menu-toggle-icon d-xl-inline-block align-middle"></i>
    </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item active">
            <a href="{{ route('articles.index') }}" class="menu-link">
            <i class="menu-icon icon-base ri ri-bank-card-2-line"></i>
            <div data-i18n="Basic">Articles List</div>
            </a>
        </li>
        <li class="menu-item lastChild">
            <a href="{{ route('articles.create') }}" class="menu-link">
            <i class="menu-icon icon-base ri ri-bank-card-2-line"></i>
            <div data-i18n="Basic">Add Article</div>
            </a>
        </li>
    </ul>
</aside>