<x-admin.layout.admin-layout title="پنل ادمین - روش های ارسال">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item active name="روش های ارسال" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="روش های ارسال" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.delivery.create') }}" name="ساخت روش ارسال جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>روش ارسال</th>
                            <th>هزینه ارسال</th>
                            <th>زمان ارسال</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>پست</td>
                            <td>۱۲,۰۰۰ تومان</td>
                            <td>۴ تا ۵ روز کاری</td>
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