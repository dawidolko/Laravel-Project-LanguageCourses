@include('layouts.html')

@include('layouts.head', ['pageTitle' => 'languageCourses - 403'])
<head>
    <style>
        html, body {
            height: 100%; 
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; 
        }

        .container {
            flex: 1; 
            display: flex;
            flex-direction: column; 
            justify-content: center; 
        }

        .footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
@include('layouts.navbar')

<div class="container mt-5 mb-5">
    <div class="row mt-4 mb-4 text-center card">
        <h1 class="display-1 fw-bold">403</h1>
        <h2>
            @if (App::environment('local'))
                {{ $exception->getMessage() ?: 'Nie masz uprawnień do dostępu do tej strony.' }}
            @else
                Nie masz uprawnień do dostępu do tej strony.
            @endif
        </h2>
        <p>Jeśli uważasz, że to pomyłka, skontaktuj się z pomocą techniczną lub spróbuj <a href="{{ url('/') }}">wrócić na stronę główną</a>.</p>
    </div>
    @include('layouts.validation-error')
</div>

@include('layouts.footer', ['fixedBottom' => false])
<script>
    document.getElementById("navbar-user").remove();
</script>
</body>
</html>
