<x-admin.layout.admin-layout title="پنل ادمین - پرداخت های آنلاین">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="پرداخت ها" />
        <x-admin.sections.breadcrumb-item active name="پرداخت های آنلاین" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="پرداخت های آنلاین" />
        <div class="body-content">
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>کد تراکنش</th>
                            <th>بانک</th>
                            <th>پرداخت کننده</th>
                            <th>وضعیت پرداخت</th>
                            <th>نوع پرداخت</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>9898-29392</th>
                            <th>ملت</th>
                            <th>علی شهیدی</th>
                            <th>تایید شده</th>
                            <th>آنلاین</th>
                            <td>
                                <div class="d-flex flex-column justify-center gap-3">
                                    <div class="d-flex">
                                        <x-admin.inputs.button-show href="#" />
                                        <x-admin.inputs.button href="#" color="danger" name="باطل کردن" icon="bi bi-trash3" />
                                        <x-admin.inputs.button class="" href="#" color="secondary" name="برگرداندن" icon="bi bi-arrow-counterclockwise" />
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