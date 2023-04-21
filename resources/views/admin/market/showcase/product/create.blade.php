<x-admin.layout.admin-layout title="پنل ادمین - ساخت کالای جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.market.showcase.product.index') }}" name="کالا ها" />
        <x-admin.sections.breadcrumb-item active name="ساخت کالای جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت کالای جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.product.index') }}" name="بازگشت به کالا ها" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="نام کالا" name="category" placeholder="نام" />
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
                        <x-admin.inputs.select-object :values="$values" key="id" value="name" label="دسته کالا" name="cat_id" placeholder="انتخاب دسته کالا" />
                    </div>
                </div>
                <div class="row">
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
                        <x-admin.inputs.select-object :values="$values" key="id" value="name" label="فرم کالا" name="cat_id" placeholder="انتخاب فرم کالا" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.file label="تصویر کالا" name="brand_logo" placeholder="تصویر" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="وزن کالا" name="category" placeholder="وزن" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="قیمت کالا" name="category" placeholder="قیمت" />
                    </div>
                </div>
                <textarea name="editor" id="editor" rows="12" placeholder="say"></textarea>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>

<x-admin.layout.ckeditor-scripts />
<x-admin.layout.ckeditor-init name="#editor" />