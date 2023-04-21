<x-admin.layout.admin-layout title="پنل ادمین - ساخت منو جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش محتوی" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.content.menu.index') }}" name="منو ها" />
        <x-admin.sections.breadcrumb-item active name="ساخت منو جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت منو جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.content.menu.index') }}" name="بازگشت به منو ها" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="نام منو" name="menu" placeholder="منو" />
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
                        <x-admin.inputs.select-object :values="$values" key="id" value="name" label="منو والد" name="cat_id" placeholder="انتخاب دسته والد" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.input label="لینک منو" name="category" placeholder="لینک" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <x-admin.inputs.file label="تصویر" name="brand_logo" placeholder="تصویر" />
                    </div>
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>