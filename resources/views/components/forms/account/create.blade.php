<form {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-2', 'id' => 'create-form']) }}>
    @csrf

    <div class="col-span-12">
        <h2 class="text-black dark:text-white text-lg">Dados básicos</h2>

        <hr class="text-gray-300 dark:text-zinc-700" />
    </div>

    <div class="col-span-5">
        <x-inputs.label for="nomeConta" required>Nome</x-inputs-label>
            <x-inputs.input type="text" name="nomeConta" id="nomeConta" placeholder="Conta 1" required />
            <p class="text-red-500 text-sm" id="nomeConta-error"></p>
    </div>

    <div class="col-span-4">
        <x-inputs.label for="nomeBanco" required>Banco</x-inputs-label>
            <x-inputs.input type="text" name="nomeBanco" id="nomeBanco" placeholder="Credicitrus" required />
            <p class="text-red-500 text-sm" id="nomeBanco-error"></p>
    </div>

    <div class="col-span-3">
        <x-inputs.label for="valorInicial">Valor inicial</x-inputs-label>
            <x-inputs.input type="text" name="valorInicial" id="valorInicial" placeholder="R$ 0,00" />
            <p class="text-red-500 text-sm" id="valorInicial-error"></p>
    </div>

    <div class="col-span-12 mt-2 flex">
        <x-buttons.indigo type="submit"
            class="w-36 text-center text-sm ml-auto font-semibold">Cadastrar</x-buttons.indigo-button>
    </div>
</form>
