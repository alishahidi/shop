<x-admin.layout.admin-layout title="پنل ادمین - ساخت برند جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.showcase.brand.index') }}" name="برند ها" />
        <x-admin.sections.breadcrumb-item active name="ساخت برند جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت برند جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.brand.index') }}" name="بازگشت به برند ها" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="نام برند" name="category" placeholder="برند" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.file label="لگوی برند" name="brand_logo" placeholder="لوگو" />
                    </div>
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>