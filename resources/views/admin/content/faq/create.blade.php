<x-admin.layout.admin-layout title="پنل ادمین - ساخت سوال جدید">
    <x-admin.sections.breadcrumb>
        <x-admin.sections.breadcrumb-item href="{{ route('admin.home')  }}" name="خانه" />
        <x-admin.sections.breadcrumb-item href="#" name="بخش محتوی" />
        <x-admin.sections.breadcrumb-item href="{{ route('admin.content.category.index') }}" name="سوالات متداول" />
        <x-admin.sections.breadcrumb-item active name="ساخت سوال جدید" />
    </x-admin.sections.breadcrumb>
    <div class="main-body-container">
        <x-admin.sections.header-title name="ساخت منو جدید" />
        <div class="body-content">
            <x-admin.sections.header-button href="{{ route('admin.market.showcase.category.index') }}" name="بازگشت به سوالات متداول" />
            <hr class="mt-2 mb-4" />
            <x-admin.forms.form href="#" method='post'>
                <div class="row">
                    <div class="col-12 mb-3">
                        <x-admin.inputs.input label="پرسش" name="question" placeholder="پرسش را وارد کنید" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <x-admin.inputs.text label="متن پاسخ" name="answer" placeholder="پاسخ" rows="8" />
                    </div>
                </div>
                <x-admin.inputs.submit name="ثبت" />
            </x-admin.forms.form>
        </div>
    </div>
</x-admin.layout.admin-layout>