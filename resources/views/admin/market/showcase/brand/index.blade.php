<x-admin.layout.admin-layout title="پنل ادمین - برند ها">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item active name="برند ها" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="برند ها" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.brand.create') }}" name="ساخت برند جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>نام برند</th>
                            <th>لوگو برند</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ستریکال</td>
                            <td><img width="70" src="https://laravel.com/img/favicon/apple-touch-icon.png" alt="test" /></td>
                            <td>
                                <x-admin.inputs.button-edit href="#" />
                                <x-admin.inputs.button-delete href="#" />
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