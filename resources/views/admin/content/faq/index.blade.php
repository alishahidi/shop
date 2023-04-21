<x-admin.layout.admin-layout title="پنل ادمین - سوالات متداول">
    <x-slot:tags>
        <x-admin.layout.table-tags />
    </x-slot:tags>
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش محتوی" />
        <x-admin.sections.breadcrumb-item active name="سوالات متداول" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="سوالات متداول" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.content.faq.create') }}" name="ساخت سوال جدید" />
            <hr class="my-2" />
            <div class="rounded mt-3">
                <table class="table grid-table display hover">
                    <thead>
                        <tr>
                            <th>شماره</th>
                            <th>پاسخ</th>
                            <th>خلاصه پاسخ</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>چگونه وارد سایت شویم؟</td>
                            <td>به بخش ثبت نام مراجعه کنید ...</td>
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