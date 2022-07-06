<style>
    body {

        font-style: italic!important;
        font-family: monospace!important;
        padding: 1%;
        display: flex;
        justify-content: center;

        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;

        background-image: repeating-linear-gradient(45deg, #596f80 0%, #596f80 4%, #cfdce6 2%, #cfdce6 8%, white 2%);
    }

    .link {
        cursor: pointer;
    }

    .inLineFlex {
        display: inline-flex;
    }

    .w33 {
        width: 33%;
    }

    .templateHeader {
        color: wheat;
        background: #596f80;
        padding: 1%;
        font-size: 150%;
        /* width: fit-content; */
    }

    main {
        background-color: #cfdce6;
        outline: auto;
        outline-style: auto;
        box-shadow: 5px 5px 10px 0px;
        height: fit-content;
    }

    .contentWrapper {
        width: 100%;
        padding: 5%;
    }

    .banner {
        font-family: papyrus;
        font-size: 473%!important;
        padding: 20px;
        background: #6096bf;
        outline: auto;
        outline-style: auto;
        box-shadow: 5px 5px 10px 0px;
    }

    .doc {
        background-color: lightblue;
        line-height: 1.5;
    }

    .docContainer {
        font-style: initial;
        font-family: arial;
        padding-top: 4.5cm;
        padding-left: 2.5cm;
        padding-right: 2cm;
        padding-bottom: 2.5cm;
        width: 21cm;
        height: 29.7cm;
        background-color: white!important;
    }

    .addressLine {
        height: 5.5cm;
    }

    .address {
        width: 11cm;
    }

    .myAddress {
        text-align: end;
    }

    .flex {
        display: flex;
    }

    .columnD {
        flex-direction: column;
    }

    .padding10pc {
        padding: 10%;
    }

    .minW800 {
        min-width: 800px;
    }

    .spaceBetweeen {
        justify-content: space-between;
    }

    .date {
        width: 100%;
        text-align: end;
    }

    .letter {
        text-align: justify;
    }

    nav {
        position: fixed;
        background: white;
        left: 10;
        padding: 10;
        outline: auto;
        outline-style: auto;
        box-shadow: 5px 5px 10px 0px;
        line-height: 2;
    }

    .myModal {
        position: absolute;
        background: white;
        left: 10;
        padding: 10;
        outline: auto;
        outline-style: auto;
        box-shadow: 5px 5px 10px 0px;
        line-height: 2;
        width: 28%;
        top: 22%;
    }
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<body>
    <nav class="flex columnD">
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
