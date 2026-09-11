@props([
    'name' => '',
    'price' => '',
    'description' => '',
    'features' => [],
    'featured' => false,
])

<div
    class="relative flex flex-col overflow-hidden rounded-3xl border
    {{ $featured
        ? 'border-[#D8A94E] bg-[#0E3B2B] shadow-2xl shadow-[#0B2E22]/30'
        : 'border-[#D8A94E]/20 bg-[#F4EFE3]' }}
    p-7 transition duration-300 hover:-translate-y-1 hover:shadow-xl"
>

    @if($featured)
        <!-- Popular Badge -->
        <div class="absolute right-5 top-5 rounded-full bg-[#D8A94E] px-3 py-1.5">
            <span class="text-[10px] font-bold uppercase tracking-widest text-[#0B2E22]">
                Most Popular
            </span>
        </div>
    @endif


    <!-- Coffee Icon -->
    <div
        class="flex h-14 w-14 items-center justify-center rounded-2xl
        {{ $featured
            ? 'bg-[#0B2E22] border border-[#D8A94E]/30'
            : 'bg-[#0B2E22]' }}"
    >
        <span class="text-2xl">☕</span>
    </div>


    <!-- Plan Name -->
    <h3
        class="mt-6 font-['Instrument_Serif'] text-3xl italic
        {{ $featured ? 'text-[#F4EFE3]' : 'text-[#0B2E22]' }}"
    >
        {{ $name }}
    </h3>


    <!-- Description -->
    <p
        class="mt-3 min-h-[56px] text-sm leading-6
        {{ $featured ? 'text-[#F4EFE3]/60' : 'text-[#0B2E22]/60' }}"
    >
        {{ $description }}
    </p>


    <!-- Price -->
    <div class="mt-7 flex items-end gap-2">

        <span
            class="font-['Instrument_Serif'] text-5xl italic
            {{ $featured ? 'text-[#D8A94E]' : 'text-[#0B2E22]' }}"
        >
            {{ $price }}
        </span>

        <span
            class="mb-2 text-sm
            {{ $featured ? 'text-[#F4EFE3]/50' : 'text-[#0B2E22]/50' }}"
        >
            / bundle
        </span>

    </div>


    <!-- Gold Divider -->
    <div
        class="my-7 h-px
        {{ $featured ? 'bg-[#D8A94E]/30' : 'bg-[#0B2E22]/10' }}"
    ></div>


    <!-- Features -->
    <div class="flex-1">

        <p
            class="mb-4 text-xs font-bold uppercase tracking-[0.2em]
            {{ $featured ? 'text-[#D8A94E]' : 'text-[#A87924]' }}"
        >
            What's included
        </p>


        <ul class="space-y-4">

            @foreach($features as $feature)

                <li class="flex items-start gap-3">

                    <span
                        class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full
                        {{ $featured
                            ? 'bg-[#D8A94E] text-[#0B2E22]'
                            : 'bg-[#0B2E22] text-[#D8A94E]' }}"
                    >
                        ✓
                    </span>

                    <span
                        class="text-sm leading-6
                        {{ $featured ? 'text-[#F4EFE3]/75' : 'text-[#0B2E22]/70' }}"
                    >
                        {{ $feature }}
                    </span>

                </li>

            @endforeach

        </ul>

    </div>


    <!-- CTA -->
    <a
        href="#product"
        class="mt-8 block rounded-full px-6 py-3.5 text-center text-sm font-bold transition
        {{ $featured
            ? 'bg-[#D8A94E] text-[#0B2E22] hover:bg-[#E5BE68]'
            : 'border border-[#0B2E22]/20 bg-[#0B2E22] text-[#F4EFE3] hover:bg-[#123F30]' }}"
    >
        Choose {{ $name }}
    </a>


    <!-- Bottom Decoration -->
    <div class="mt-6 flex items-center justify-center gap-2">

        <span
            class="h-1 w-1 rounded-full
            {{ $featured ? 'bg-[#D8A94E]' : 'bg-[#A87924]' }}"
        ></span>

        <span
            class="h-px w-8
            {{ $featured ? 'bg-[#D8A94E]/30' : 'bg-[#0B2E22]/15' }}"
        ></span>

        <span
            class="font-['Instrument_Serif'] text-sm italic
            {{ $featured ? 'text-[#D8A94E]' : 'text-[#A87924]' }}"
        >
            Drip Kofi
        </span>

        <span
            class="h-px w-8
            {{ $featured ? 'bg-[#D8A94E]/30' : 'bg-[#0B2E22]/15' }}"
        ></span>

        <span
            class="h-1 w-1 rounded-full
            {{ $featured ? 'bg-[#D8A94E]' : 'bg-[#A87924]' }}"
        ></span>

    </div>

</div>