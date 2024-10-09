<div>
@if($this->consent === null)
<div class="nav fixed-bottom z-10">
    <div class="col-lg-6 col-12 mx-auto fixed bottom">
       <div class="custom-block custom-block-full animated fadeIn bg-white border border-3 z-10">
        <div class="d-flex justify-content-between">
            <h5 class="mx-auto">
                Koekje erbij?
                <i style="font-size: 40px;" class="icon-copy dw dw-cookie"></i>
                <br>
                Deze site maakt gebruik van cookies
            </h5>
            <button wire:model.live="consent" wire:click="getConsent"
            class="btn btn-outline-dark float-end h-50">
            Akkoord
            </button>
        </div>
       </div>
    </div>
</div>
@endif
</div>
