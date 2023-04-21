<x-admin.layout.admin-layout title="پنل ادمین - ساخت انباردسته بندی جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.showcase.store.index') }}" name="انبار" />
        <x-admin.sections.breadcrumb-item active name="ساخت انبار جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت انبار جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.category.index') }}" name="بازگشت به دسته بندی ها" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <x-admin.inputs.input label="نام تحویل گیرنده" name="category" placeholder="تحویل گیرنده" />
                    </div>
                    <div class="col-md-4 mb-3">

                        <x-admin.inputs.input label="نام تحویل دهنده" name="category" placeholder="تحویل دهنده" />
                    </div>
                    <div class="col-md-4 mb-3">

                        <x-admin.inputs.input label="تعداد" name="category" placeholder="تعداد" />
                    </div>
                </div>
                <x-admin.inputs.text label="توضیحات" name="comment" placeholder="توضیحات" rows="8" />
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>