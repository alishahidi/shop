<x-admin.layout.admin-layout title="پنل ادمین - فروش شگفت انگیز">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="تخفیف ها" />
        <x-admin.sections.breadcrumb-item active name="فروش شگفت انگیز" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="فروش شگفت انگیز" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.discount.common.create') }}" name="ساخت تخفیف عمومی جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>کد کالا</th>
                            <th>نام کالا</th>
                            <th>درصد تخفیف</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>eyd2022</td>
                            <td>system76 laptop</td>
                            <td>15%</td>
                            <td>۱۲ بهمن ۱۴۰۱</td>
                            <td>۲۰ بهمن ۱۴۰۱</td>
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