<x-admin.layout.admin-layout title="پنل ادمین - انبار">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش فروش" />
        <x-admin.sections.breadcrumb-item href="#" name="ویترین" />
        <x-admin.sections.breadcrumb-item active name="انبار" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="انبار" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.store.create') }}" name="ساخت انبار جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>نام کالا</th>
                            <th>تصویر کالا</th>
                            <th>موجودی</th>
                            <th>ورودی انبار</th>
                            <th>خروجی انبار</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>system76 laptop</td>
                            <td><img width="80" src="https://images.prismic.io/system76/78be3a98-d5dd-4f85-ab15-ac1b32947a48_lemp-hero.png?auto=compress,format" alt="system76 laptop" /></td>
                            <td>100</td>
                            <td>23</td>
                            <td>22</td>
                            <td>
                                <x-admin.inputs.button href="#" color="info" name="افزایش موجودی" icon="bi bi-arrow-up" />
                                <x-admin.inputs.button href="#" color="warning" name="اصلاح موجودی" icon="bi bi-arrow-down" />
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