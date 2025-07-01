<div x-data="{ open: false }" @click.away="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>
    <div class="absolute z-20 bg-white rounded shadow-md py-2 mt-1 w-40" 
    x-show="open"
    x-transition:enter="transition duration-5000"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition duration-5000"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    
    >
        {{ $slot }}
    </div>
    <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
</div>

