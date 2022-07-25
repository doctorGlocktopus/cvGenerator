<head>
<style>

    .searchBar {
        position: fixed;
        top: 1%;
    }

    textarea {
        background-color: white; border: none; width:660px;font-family: Arial, Helvetica, sans-serif; font-size:1.0em; resize:none;"
    }

    .cursor {
        cursor: pointer;
    }

    .pTop1pc {
        padding-top: 1%;
    }

    #modal {
        position: absolute;
        background: bisque;
        height: -webkit-fill-available;
        width: -webkit-fill-available;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        animation: fadeInAnimation ease 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
    }


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

    .w100 {
        width: 100%;
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

        animation: fadeInAnimation ease 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
    }

    .contentWrapper {
        width: 100%;
        padding: 5%;
    }

    .banner {
        font-family: papyrus;
        font-size: 600%!important;
        padding: 20px;
        background: #6096bf;
        text-shadow: #cfdce6 2px 1px 2px;
        line-height: 1.2;
        width: 100%;
        height: 100%;
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

    .rowD {
        flex-direction: row !important;
    }

    .padding10pc {
        padding: 10%;
    }

    .minW800 {
        min-width: 800px;
        width: 0;
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
        z-index: 10;
        width: 28%;
        margin-bottom: 1%;
    }

    .myModal {
        position: relative;
        background: white;
        padding: 10;
        outline: auto;
        outline-style: auto;
        box-shadow: 5px 5px 10px 0px;
        line-height: 2;
        margin-bottom: 3%;
        font-style: initial;



            animation: fadeInAnimation ease 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
    }

        @keyframes fadeInAnimation {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }

    .myModal > label {
        text-decoration: underline;
    }

    .modalContainer {
        position: fixed;
        left: 10;
        top: 22%;
        width: 28%;
    }

</style>

    <meta charset="utf-8">

</head>
{{-- fontawesome --}}
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
{{-- bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


@livewireScripts
@livewireStyles
@stack('scripts')



<title>richtigGutBewerben</title>


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
            <a href="/">
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

            @if(Auth::user())
                <a onclick="alert('wir löschen deine Daten unwiederuflich!')"style="position: absolute; right: 1%;" href="/delete/{{Auth::user()->id}}" class="btn btn-primary">Account löschen?</a>
            @endif
        @endguest
    </nav>

    <main>
        @yield('content')
    </main>
</body>


</html>
