<x-admin.layout.admin-layout title="پنل ادمین - ساخت فرم کالا جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.showcase.property.index') }}" name="فرم کالا" />
        <x-admin.sections.breadcrumb-item active name="ساخت فرم کالا جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت دسته بندی جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.category.index') }}" name="بازگشت به دسته بندی ها" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="نام دسته بندی" name="category" placeholder="دسته بندی" />
                    </div>
                    <div class="col-md-6 mb-3">
                        @php
                        $values = [
                        (object) ['id' => 1,
                        'name' => 'ali'
                        ],
                        (object) ['id' => 2,
                        'name' => 'ali 2'
                        ],
                        ];
                        @endphp
                        <x-admin.inputs.select-object :values="$values" key="id" value="name" label="دسته بندی والد" name="cat_id" placeholder="انتخاب دسته والد" />
                    </div>
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>