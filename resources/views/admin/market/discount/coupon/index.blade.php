<x-admin.layout.admin-layout title="پنل ادمین - کوپن های تخفیف">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="تخفیف ها" />
        <x-admin.sections.breadcrumb-item active name="کوپن های تخفیف" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="کوپن های تخفیف" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.discount.coupon.create') }}" name="ساخت کوپن تخفیف جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>کد کوپن</th>
                            <th>درصد تخفیف</th>
                            <th>سقف تخفیف</th>
                            <th>نوع کوپن</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>eyd2022</td>
                            <td>15%</td>
                            <td>۳۰۰,۰۰۰ تومان</td>
                            <td>عمومی</td>
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