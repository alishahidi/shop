<x-admin.layout.admin-layout title="پنل ادمین - کالاها">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item active name="کالاها" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="کالاها" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.product.create') }}" name="ساخت کالای جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>نام کالا</th>
                            <th>تصویر کالا</th>
                            <th>قیمت</th>
                            <th>وزن</th>
                            <th>دسته</th>
                            <th>فرم</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>system76 patop</th>
                            <th><img width="80" src="https://images.unsplash.com/photo-1660914337259-d6938248dd30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="test" /></th>
                            <th>1230 $</th>
                            <th>3 KG</th>
                            <th>کالای الکترونیک</th>
                            <th>لپ تاپ</th>
                            <td>
                                <x-admin.inputs.button-dropdown name="عملیات" icon="bi bi-tools">
                                    <x-admin.inputs.button-dropdown-item href="#" name="گالری" icon="bi bi-images" />
                                    <x-admin.inputs.button-dropdown-item href="#" name="فرم کالا" icon="bi bi-info-circle" />
                                    <x-admin.inputs.button-dropdown-item href="#" name="ویرایش" icon="bi bi-pencil" />
                                    <x-admin.inputs.button-dropdown-item href="#" name="حذف" icon="bi bi-trash3" />
                                </x-admin.inputs.button-dropdown>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-slot:scripts>
        <x-admin.layout.table-scripts />
        <x-admin.layout.table-init name=".grid-table" />
    </x-slot:scripts>
</x-admin.layout.admin-layout>