<x-filament-panels::page.simple>
    <div class="w-full max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg">


        {{ $this->form }}

        <x-filament::button class="w-full mt-6" type="submit" form="login">
            Entrar
        </x-filament::button>
    </div>
</x-filament-panels::page.simple>
