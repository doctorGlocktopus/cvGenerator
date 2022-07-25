<head>
<style>

    .grey {
        background-color: #cfdce6;
    }

    .white {
        background-color: #ffffff;
    }

    .fade {
        animation: fadeInAnimation ease 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
    }

    .shdw {
        outline: auto;
        outline-style: auto;
        box-shadow: 5px 5px 10px 0px;
    }

    .searchBar {
        /* position: fixed;
        top: 70%;
        left: 29.2%; */
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
        /* position: absolute;
        background: bisque;

        top: 0;
        left: 0; */
        height: -webkit-fill-available;
        width: -webkit-fill-available;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
    }


    body {

        font-style: italic!important;
        font-family: monospace!important;
        padding: 1%;
        display: flex;
        justify-content: center;
        flex-direction: column;
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
        height: fit-content;
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

    .spaceEven {
        justify-content: space-evenly;
    }

    nav {
        padding: 10;
        line-height: 2;
        margin-bottom: 1%;
    }

    .myModal {
        position: relative;
        padding: 10;
        line-height: 2;
        margin-bottom: 3%;
        font-style: initial;
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
        /* position: fixed;
        left: 10;
        top: 22%;
        width: 28%; */
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
    <nav class="shdw fade white flex spaceEven">
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

            <a href="/print"><i class='fa fa-print'></i> Drucken</a>

            @if(Auth::user())
                <a onclick="alert('wir löschen deine Daten unwiederuflich!')"style="position: absolute; right: 1%;" href="/delete/{{Auth::user()->id}}" class="btn btn-primary">Account löschen?</a>
            @endif
        @endguest
    </nav>

    <main class="shdw fade grey">
        @yield('content')
    </main>
</body>


</html>
