<form {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-2', 'id' => 'user-form']) }}>
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

    <div class="col-span-6">
        <x-inputs.label for="login" required>Login</x-inputs-label>
            <x-inputs.input type="text" name="login" id="login" placeholder="joao.silva" />
            <p class="text-red-500 text-sm" id="login-error"></p>
    </div>

    <div class="col-span-6">
        <x-inputs.label for="password">Senha</x-inputs-label>
            <x-inputs.input type="password" name="password" id="password" placeholder="joao.silva" />
            <p class="text-red-500 text-sm" id="password-error"></p>
    </div>

    <div class="col-span-12">
        <h2 class="text-black dark:text-white text-lg">Módulos</h2>

        <hr class="text-gray-300" />
    </div>

    <x-cards.module class="col-span-6" name="usuarios" title="Usuários" icon="users-fill" />
    <x-cards.module class="col-span-6" name="hospedes" title="Hóspedes" icon="id-badge-fill" />
    <x-cards.module class="col-span-6" name="quartos" title="Quartos" icon="hotel-fill" />
    <x-cards.module class="col-span-6" name="financeiro" title="Financeiro" icon="money-bill-fill" />

    <div class="col-span-12 mt-2 flex">
        <x-buttons.indigo class="w-36 text-center text-sm ml-auto font-semibold"
            type="submit">Cadastrar</x-buttons.indigo-button>
    </div>
</form>
