@props(['title' => 'پنل ادمین'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{ asset('assets/admin/favicon.png') }}" />
    <title>{{ $title  }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @vite(['resources/js/app.js', 'resources/js/admin.js'])
    {{ $tags  }}
</head>

<body dir="rtl">
    <section class="app-bg"></section>
    <section class="app">
        <x-admin.layout.header></x-admin.layout.header>
        <section class="body-container d-flex">
            <x-admin.layout.sidebar></x-admin.layout.sidebar>
            <section id="main-body" class="main-body p-3">
                <div class="row">
                    <div class="col-12">
                        {{ $slot  }}
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    {{ $scripts }}
</body>

</html>