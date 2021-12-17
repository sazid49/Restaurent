<div class="container">
  <h1>Action Component</h1>
  <p style="font-size:35px">{{ $counter }}</p>
  {{-- <p style="font-size:35px">{{ $hydreat }}</p> --}}
  <p><input type="text" wire:model.lazy="step"  wire:keydown.arrow-up="incriment"
     wire:keydown.arrow-down="dicrement"></p>
  <button wire:click="dicrement">-</button> | <button wire:click="incriment">+</button>
</div>
