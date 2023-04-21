<x-admin.layout.admin-layout title="پنل ادمین - کوپن های تخفیف">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.delivery.index') }}" name="کوپن های تخفیف" />
        <x-admin.sections.breadcrumb-item active name="ساخت کوپن تخفیف جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت کوپن تخفیف جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.discount.common.index') }}" name="بازگشت به کوپن های تخفیف" />
            <hr class="mt-2 mb-4" />
            <div class="alert alert-warning mb-4">
                در صورت وارد نکردن کد کوپن، کد بصورت خودکار ساخته خواهد شد.
            </div>
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="کد کوپن" name="category" placeholder="کد کوپن" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.select label="نوع کوپن" name="c" placeholder="انتخاب نوع کوپن">
                            <x-admin.inputs.select-item key="public" value="عمومی" />
                            <x-admin.inputs.select-item key="private" value="خصوصی" />
                        </x-admin.inputs.select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="درصد تخفیف" name="category" placeholder="درصد تخفیف" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="حداکثر تخفیف" name="category" placeholder="حداکثر تخفیف" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="تاریخ شروع" name="category" placeholder="تاریخ شروع" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="تاریخ پایان" name="category" placeholder="تاریخ پایان" />
                    </div>
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>