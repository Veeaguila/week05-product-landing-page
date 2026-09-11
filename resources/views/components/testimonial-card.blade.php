@props([
'name',
'role',
'message',
'initials',
])

<div class="rounded-2xl border border-stone-200 bg-white p-6 shadow-sm">

<!-- Rating -->
<div class="text-lg text-amber-600">
    ★★★★★
</div>

<!-- Review -->
<p class="mt-4 leading-7 text-stone-600">
    "{{ $message }}"
</p>

<!-- Customer -->
<div class="mt-6 flex items-center gap-4">

    <div class="flex h-12 w-12 items-center justify-center rounded-full bg-stone-900 font-bold text-white">
        {{ $initials }}
    </div>

    <div>
        <p class="font-semibold text-stone-900">
            {{ $name }}
        </p>

        <p class="text-sm text-stone-500">
            {{ $role }}
        </p>
    </div>

</div>

</div>
