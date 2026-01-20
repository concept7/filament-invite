<x-filament-panels::page.simple>

@unless($expired)
 <form class="grid gap-y-6" wire:submit="submit">
    {{ $this->form }}

    <x-filament::actions
        :actions="$this->getCachedFormActions()"
        :full-width="$this->hasFullWidthFormActions()"
    />
</form>
@else
<p>{{ __('Invite link is expired.') }}</p>
@endunless

</x-filament-panels::page.simple>

