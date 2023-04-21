<script type="text/javascript">
    const persian = {
        language: {
            decimal: "",
            emptyTable: "داده ای وجود ندارد.",
            info: "مشاهده _START_ تا _END_ از _TOTAL_ داده",
            infoEmpty: "مشاهده 0 تا 0 از 0 داده",
            infoFiltered: "(filtered from _MAX_ total entries)",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "نمایش _MENU_ داده",
            loadingRecords: "در حال بارگزاری...",
            processing: "در حال انجام عملیات...",
            search: "جستجو: ",
            zeroRecords: "داده ای پیدا نشد.",
            paginate: {
                first: "اول",
                last: "آخر",
                next: "بعدی",
                previous: "قبلی",
            },
            aria: {
                sortAscending: ": مرتب از کم به زیاد",
                sortDescending: ": مرتب از زیاد به کم",
            },
        },
    }
    const configs = {
        responsive: true,
        fixedColumns: true,
        scrollX: true
    }
    let table = new DataTable('{{ $name }}', {
        ...configs,
        ...persian,
    });
</script>