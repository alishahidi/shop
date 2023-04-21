<x-admin.layout.admin-layout title="پنل ادمین - مشاهده نظر">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.showcase.comment.index') }}" name="نظرات" />
        <x-admin.sections.breadcrumb-item active name="مشاهده نظر" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="مشاهده نظر" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.comment.index') }}" name="بازگشت به نظرات" />
            <hr class="mt-2 mb-4" />
            <div class="alert alert-secondary pb-1 w-100">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <p>نویسنده:
                            <span class="fw-bold me-2">علی شهیدی</span>
                        </p>
                        <p>کد کاربر:
                            <span class="fw-bold me-2">1234</span>
                        </p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <p>کالا:
                            <span class="fw-bold me-2">system76 laptop</span>
                        </p>
                        <p>کد کالا:
                            <span class="fw-bold me-2">3234</span>
                        </p>
                    </div>
                    <div class="col-md-4 mb-2">
                        <p>وضعیت نظر:
                            <span class="fw-bold me-2">تایید نشده</span>
                        </p>
                        <p>تغییر وضعیت:
                            <x-admin.inputs.button-approved class="me-2" href="#" />
                        </p>
                    </div>
                </div>
            </div>
            <div class="alert alert-warning mb-4">
                پاسخ به نظر به منزله ی تایید نظر میباشد.
            </div>
            <x-admin.sections.header-title name="پاسخ ادمین" />
            <hr class="mt-4 mb-3" />
            <x-admin.forms.form href="#" method='post'>
                <div class="mb-3">
                    <x-admin.inputs.text label="متن نظر" name="comment" placeholder="پاسخ" rows="8" />
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>