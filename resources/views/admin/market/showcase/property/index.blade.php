<x-admin.layout.admin-layout title="پنل ادمین - فرم کالا">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item active name="فرم کالا" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="فرم کالا" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.category.create') }}" name="ساخت فرم کالا جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>نام دسته بندی</th>
                            <th>نام دسته بندی والد</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>بلدرچین</td>
                            <td>کبوتر</td>
                            <td>
                                <div class="d-flex flex-column justify-center gap-3">
                                    <div class="d-flex">
                                        <x-admin.inputs.button href="#" color="warning" name="ویژگی ها" icon="bi bi-trash3" />
                                        <x-admin.inputs.button-edit href="#" />
                                        <x-admin.inputs.button-delete href="#" />
                                    </div>
                                </div>
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