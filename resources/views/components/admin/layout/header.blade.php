<header class="header" id="header">
    <section class="sidebar-header bg-dark">
        <div class="d-flex justify-content-between flex-md-row-reverse px-3">
            <span id="sidebar-toggle-show" class="d-inline d-md-none"><i class="bi bi-toggle2-off c-pointer"></i></span>
            <span id="sidebar-toggle-hide" class="d-none d-md-inline"><i class="bi bi-toggle2-on c-pointer"></i></span>
            <h2 class="header-logo">پنل ادمین فروشگاه</h2>
            <span id="sidebar-menu-toggle" class="d-md-none"><i class="bi bi-three-dots c-pointer"></i></span>
        </div>
    </section>

    <section class="body-header d-md-block" id="body-header">
        <div class="d-flex justify-content-between">
            <x-admin.inputs.search-header></x-admin.inputs.search-header>
            <div>
                <x-admin.popups.notification></x-admin.popups.notification>
                <x-admin.popups.message></x-admin.popups.message>
                <x-admin.popups.user></x-admin.popups.user>
            </div>
        </div>
    </section>
</header>