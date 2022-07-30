<div>
    @if($inputValue == "listDelete")
        @if($gate == 0)
            <a scope="row" wire:click.prevent="gate(1)">
                <i class="fa fa-trash" aria-hidden="true"></i> dauerhaft löschen
            </a>
        @endif
        @if($gate == 1)
            <div wire:click="gate(0)" class="fade modalBody">
                <div>willst du die Bewerbung für den job als {{$content->job}} bei {{$content->company}} unwiederuflich</div>
                <button wire:click.prevent="delete({{$content->id}})" class="btn btn-danger">löschen?</button>
            </div>
        @endif
    @endif

    @if($inputValue == "accountDelete")
        <div style="width: max-content;" wire:click="gate(1)">
            <button class="btn">Account löschen</button>
        </div>
        @if($gate == 1)
            <div wire:click="gate(0)" class="fade modalBody">
                <div>willst du deinen Account unwiederuflich</div>
                <button wire:click="userDelete()" class="btn btn-danger">löschen?</button>
            </div>
        @endif
    @endif
</div>
