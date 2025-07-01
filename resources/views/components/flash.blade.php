
@props([

    'type' => 'success',
    'colors' => [
            'success' => 'bg-green-400 border-green-500',
            'error' => 'bg-red-400 border-red-400',
            'warning' => 'bg-orange-400 border-orange-500'
        ]
    ])

<section {{ $attributes->merge(['class' => "{$colors[$type]} border-b p-4"]) }}>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
    </div>
</section>