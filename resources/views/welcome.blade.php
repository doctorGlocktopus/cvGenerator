

@extends('layouts.app')
@section('content')
    <div>
        <div class="padding1pc banner flex spaceEven flexEnd">
            <span>richtigGutBewerben</span>

                <span onclick="gate('contact')" class="cursor  fontSize50pc">Kontakt</span>
                <span onclick="gate('faq')" class="cursor fontSize50pc">FAQ</span>
                <span onclick="gate('imprint')" class="cursor fontSize50pc">Impressum</span>

        </div>
        <div class="padding1pc wContent">
            <div id="contact">
                contactInfo
            </div>
            <div id="faq">
                frage Antwort Kacka
            </div>
            <div id="imprint">
                mein Impressum
            </div>
            @if(Auth::User())
                <livewire:list-view />
            @endif
        </div>
    </div>
@endsection
<script>
    function gate(key) {
        if(document.getElementById(key).style.display == "none")
        document.getElementById(key).style.display = "block";
        else
        document.getElementById(key).style.display = "none";
    }
</script>




