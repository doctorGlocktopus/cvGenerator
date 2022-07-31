@extends('layouts.app')
@section('content')
<livewire:sign />
    <div>
        <div class="padding1pc banner flex spaceEven flexEnd">
            <span>richtigGutBewerben</span>

                <span onclick="gate('faq')" class="cursor  fontSize50pc">F.A.Q</span>
                <span onclick="gate('imprint')" class="cursor fontSize50pc">Impressum</span>

        </div>
        <div style="background: #faebd780;"class="flex collumD fade padding1pc wContent">
            <div onclick="window.open('https://www.github.com/doctorGlocktopus', '_blank')"
                 style="display: none" id="imprint">
                <img class="fade cursor" src="http://localhost/bewerbung/resources/gitHub.png">
            </div>
            <div class="fade padding1pc wContent" style="display: none; font-size: 180%; justify-content: space-around; align-items: center;" id="faq">
                <div class="flex columnD">
                    <span>Freeware</span>
                    <span>Clever4You</span>
                    <span>SaveTimeAndMoney</span>
                </div>
                <div class="flex columnD">
                    <span>Freeware</span>
                    <span>Clever4You</span>
                    <span>SaveTimeAndMoney</span>
                </div>
            </div>
        </div>
        @if(Auth::User())
            <livewire:list-view />
        @endif
    </div>
@endsection
<div class="blubb sdhw" style="display: none"></div>
<script>
    function gate(key) {
        // diese Kommtar sorgt für das Schließen des anderen gate
        // if(key == "faq")
        // {
        //     document.getElementById('imprint').style.display = "none";
        // }
        // if(key == 'imprint')
        // {
        //     document.getElementById("faq").style.display = "none";
        // }
        if(document.getElementById(key).style.display == "none")
        document.getElementById(key).style.display = "flex";
        else
        document.getElementById(key).style.display = "none";
    }
</script>




