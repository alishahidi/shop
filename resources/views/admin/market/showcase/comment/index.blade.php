<x-admin.layout.admin-layout title="پنل ادمین - نظرات">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item active name="نظرات" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="نظرات" />
        <div class="body-content">
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>کد کاربر</th>
                            <th>نویسنده</th>
                            <th>کد کالا</th>
                            <th>کالا</th>
                            <th>وضعیت</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2393</td>
                            <td>علی شهیدی</td>
                            <td>3942</td>
                            <td>system 76 laptop</td>
                            <td>تایید شده</td>
                            <td>
                                <x-admin.inputs.button-show href="{{ route('admin.market.showcase.comment.show', 1) }}" />
                                <x-admin.inputs.button-approved href="#" />
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