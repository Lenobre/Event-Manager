<nav class="@container/sidebar transition-all duration-700 bg-gray-50 dark:bg-zinc-900 border-r border-gray-300 dark:border-zinc-700 top-0 h-screen fixed py-4 px-2 w-64 flex flex-col gap-2"
    id="sidebar">
    <h1 class="font-bold text-4xl text-center textblack dark:text-white mb-4">LOGO</h1>

    <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.index') }}">
        <x-icons.home-fill class="mr-2 transition-colors duration-150 w-5" />

        <span class="@max-[100px]/sidebar:hidden">
            Home
        </span>
    </x-sidebar.link>

    @if (isset($modules['usuarios']))
        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.users.index') }}">
            <x-icons.users-fill class="mr-2 transition-colors duration-150 w-5" />

            <span class="@max-[100px]/sidebar:hidden">
                Usuários
            </span>
        </x-sidebar.link>
    @endif

    @if (isset($modules['hospedes']))
        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.guests.index') }}">
            <x-icons.id-badge-fill class="mr-2 transition-colors duration-150 w-5" />

            <span class="@max-[100px]/sidebar:hidden">
                Hóspedes
            </span>
        </x-sidebar.link>
    @endif

    @if (isset($modules['quartos']))
        <x-sidebar.menu title="Quartos" icon="hotel-fill">
            <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.bedrooms.index') }}">
                <x-icons.list-fill class="mr-2 transition-colors duration-150 w-5" />

                <span class="@max-[100px]/sidebar:hidden">
                    Listar
                </span>
            </x-sidebar.link>

            <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.bedrooms.services.index') }}">
                <x-icons.bell-conciege-fill class="mr-2 transition-colors duration-150 w-5" />

                <span class="@max-[100px]/sidebar:hidden">
                    Serviços
                </span>
            </x-sidebar.link>
        </x-sidebar.menu>
    @endif

    @if (isset($modules['financeiro']))
        <x-sidebar.menu title="Financeiro" icon="money-bill-fill">
            <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.finance.movement') }}">
                <x-icons.money-bill-wave-fill class="mr-2 transition-colors duration-150 w-5" />

                Movimentações
            </x-sidebar.link>

            <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.finance.account') }}">
                <x-icons.credit-card-fill class="mr-2 transition-colors duration-150 w-5" />

                Contas
            </x-sidebar.link>
        </x-sidebar.menu>
    @endif

    @if (isset($modules['Estoque']))
        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.storage.index') }}">
            <x-icons.box-fill class="mr-2 transition-colors duration-150 w-5" />

            <span class="@max-[100px]/sidebar:hidden">
                Estoque
            </span>
        </x-sidebar.link>
    @endif

    @if (isset($modules['vendas']))
        <x-sidebar.link class="hover:text-indigo-500" href="{{ route('dashboard.sale.index') }}">
            <x-icons.shopping-cart-fill class="mr-2 transition-colors duration-150 w-5" />

            <span class="@max-[100px]/sidebar:hidden">
                Venda
            </span>
        </x-sidebar.link>
    @endif

    <x-sidebar.link class="mt-auto hover:text-indigo-500" href="{{ route('dashboard.index') }}">
        <x-icons.gear-fill class="mr-2 transition-colors duration-150 w-5" />

        <span class="@max-[100px]/sidebar:hidden">
            Configurações
        </span>
    </x-sidebar.link>
</nav>
