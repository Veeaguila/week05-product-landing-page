@props([
    'icon',
    'title',
    'description',
])

<div
    class="group relative overflow-hidden rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:border-[#D8A94E]/50 hover:shadow-2xl"
>

    <!-- Decorative Glow -->
    <div
        class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-[#D8A94E]/10 blur-2xl transition duration-300 group-hover:bg-[#D8A94E]/20"
    ></div>


    <!-- Icon -->
    <div
        class="relative flex h-14 w-14 items-center justify-center rounded-xl border border-[#D8A94E]/30 bg-[#0B2E22] text-2xl shadow-inner transition duration-300 group-hover:border-[#D8A94E]/60 group-hover:bg-[#D8A94E]/10"
    >
        {{ $icon }}
    </div>


    <!-- Small Gold Line -->
    <div
        class="mt-6 h-1 w-10 rounded-full bg-[#D8A94E] transition-all duration-300 group-hover:w-16"
    ></div>


    <!-- Title -->
    <h3
        class="mt-5 font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
    >
        {{ $title }}
    </h3>


    <!-- Description -->
    <p
        class="mt-3 text-sm leading-7 text-[#F4EFE3]/65"
    >
        {{ $description }}
    </p>


    <!-- Bottom Detail -->
    <div class="mt-6 flex items-center gap-2">

        <span class="h-px w-6 bg-[#D8A94E]/40"></span>

        <span
            class="text-[10px] font-semibold uppercase tracking-[0.2em] text-[#D8A94E]/70"
        >
            Drip Kofi
        </span>

    </div>

</div>