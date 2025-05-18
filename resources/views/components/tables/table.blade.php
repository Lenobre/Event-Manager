<table {{ $attributes->merge(['class' => 'w-full border-collapse rounded-lg overflow-hidden shadow-md']) }}>
    <thead id="header"
        class="bg-white dark:bg-zinc-800 dark:text-white border-b border-b-gray-300 dark:border-b-zinc-700 text-left text-gray-900">
        <x-dynamic-component :component="$headerComponent" />
    </thead>

    <template id="row-template">
        <x-dynamic-component :component="$rowComponent" />
    </template>

    <template id="empty-template">
        <tr>
            <td colspan="100%" class="text-center py-4">
                Nenhum registro encontrado.
            </td>
        </tr>
    </template>

    <tbody id="body"
        class="divide-y divide-gray-300 dark:divide-zinc-700 bg-white dark:bg-zinc-800 text-gray-700 dark:text-white text-sm">
    </tbody>
</table>
