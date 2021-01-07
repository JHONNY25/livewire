<div class="w-96 p-10">
    <div class="w-full flex-1 mx-2 svelte-1l8159u">
        <div class="bg-white my-2 p-1 flex border border-gray-200 rounded svelte-1l8159u">
            <input wire:model="text" placeholder="Escribe algo .." class="p-1 px-2 appearance-none outline-none w-full text-gray-800"> </div>
    </div>
    {{ $text }}
    <div class="flex items-center ml-2">
        <button wire:click="count" class="bg-blue-500 text-white font-bold py-2 px-4 rounded border block">
            Contar
        </button>
        <div class="ml-5">{{ $count }}</div>
    </div>
</div>
