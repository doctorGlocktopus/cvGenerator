<head>
<style>

content {
    z-index: none;
}

a {
    width: 100%;

}

td:hover {
    background-color: #596f7f73;
}

a:hover {
    background-color: #596f7f73;
}

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

textarea {
    background-color: white; border: none; width:660px;font-family: Arial, Helvetica, sans-serif; font-size:1.0em; resize:none;"
}

.cursor {
    cursor: pointer;
}

.pTop1pc {
    padding-top: 1%;
}

.pTop5pc {
    padding-top: 5%;
}

.pTop10pc {
    padding-top: 10%;
}

.dekoBalken {
    background: #ff000021;
    position: absolute;
    height: 100%;
    width: 28%;
    right: 7%;
    top: 0;
}

.pTop20pc {
    padding-top: 20%;
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

.flexStart {
    align-items: flex-start;
}

.addressLineRight {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
}


body {

    font-style: italic!important;
    font-family: var(--bs-body-font-family);
    padding: 1%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-image: repeating-linear-gradient(45deg, #596f80 0%, #596f80 32%, #cfdce6 16%, #cfdce6 64%, white 16%);
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

.w55 {
    width: 55%;
}

.w88 {
    width: 88%
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

.w88pc {
    width: 88%
}

.wContent {
    width: -webkit-fill-available;
}

.banner {
    font-size: 500%!important;
    background: #6096bf;
    text-shadow: #cfdce6 2px 1px 2px;
    line-height: 1.2;

}

.doc {
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

.webContainer {
    z-index: -1;
    position: relative;
    font-style: initial;
    font-family: arial;
    padding-top: 5%;
    padding-left: 2.5cm;
    padding-right: 2cm;
    padding-bottom: 2.5cm;
    width: 21cm;
    background-color: white!important;
}

.relativ {
    position: relative;
}

.close {
    font-size: 150%;
    right: 1%;
    position: absolute;
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
    flex-direction: column !important;
}

.impUp {   
    filter: contrast(1.5);
}

.imgUp img {
    height: 300px;
    filter: contrast(1000%);
    filter: brightness(2);
}

.mask {
    clip-path: inset(10px 20px 30px 40px);
    overflow: hidden;
}

.rowD {
    flex-direction: row !important;
}

.padding1pc {
    padding: 1%;
}

.padding10pc {
    padding: 10%;
}

.spaceBetween {
    justify-content: space-between;
}

.spaceAround {
    justify-content: space-around;
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
    height: 5%;
    line-height: 2;
    margin-bottom: 1%;
    align-items: center;
}

.flexEnd {
    align-items: flex-end;
}

.textRight {
    text-align: right;
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

.modalBody {
    position: fixed;
    display: flex;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: #ffffffc2;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    overflow:scroll;
}

.fontSize50pc {
    font-size: 50%
}

#more {display: none;}


nav {
    z-index: 1;
}

.fontSize90pc {
    font-size: 90%;
}


.blubb {
    position: absolute;
    top: 57%;
width: 98%;
height: 40%;
--s: 25vmin;
--p: calc(var(--s) / 2);
--c1: pink;
--c2: dodgerblue;
--c3: white;
--bg: var(--c3);
--d: 4000ms;
--e: cubic-bezier(0.76, 0, 0.24, 1);

background-color: var(--bg);
background-image:
linear-gradient(45deg, var(--c1) 25%, transparent 25%),
linear-gradient(-45deg, var(--c1) 25%, transparent 25%),
linear-gradient(45deg, transparent 75%, var(--c2) 75%),
linear-gradient(-45deg, transparent 75%, var(--c2) 75%);
background-size: var(--s) var(--s);
background-position: 
calc(var(--p) *  1) calc(var(--p) *  0), 
calc(var(--p) * -1) calc(var(--p) *  1), 
calc(var(--p) *  1) calc(var(--p) * -1), 
calc(var(--p) * -1) calc(var(--p) *  0);
animation: 
color var(--d) var(--e) infinite,
position var(--d) var(--e) infinite;
}

@keyframes color {
0%, 25% {
--bg: var(--c3);
}
26%, 50% {
--bg: var(--c1);
}
51%, 75% {
--bg: var(--c3);
}
76%, 100% {
--bg: var(--c2);
}
}

@keyframes position {
0% {
background-position: 
  calc(var(--p) *  1) calc(var(--p) *  0), 
  calc(var(--p) * -1) calc(var(--p) *  1), 
  calc(var(--p) *  1) calc(var(--p) * -1), 
  calc(var(--p) * -1) calc(var(--p) *  0);
}
25% {
background-position: 
  calc(var(--p) *  1) calc(var(--p) *  4), 
  calc(var(--p) * -1) calc(var(--p) *  5), 
  calc(var(--p) *  1) calc(var(--p) *  3), 
  calc(var(--p) * -1) calc(var(--p) *  4);
}
50% {
background-position: 
  calc(var(--p) *  3) calc(var(--p) * 8), 
  calc(var(--p) * -3) calc(var(--p) * 9), 
  calc(var(--p) *  2) calc(var(--p) * 7), 
  calc(var(--p) * -2) calc(var(--p) * 8);
}
75% {
background-position: 
  calc(var(--p) *  3) calc(var(--p) * 12), 
  calc(var(--p) * -3) calc(var(--p) * 13), 
  calc(var(--p) *  2) calc(var(--p) * 11), 
  calc(var(--p) * -2) calc(var(--p) * 12);
}
100% {    
background-position: 
  calc(var(--p) *  5) calc(var(--p) * 16), 
  calc(var(--p) * -5) calc(var(--p) * 17), 
  calc(var(--p) *  5) calc(var(--p) * 15), 
  calc(var(--p) * -5) calc(var(--p) * 16);
}
}

@media (prefers-reduced-motion) {
.blubb {
animation: none;
}
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

            <a class="btn" href="/">
                Home
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <a class="btn" href="/new">Neues Anschreiben</a>

        @guest
            @if (Route::has('login'))
                    <a class="btn" href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif

            @if (Route::has('register'))
                    <a class="btn" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <a class="btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        @endguest

        @if(Auth::user())
            <livewire:modal :inputValue="'accountDelete'" :listId='Auth::user()->id'/>
        @endif
    </nav>




    <main class="shdw fade grey">
        @yield('content')
    </main>
</body>


</html>
