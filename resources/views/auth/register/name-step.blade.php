<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input wire:model="state.name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
</div>