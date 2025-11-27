<x-filament-panels::auth.login>
    <x-slot name="heading"></x-slot>
    <x-slot name="subheading"></x-slot>

    <x-filament::card>
        <div class="min-h-[60vh] flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 p-6 md:p-12">
                <div class="mx-auto max-w-md">
                    {{ $this->form }}
                </div>
            </div>
        </div>
    </x-filament::card>
</x-filament-panels::auth.login>
