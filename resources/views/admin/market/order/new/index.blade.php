<x-admin.layout.admin-layout title="پنل ادمین - سفارشات جدید">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="سفارشات" />
        <x-admin.sections.breadcrumb-item active name="سفارشات جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="سفارشات جدید" />
        <div class="body-content">
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>کد سفارش</th>
                            <th>مبلغ سفارش</th>
                            <th>مبلغ تخفیف</th>
                            <th>مبلغ نهایی</th>
                            <th>وضعیت پرداخت</th>
                            <th>شیوه پرداخت</th>
                            <th>بانک</th>
                            <th>وضعیت ارسال</th>
                            <th>شیوه ارسال</th>
                            <th>وضعیت سفارش</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>9898-29392</th>
                            <th>380,000 تومان</th>
                            <th>100,000 تومان</th>
                            <th>280,000 تومان</th>
                            <th><i class="ms-3 bi bi-credit-card-fill"></i>پرداخت شده</th>
                            <th>آنلاین</th>
                            <th>ملت</th>
                            <th><i class="ms-3 bi bi-clock"></i>درحال ارسال</th>
                            <th>پیک موتوری</th>
                            <th>درحال ارسال</th>
                            <td>
                                <x-admin.inputs.button-dropdown name="عملیات" icon="bi bi-tools">
                                    <x-admin.inputs.button-dropdown-item href="#" name="مشاهده فاکتور" icon="bi bi-file-earmark-text" />
                                    <x-admin.inputs.button-dropdown-item href="#" name="تعییر وضعیت ارسال" icon="bi bi-arrow-repeat" />
                                    <x-admin.inputs.button-dropdown-item href="#" name="تغییر وضعیت سفارش" icon="bi bi-arrow-repeat" />
                                    <x-admin.inputs.button-dropdown-item href="#" name="باطل کردن سفارش" icon="bi bi-trash3" />
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