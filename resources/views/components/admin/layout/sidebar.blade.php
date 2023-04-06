<aside id="sidebar" class="sidebar bg-soft-dark">
    <div class="sidebar-container">
        <div class="sidebar-wrapper scroll-hide">
            <a href="{{ route('admin.home') }}" class="sidebar-link {{ active_class('admin', 'sidebar-link-active') }}">
                <i class="bi bi-house icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>خانه</span>
            </a>
            <div class="sidebar-part-title fw-bold">بخش فروش</div>
            <hr />
            <div class="sidebar-group-link {{ active_class('admin/market/showcase*', 'sidebar-group-link-active') }}">
                <div class="sidebar-dropdown-toggle">
                    <i class="bi bi-shop-window icon-position-fix-md ms-2 sidebar-icon"></i>
                    <span>ویترین</span>
                    <i class="bi bi-chevron-left icon-position-fix-md angle angle-drop-down"></i>
                </div>
                <div class="sidebar-dropdown">
                    <a href="{{ route('admin.market.showcase.category.index') }}" class="{{ active_class('admin/market/showcase/category*', 'sidebar-link-active') }}">دسته بندی</a>
                    <a href="{{ route('admin.market.showcase.property.index') }}" class="{{ active_class('admin/market/showcase/property*', 'sidebar-link-active') }}">فرم کالا</a>
                    <a href="{{ route('admin.market.showcase.brand.index') }}" class="{{ active_class('admin/market/showcase/brand*', 'sidebar-link-active') }}">برندها</a>
                    <a href="{{ route('admin.market.showcase.product.index') }}" class="{{ active_class('admin/market/showcase/product*', 'sidebar-link-active') }}">کالاها</a>
                    <a href="{{ route('admin.market.showcase.store.index') }}" class="{{ active_class('admin/market/showcase/store*', 'sidebar-link-active') }}">انبار</a>
                    <a href=" {{ route('admin.market.showcase.comment.index') }}" class="{{ active_class('admin/market/showcase/comment*', 'sidebar-link-active') }}">نظرات</a>
                </div>
            </div>
            <div class="sidebar-group-link {{ active_class('admin/market/payment*', 'sidebar-group-link-active') }}">
                <div class="sidebar-dropdown-toggle">
                    <i class="bi bi-credit-card icon-position-fix-md ms-2 sidebar-icon"></i>
                    <span>پرداخت ها</span>
                    <i class="bi bi-chevron-left icon-position-fix-md angle angle-drop-down"></i>
                </div>
                <div class="sidebar-dropdown">
                    <a href="{{ route('admin.market.payment.all') }}" class="{{ active_class('admin/market/payment/all*', 'sidebar-link-active') }}">تمام پرداخت ها</a>
                    <a href="{{ route('admin.market.payment.online.index') }}" class="{{ active_class('admin/market/payment/online*', 'sidebar-link-active') }}">پرداخت های آنلاین</a>
                    <a href="{{ route('admin.market.payment.offline.index') }}" class="{{ active_class('admin/market/payment/offline*', 'sidebar-link-active') }}">پرداخت های آفلاین</a>
                    <a href="{{ route('admin.market.payment.attendance.index') }}" class="{{ active_class('admin/market/payment/attendance*', 'sidebar-link-active') }}">پرداخت در محل</a>
                </div>
            </div>
            <div class="sidebar-group-link {{ active_class('admin/market/order*', 'sidebar-group-link-active') }}">
                <div class="sidebar-dropdown-toggle">
                    <i class="bi bi-bag icon-position-fix-md ms-2 sidebar-icon"></i>
                    <span>سفارشات</span>
                    <i class="bi bi-chevron-left icon-position-fix-md angle angle-drop-down"></i>
                </div>
                <div class="sidebar-dropdown">
                    <a href="{{ route('admin.market.order.all') }}" class="{{ active_class('admin/market/order/all*', 'sidebar-link-active') }}">تمام سفارشات</a>
                    <a href="{{ route('admin.market.order.new.index') }}" class="{{ active_class('admin/market/order/new*', 'sidebar-link-active') }}">جدید</a>
                    <a href="{{ route('admin.market.order.sending.index') }}" class="{{ active_class('admin/market/order/sending*', 'sidebar-link-active') }}">درحال ارسال</a>
                    <a href="{{ route('admin.market.order.unpaid.index') }}" class="{{ active_class('admin/market/order/unpaid*', 'sidebar-link-active') }}">پرداخت نشده</a>
                    <a href="{{ route('admin.market.order.canceled.index') }}" class="{{ active_class('admin/market/order/canceled*', 'sidebar-link-active') }}">باطل شده</a>
                    <a href="{{ route('admin.market.order.returned.index') }}" class="{{ active_class('admin/market/order/returned*', 'sidebar-link-active') }}">مرجوعی</a>
                </div>
            </div>
            <div class="sidebar-group-link {{ active_class('admin/market/discount*', 'sidebar-group-link-active') }}">
                <div class="sidebar-dropdown-toggle">
                    <i class="bi bi-bandaid icon-position-fix-md ms-2 sidebar-icon"></i>
                    <span>تخفیف ها</span>
                    <i class="bi bi-chevron-left icon-position-fix-md angle angle-drop-down"></i>
                </div>
                <div class="sidebar-dropdown">
                    <a href="{{ route('admin.market.discount.coupon.index') }}" class="{{ active_class('admin/market/discount/coupon*', 'sidebar-link-active') }}">کپن تخفیف</a>
                    <a href="{{ route('admin.market.discount.common.index') }}" class="{{ active_class('admin/market/discount/common*', 'sidebar-link-active') }}">تخفیف عمومی</a>
                    <a href="{{ route('admin.market.discount.special.index') }}" class="{{ active_class('admin/market/discount/special*', 'sidebar-link-active') }}">فروش شگفت انگیز</a>
                </div>
            </div>
            <a href="{{ route('admin.market.delivery.index') }}" class="sidebar-link {{ active_class('admin/market/delivery*', 'sidebar-link-active') }}">
                <i class="bi bi-truck icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>روش های ارسال</span>
            </a>
            <div class="sidebar-part-title fw-bold">بخش محتوی</div>
            <hr />
            <a href="{{ route('admin.content.category.index') }}" class="sidebar-link {{ active_class('admin/content/category*', 'sidebar-link-active') }}">
                <i class="bi bi-journal-bookmark icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>دسته بندی</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-book icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>پست ها</span>
            </a>
            <a href="{{ route('admin.content.comment.index') }}" class="sidebar-link {{ active_class('admin/content/comment*', 'sidebar-link-active') }}">>
                <i class="bi bi-chat-left-text icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>نظرات</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-menu-down icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>منو</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-question-square icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>سوالات متداول</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-grid-1x2-fill icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>صفحه ساز</span>
            </a>
            <div class="sidebar-part-title fw-bold">بخش کاربران</div>
            <hr />
            <a href="#" class="sidebar-link">
                <i class="bi bi-person-check icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>کاربران ادمین</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-people icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>مشتریان</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-key icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>سطوح دسترسی</span>
            </a>
            <div class="sidebar-part-title fw-bold">بخش تیکت ها</div>
            <hr />
            <a href="#" class="sidebar-link">
                <i class="bi bi-ticket icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>تیکت های جدید</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-ticket-detailed icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>تیکت های باز</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-ticket-fill icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>تیکت های بسته</span>
            </a>
            <div class="sidebar-part-title fw-bold">بخش اطلاع رسانی</div>
            <hr />
            <a href="#" class="sidebar-link">
                <i class="bi bi-envelope icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>اعلامیه ایمیلی</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="bi bi-chat-dots icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>اعلامیه پیامکی</span>
            </a>
            <div class="sidebar-part-title fw-bold">بخش تنظیمات</div>
            <hr />
            <a href="#" class="sidebar-link">
                <i class="bi bi-gear icon-position-fix-md ms-2 sidebar-icon"></i>
                <span>تنظیمات</span>
            </a>
        </div>
    </div>
</aside>