<form {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-2']) }}>
    <input type="hidden" name="id" id="id" />
    @csrf

    <div class="col-span-12">
        <h2 class="text-black dark:text-white text-lg">Dados básicos</h2>

        <hr class="text-gray-300" />
    </div>

    <div class="col-span-5">
        <x-inputs.label for="nomePessoa" required>Nome</x-inputs-label>
            <x-inputs.input type="text" name="nomePessoa" id="nomePessoa" placeholder="João da Silva" />
            <p class="text-red-500 text-sm" id="nomePessoa-error"></p>
    </div>

    <div class="col-span-4">
        <x-inputs.label for="cpf_cnpj" required>CPF/CNPJ</x-inputs-label>
            <x-inputs.input type="text" name="cpf_cnpj" id="cpf_cnpj" placeholder="000.000.000-00" />
            <p class="text-red-500 text-sm" id="cpf_cnpj-error"></p>
    </div>

    <div class="col-span-3">
        <x-inputs.label for="dataNascimento" required>Data de nascimento</x-inputs-label>
            <x-inputs.input type="date" name="dataNascimento" id="dataNascimento" />
            <p class="text-red-500 text-sm" id="dataNascimento-error"></p>
    </div>

    <div class="col-span-12 mt-2 flex">
        <x-buttons.indigo class="w-36 text-center text-sm ml-auto font-semibold"
            type="submit">Cadastrar</x-buttons.indigo-button>
    </div>
</form>
