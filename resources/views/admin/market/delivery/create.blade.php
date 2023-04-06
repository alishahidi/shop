<x-admin.layout.admin-layout title="پنل ادمین - ساخت روش ارسال جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.delivery.index') }}" name="روش ها ارسال" />
        <x-admin.sections.breadcrumb-item active name="ساخت روش ارسال جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت روش ارسال جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.delivery.index') }}" name="بازگشت به روش های ارسال" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <x-admin.inputs.input label="روش ارسال" name="category" placeholder="روش ارسال" />
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-admin.inputs.input label="هزینه ارسال" name="category" placeholder="هزینه ارسال" />
                    </div>
                    <div class="col-md-4 mb-3">
                        <x-admin.inputs.input label="زمان ارسال" name="category" placeholder="زمان ارسال" />
                    </div>
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>