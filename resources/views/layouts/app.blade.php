<style>

        body {

            font-style: italic!important;
            font-family: monospace!important;
            padding: 1%;
            display: flex;
            justify-content: center;
            background-image: repeating-linear-gradient(45deg, #596f80 0%, #596f80 4%, #cfdce6 2%, #cfdce6 8%, white 2%);
        }

        .w33 {
            width: 33%;
        }

        main {
            background-color: #cfdce6;
            outline: auto;
            outline-style: auto;
        }

        .contentWrapper {
            width: 100%;
            padding: 5%;
        }

        .banner {
            font-size: 436%!important;
            padding: 20px;
            background: #6096bf;
            outline: auto;
            outline-style: auto;
        }

        .doc {
            background-color: lightblue;
            width: 21cm;
            height: 29.7cm;
            line-height: 1.5;
        }

        .docContainer {
            margin-top: 4.5cm;
            margin-left: 2.5cm;
            margin-right: 2cm;
            margin-bottom: 2.5cm;
        }

        .addressLine {
            height: 5.5cm;
            background-color:grey;
        }

        .address {
            width: 11cm;
        }

        .myAddress {
            background-color:red;
            text-align: end;
        }

        .flex {
            display: flex;
            flex-direction: column;
        }

        .spaceBetweeen {
            justify-content: space-between;
        }

        .date {
            width: 100%;
            background-color:green;
            text-align: end;
        }

        .letter {
            text-align: justify;
            background-color: blueviolet;
        }

        nav {
            position: fixed;
            background: white;
            left: 10;
            padding: 10;
            outline: auto;
            outline-style: auto;
            display: flex;
                    flex-direction: column;
                    line-height: 2;
        }

    </style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<body>
    <nav>
        @guest
            @if (Route::has('login'))
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <a href="/user/<?= Auth::user()->id; ?>">
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
            </a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <a href="/overview">Overview</a>

            <a href="/new">New File</a>

            <br>

            <a href="/print"><i class='fa fa-print'></i> Drucken</a>

            </div>

        @endguest

    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
