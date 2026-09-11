@extends('layouts.app')

@section('content')

<x-navbar />

<main>

   <!-- =====================================================
     HERO SECTION
====================================================== -->
<section
    id="home"
    class="relative overflow-hidden bg-[#0E3B2B]"
>

    <!-- Decorative background -->
    <div class="absolute -right-24 -top-24 h-72 w-72 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>

    <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-6 py-16 lg:grid-cols-2 lg:px-8 lg:py-20">

        <!-- =================================================
             LEFT SIDE
        ================================================== -->
        <div class="text-center lg:text-left">

            <!-- Small Label -->
            <p class="mb-4 text-sm font-bold uppercase tracking-[0.25em] text-[#D8A94E]">
                Authentic Vietnamese Coffee
            </p>

            <!-- Main Heading -->
            <h1
                class="text-5xl font-black leading-tight tracking-tight text-[#F4EFE3] sm:text-6xl lg:text-7xl"
            >
                Authentic Vietnamese Coffee.
                <span class="block font-['Instrument_Serif'] font-normal italic text-[#D8A94E]">
                    Made for Better Moments.
                </span>
            </h1>

            <!-- Description -->
            <p
                class="mx-auto mt-6 max-w-xl text-base leading-8 text-[#F4EFE3]/70 sm:text-lg lg:mx-0"
            >
                Experience the rich and authentic taste of Vietnamese coffee
                at Drip Kofi. Enjoy carefully crafted coffee drinks made
                for every mood, every moment, and every coffee lover.
            </p>

            <!-- Buttons -->
            <div
                class="mt-9 flex flex-col justify-center gap-4 sm:flex-row lg:justify-start"
            >

                <a
                    href="#product"
                    class="rounded-xl bg-[#D8A94E] px-7 py-3.5 text-center font-bold text-[#0B2E22] shadow-lg shadow-black/20 transition duration-300 hover:-translate-y-1 hover:bg-[#E7C56F]"
                >
                    Explore Our Menu
                </a>

                <a
                    href="#pricing"
                    class="rounded-xl border border-[#F4EFE3]/30 px-7 py-3.5 text-center font-semibold text-[#F4EFE3] transition duration-300 hover:border-[#D8A94E] hover:bg-[#F4EFE3]/10"
                >
                    View Favorites
                </a>

            </div>


            <!-- =================================================
                 MENU INFORMATION
            ================================================== -->
            <div class="mt-10 grid grid-cols-3 divide-x divide-[#D8A94E]/20">

                <!-- Categories -->
                <div class="px-3">

                    <p class="text-2xl font-black text-[#F4EFE3] sm:text-3xl">
                        9
                    </p>

                    <p class="mt-1 text-xs text-[#F4EFE3]/50 sm:text-sm">
                        Menu Categories
                    </p>

                </div>


                <!-- Drinks -->
                <div class="px-3">

                    <p class="text-2xl font-black text-[#F4EFE3] sm:text-3xl">
                        45+
                    </p>

                    <p class="mt-1 text-xs text-[#F4EFE3]/50 sm:text-sm">
                        Drinks
                    </p>

                </div>


                <!-- Price -->
                <div class="px-3">

                    <p class="text-2xl font-black text-[#F4EFE3] sm:text-3xl">
                        ₱120
                    </p>

                    <p class="mt-1 text-xs text-[#F4EFE3]/50 sm:text-sm">
                        Starting Price
                    </p>

                </div>

            </div>

        </div>


        <!-- =================================================
             RIGHT SIDE - ACTUAL PRODUCT PHOTO
        ================================================== -->
        <div class="flex justify-center lg:justify-end">

            <div class="relative w-full max-w-md">

                <!-- Image Background -->
                <div
                    class="absolute inset-0 rounded-[3rem] bg-[#D8A94E]/10 blur-3xl"
                ></div>


                <!-- Main Image Card -->
                <div
                    class="relative overflow-hidden rounded-[2rem] border border-[#D8A94E]/30 bg-[#0B2E22] p-4 shadow-2xl"
                >

                    <!-- Best Seller Badge -->
                    <div
                        class="absolute left-7 top-7 z-20 rounded-full bg-[#D8A94E] px-4 py-2 shadow-lg"
                    >

                        <span class="text-xs font-black uppercase tracking-wider text-[#0B2E22]">
                            ★ Best Seller
                        </span>

                    </div>


                    <!-- Actual Product Image -->
                    <div class="overflow-hidden rounded-[1.5rem]">

                        <img
                            src="{{ asset('images/Caphesuada.png') }}"
                            alt="Drip Kofi Authentic Vietnamese Coffee"
                            class="h-[470px] w-full object-cover transition duration-700 hover:scale-105"
                        >

                    </div>


                    <!-- Product Information Overlay -->
                    <div
                        class="absolute bottom-7 left-7 right-7 rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B]/95 p-4 shadow-xl backdrop-blur-md"
                    >

                        <p class="text-xs uppercase tracking-widest text-[#D8A94E]">
                            Customer Favorite
                        </p>

                        <div class="mt-1 flex items-center justify-between gap-3">

                            <div>

                                <p
                                    class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                                >
                                    Ca Phe Sua Da
                                </p>

                                <p class="mt-1 text-xs text-[#F4EFE3]/50">
                                    Authentic Vietnamese Coffee
                                </p>

                            </div>


                            <div class="text-right">

                                <p class="text-xs text-[#F4EFE3]/40">
                                    From
                                </p>

                                <p class="text-xl font-black text-[#D8A94E]">
                                    ₱120
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Floating Favorite Badge -->
                <div
                    class="absolute -left-5 top-28 rounded-2xl border border-[#D8A94E]/30 bg-[#F4EFE3] px-5 py-4 shadow-xl sm:-left-10"
                >

                    <p class="text-xs font-medium text-stone-500">
                        Drip Kofi Favorite
                    </p>

                    <p class="mt-1 font-bold text-[#0E3B2B]">
                        ☕ Ca Phe Sua Da
                    </p>

                </div>


                <!-- Floating Price -->
                <div
                    class="absolute -bottom-5 -right-5 rounded-2xl border border-[#D8A94E]/30 bg-[#D8A94E] px-5 py-4 shadow-xl"
                >

                    <p class="text-xs font-bold uppercase tracking-wider text-[#0B2E22]">
                        Starting From
                    </p>

                    <p class="text-2xl font-black text-[#0B2E22]">
                        ₱120
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- =====================================================
         FEATURES SECTION
    ====================================================== -->
    <section id="features" class="bg-[#F4EFE3] px-6 py-20 sm:py-28">

        <div class="mx-auto max-w-7xl">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#B07D24]">
                    Why Drip Kofi
                </p>

                <h2 class="mt-4 text-3xl font-black tracking-tight text-[#0E3B2B] sm:text-4xl lg:text-5xl">
                    Coffee made for your everyday moments
                </h2>

                <p class="mt-5 text-lg leading-8 text-stone-600">
                    From carefully selected beans to every delicious cup,
                    we focus on quality, flavor, and your coffee experience.
                </p>

            </div>


            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Feature 1 -->
                <div class="group rounded-3xl border border-[#0E3B2B]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0E3B2B] text-2xl">
                        ☕
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-[#0E3B2B]">
                        Premium Beans
                    </h3>

                    <p class="mt-3 leading-7 text-stone-600">
                        We carefully select quality coffee beans to create
                        a rich and satisfying cup.
                    </p>

                </div>


                <!-- Feature 2 -->
                <div class="group rounded-3xl border border-[#0E3B2B]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0E3B2B] text-2xl">
                        🌱
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-[#0E3B2B]">
                        Freshly Roasted
                    </h3>

                    <p class="mt-3 leading-7 text-stone-600">
                        Our coffee is roasted to bring out the natural aroma
                        and character of every bean.
                    </p>

                </div>


                <!-- Feature 3 -->
                <div class="group rounded-3xl border border-[#0E3B2B]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0E3B2B] text-2xl">
                        👨‍🍳
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-[#0E3B2B]">
                        Crafted with Care
                    </h3>

                    <p class="mt-3 leading-7 text-stone-600">
                        Every cup is prepared with attention to detail for
                        a consistently delicious experience.
                    </p>

                </div>


                <!-- Feature 4 -->
                <div class="group rounded-3xl border border-[#0E3B2B]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0E3B2B] text-2xl">
                        ✨
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-[#0E3B2B]">
                        Rich & Smooth Flavor
                    </h3>

                    <p class="mt-3 leading-7 text-stone-600">
                        Enjoy balanced coffee with a smooth finish and a
                        flavor worth coming back for.
                    </p>

                </div>


                <!-- Feature 5 -->
                <div class="group rounded-3xl border border-[#0E3B2B]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0E3B2B] text-2xl">
                        🚚
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-[#0E3B2B]">
                        Fast Delivery
                    </h3>

                    <p class="mt-3 leading-7 text-stone-600">
                        Get your favorite Drip Kofi coffee conveniently
                        delivered straight to your door.
                    </p>

                </div>


                <!-- Feature 6 -->
                <div class="group rounded-3xl border border-[#0E3B2B]/10 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#0E3B2B] text-2xl">
                        ❤️
                    </div>

                    <h3 class="mt-6 text-xl font-bold text-[#0E3B2B]">
                        Made for Coffee Lovers
                    </h3>

                    <p class="mt-3 leading-7 text-stone-600">
                        Created for people who appreciate great coffee,
                        good moments, and everyday comfort.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
     PRODUCT SHOWCASE
====================================================== -->
<section
    id="product"
    class="relative overflow-hidden bg-[#0E3B2B] px-6 py-20 sm:py-28"
>

    <!-- Decorative Background -->
    <div class="absolute -left-40 top-20 h-96 w-96 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>

    <div class="absolute -right-40 bottom-20 h-96 w-96 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>


    <div class="relative mx-auto max-w-7xl">

        <!-- =================================================
             SECTION HEADING
        ================================================== -->
        <div class="mx-auto max-w-3xl text-center">

            <p class="text-sm font-bold uppercase tracking-[0.25em] text-[#D8A94E]">
                Drip Kofi Menu
            </p>

            <h2 class="mt-4 text-4xl font-black tracking-tight text-[#F4EFE3] sm:text-5xl lg:text-6xl">

                Something for every

                <span class="font-['Instrument_Serif'] font-normal italic text-[#D8A94E]">
                    coffee lover.
                </span>

            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-[#F4EFE3]/65">

                From authentic Vietnamese coffee favorites to refreshing
                non-coffee drinks, ice blended creations, floats,
                tea-based drinks, keto options, and ready-to-drink favorites.

            </p>

        </div>


        <!-- =================================================
             MENU PREVIEW
        ================================================== -->
        <div class="mt-14">

            <div
                class="relative overflow-hidden rounded-[2rem] border border-[#D8A94E]/20 bg-[#0B2E22] p-5 shadow-2xl sm:p-8"
            >

                <!-- =================================================
                     MENU HEADER
                ================================================== -->
                <div
                    class="flex flex-col items-center justify-between gap-4 border-b border-[#F4EFE3]/10 pb-6 sm:flex-row"
                >

                    <div class="text-center sm:text-left">

                        <p
                            class="font-['Instrument_Serif'] text-3xl italic text-[#F4EFE3]"
                        >
                            drip kofi
                        </p>

                        <p
                            class="-mt-1 text-xs font-bold uppercase tracking-[0.3em] text-[#D8A94E]"
                        >
                            Authentic Vietnamese Coffee
                        </p>

                    </div>


                    <!-- Best Seller -->
                    <div
                        class="flex items-center gap-2 rounded-full border border-[#D8A94E]/40 bg-[#D8A94E] px-4 py-2 shadow-lg"
                    >

                        <span class="text-sm text-[#0B2E22]">
                            ★
                        </span>

                        <span
                            class="text-xs font-black uppercase tracking-widest text-[#0B2E22]"
                        >
                            Best Seller
                        </span>

                    </div>

                </div>

                <!-- =================================================
                    FEATURED MENU ITEMS
                ================================================= -->
                <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- =================================================
                        CA PHE SUA DA
                    ================================================== -->
                    <div class="group rounded-2xl border border-[#F4EFE3]/10 bg-[#0E3B2B] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-[#D8A94E]/40">

                        <!-- Image Box -->
                        <div class="mx-auto flex h-40 w-full items-center justify-center overflow-hidden rounded-xl bg-[#D8A94E]/5">

                            <img
                                src="{{ asset('images/Caphesuada.png') }}"
                                alt="Ca Phe Sua Da"
                                class="h-full w-full object-contain p-2 transition duration-300 group-hover:scale-105"
                            >

                        </div>

                        <h3 class="mt-4 font-bold text-[#F4EFE3]">
                            Ca Phe Sua Da
                        </h3>

                        <p class="mt-1 text-xs text-[#F4EFE3]/45">
                            Grande 130 · Venti 150
                        </p>

                        <div class="mt-3 inline-flex rounded-full bg-[#D8A94E]/10 px-3 py-1">

                            <span class="text-xs font-bold text-[#D8A94E]">
                                Customer Favorite
                            </span>

                        </div>

                    </div>


                    <!-- =================================================
                        WHITE MOCHA
                    ================================================== -->
                    <div class="group rounded-2xl border border-[#F4EFE3]/10 bg-[#0E3B2B] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-[#D8A94E]/40">

                        <!-- Image Box -->
                        <div class="mx-auto flex h-40 w-full items-center justify-center overflow-hidden rounded-xl bg-[#D8A94E]/5">

                            <img
                                src="{{ asset('images/white-mocha.png') }}"
                                alt="White Mocha"
                                class="h-full w-full object-contain p-2 transition duration-300 group-hover:scale-105"
                            >

                        </div>

                        <h3 class="mt-4 font-bold text-[#F4EFE3]">
                            White Mocha
                        </h3>

                        <p class="mt-1 text-xs text-[#F4EFE3]/45">
                            Grande 140 · Venti 160 · Hot 175
                        </p>

                    </div>


                    <!-- =================================================
                        UBE MATCHA
                    ================================================== -->
                    <div class="group rounded-2xl border border-[#F4EFE3]/10 bg-[#0E3B2B] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-[#D8A94E]/40">

                        <!-- Image Box -->
                        <div class="mx-auto flex h-40 w-full items-center justify-center overflow-hidden rounded-xl bg-[#D8A94E]/5">

                            <img
                                src="{{ asset('images/ube-matcha.png') }}"
                                alt="Ube Matcha"
                                class="h-full w-full object-contain p-2 transition duration-300 group-hover:scale-105"
                            >

                        </div>

                        <h3 class="mt-4 font-bold text-[#F4EFE3]">
                            Ube Matcha
                        </h3>

                        <p class="mt-1 text-xs text-[#F4EFE3]/45">
                            Venti 185
                        </p>

                    </div>


                    <!-- =================================================
                        COCO KOFI
                    ================================================== -->
                    <div class="group rounded-2xl border border-[#F4EFE3]/10 bg-[#0E3B2B] p-5 text-center transition duration-300 hover:-translate-y-1 hover:border-[#D8A94E]/40">

                        <!-- Image Box -->
                        <div class="mx-auto flex h-40 w-full items-center justify-center overflow-hidden rounded-xl bg-[#D8A94E]/5">

                            <img
                                src="{{ asset('images/coco-kofi.png') }}"
                                alt="Coco Kofi"
                                class="h-full w-full object-contain p-2 transition duration-300 group-hover:scale-105"
                            >

                        </div>

                        <h3 class="mt-4 font-bold text-[#F4EFE3]">
                            Coco Kofi
                        </h3>

                        <p class="mt-1 text-xs text-[#F4EFE3]/45">
                            Grande 180
                        </p>

                    </div>

                </div>


                <!-- =================================================
                     MENU CATEGORIES
                ================================================== -->
                <div class="mt-8 grid gap-4 md:grid-cols-2 lg:grid-cols-3">


                    <!-- Coffee -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Coffee
                            </h3>

                            <span class="text-xl">
                                ☕
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Ca Phe Sua Da, Americano, White Mocha,
                            Egg Coffee, Caramel Macchiato, Spanish Latte,
                            Ca Phe Latte, Mocha, Egg Mocha, and Macchiato.

                        </p>

                    </div>


                    <!-- Non-Coffee -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Non-Coffee
                            </h3>

                            <span class="text-xl">
                                🥛
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Green Tea Latte, Ube Latte, Ube Matcha,
                            and Signature Choco.

                        </p>

                    </div>


                    <!-- Seasonal -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Seasonal
                            </h3>

                            <span class="text-xl">
                                ✨
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Breakfast Kofi, Coco Kofi,
                            and Coco Choco Kofi.

                        </p>

                    </div>


                    <!-- Ice Blended -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Ice Blended
                            </h3>

                            <span class="text-xl">
                                🧊
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Ca Phe Sua Da, Mocha, White Mocha,
                            Choco Cream Chip, Strawberries & Cream,
                            Hazelnut, Caramel Macchiato, Toffee Nut,
                            Green Tea, Java Chip, and Dark Choco Chip.

                        </p>

                    </div>


                    <!-- Float -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Float
                            </h3>

                            <span class="text-xl">
                                🍦
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Ube Float, Salted Caramel Float,
                            Matcha Float, Choco Berry Float,
                            and Ca Phe Float.

                        </p>

                    </div>


                    <!-- Tea-Based -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Tea-Based
                            </h3>

                            <span class="text-xl">
                                🍵
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Peach Twist, Passion Fruit,
                            Kiwi, and Pomegranate.

                        </p>

                    </div>


                    <!-- Keto -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Keto
                            </h3>

                            <span class="text-xl">
                                🌿
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Keto Ca Phe

                            <span class="mt-1 block font-semibold text-[#D8A94E]">
                                Venti ₱185
                            </span>

                        </p>

                    </div>


                    <!-- Ready to Drink -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Ready to Drink
                            </h3>

                            <span class="text-xl">
                                🧋
                            </span>

                        </div>


                        <p class="mt-2 text-sm leading-6 text-[#F4EFE3]/50">

                            Ca Phe Sua Da, Americano,
                            Ca Phe Latte, Macchiato, White Mocha,
                            Mocha, Hazelnut, Spanish Latte,
                            Caramel Macchiato, Ube Latte,
                            and Green Tea Latte.

                        </p>

                    </div>


                    <!-- Add-ons -->
                    <div
                        class="rounded-2xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-5 transition duration-300 hover:border-[#D8A94E]/40"
                    >

                        <div class="flex items-center justify-between">

                            <h3
                                class="font-['Instrument_Serif'] text-2xl italic text-[#F4EFE3]"
                            >
                                Add-ons
                            </h3>

                            <span class="text-xl">
                                ➕
                            </span>

                        </div>


                        <div
                            class="mt-3 grid grid-cols-2 gap-x-4 gap-y-1 text-xs text-[#F4EFE3]/50"
                        >

                            <span>Coffee</span>
                            <span class="text-right">₱30</span>

                            <span>Milk</span>
                            <span class="text-right">₱30</span>

                            <span>Chia Seeds</span>
                            <span class="text-right">₱30</span>

                            <span>Syrup</span>
                            <span class="text-right">₱30</span>

                            <span>Seasalt</span>
                            <span class="text-right">₱30</span>

                            <span>Popping Boba</span>
                            <span class="text-right">₱30</span>

                            <span>Coffee Jelly</span>
                            <span class="text-right">₱30</span>

                            <span>Ice Cream</span>
                            <span class="text-right">₱40</span>

                            <span>Oat Milk</span>
                            <span class="text-right">₱40</span>

                        </div>

                    </div>

                </div>
                <!-- END MENU CATEGORIES -->


            </div>
            <!-- END MENU PREVIEW -->

        </div>

    </div>

</section>

<!-- =========================
     PRICING / MENU PLANS
========================== -->
<section id="pricing" class="bg-[#0B2E22] px-6 py-20 sm:py-28">

    <div class="mx-auto max-w-7xl">

        <!-- Section Heading -->
        <div class="mx-auto max-w-3xl text-center">

            <p class="font-['Instrument_Serif'] text-lg italic text-[#D8A94E]">
                Choose your kofi
            </p>

            <h2 class="mt-3 font-['Instrument_Serif'] text-4xl italic leading-tight text-[#F4EFE3] sm:text-5xl">
                Something for every mood
            </h2>

            <p class="mt-4 text-base leading-7 text-[#F4EFE3]/60">
                Choose from our Drip Kofi favorites, then explore the full menu
                for more coffee, non-coffee, seasonal, ice blended, float,
                tea-based, keto, and ready-to-drink choices.
            </p>

        </div>


        <!-- Pricing Cards -->
        <div class="mx-auto mt-12 grid max-w-6xl gap-6 lg:grid-cols-3">


            <!-- =========================
                 PLAN 1
            ========================== -->
            <div
                class="group relative overflow-hidden rounded-3xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-7 transition duration-300 hover:-translate-y-2 hover:border-[#D8A94E]/50 hover:shadow-2xl"
            >

                <!-- Decorative Circle -->
                <div class="absolute -right-16 -top-16 h-40 w-40 rounded-full bg-[#D8A94E]/10 blur-2xl"></div>

                <div class="relative">

                    <!-- Plan Label -->
                    <div class="flex items-center justify-between">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D8A94E]">
                            Starter
                        </p>

                        <span class="rounded-full border border-[#D8A94E]/30 px-3 py-1 text-xs text-[#F4EFE3]/60">
                            1 drink
                        </span>

                    </div>


                    <!-- Plan Name -->
                    <h3 class="mt-5 font-['Instrument_Serif'] text-3xl italic text-[#F4EFE3]">
                        Kofi Starter
                    </h3>

                    <p class="mt-3 min-h-[48px] text-sm leading-6 text-[#F4EFE3]/60">
                        Perfect for your everyday coffee break.
                    </p>


                    <!-- Price -->
                    <div class="mt-6 flex items-end gap-2">

                        <span class="text-4xl font-black text-[#F4EFE3]">
                            ₱120
                        </span>

                        <span class="pb-1 text-sm text-[#F4EFE3]/40">
                            starting
                        </span>

                    </div>


                    <!-- Included Items -->
                    <div class="my-7 border-t border-[#F4EFE3]/10 pt-6">

                        <p class="mb-4 text-sm font-semibold text-[#F4EFE3]">
                            Choose from:
                        </p>

                        <ul class="space-y-3 text-sm text-[#F4EFE3]/70">

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Americano
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Ca Phe Sua Da
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Ca Phe Latte
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Mocha
                            </li>

                        </ul>

                    </div>


                    <!-- Button -->
                    <a
                        href="#menu"
                        class="block w-full rounded-xl border border-[#D8A94E]/40 px-5 py-3 text-center text-sm font-bold text-[#F4EFE3] transition hover:border-[#D8A94E] hover:bg-[#D8A94E]/10"
                    >
                        View Coffee Menu
                    </a>

                </div>

            </div>



            <!-- =========================
                 PLAN 2 - FEATURED
            ========================== -->
            <div
                class="group relative overflow-hidden rounded-3xl border-2 border-[#D8A94E]/60 bg-[#0E3B2B] p-7 shadow-2xl transition duration-300 hover:-translate-y-2"
            >

                <!-- Popular Badge -->
                <div class="absolute right-5 top-5 rounded-full bg-[#D8A94E] px-3 py-1 text-xs font-black uppercase tracking-wider text-[#0B2E22]">
                    Popular
                </div>


                <!-- Decorative Glow -->
                <div class="absolute -left-16 -top-16 h-48 w-48 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>

                <div class="relative">

                    <!-- Plan Label -->
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D8A94E]">
                        Favorites
                    </p>


                    <!-- Plan Name -->
                    <h3 class="mt-5 font-['Instrument_Serif'] text-3xl italic text-[#F4EFE3]">
                        Kofi Favorites
                    </h3>

                    <p class="mt-3 min-h-[48px] text-sm leading-6 text-[#F4EFE3]/60">
                        Our crowd favorites for coffee and non-coffee lovers.
                    </p>


                    <!-- Price -->
                    <div class="mt-6 flex items-end gap-2">

                        <span class="text-4xl font-black text-[#F4EFE3]">
                            ₱130
                        </span>

                        <span class="pb-1 text-sm text-[#F4EFE3]/40">
                            starting
                        </span>

                    </div>


                    <!-- Included Items -->
                    <div class="my-7 border-t border-[#F4EFE3]/10 pt-6">

                        <p class="mb-4 text-sm font-semibold text-[#F4EFE3]">
                            Choose from:
                        </p>

                        <ul class="space-y-3 text-sm text-[#F4EFE3]/70">

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                White Mocha
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Spanish Latte
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Egg Coffee
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Ube Latte
                            </li>

                        </ul>

                    </div>


                    <!-- Button -->
                    <a
                        href="#menu"
                        class="block w-full rounded-xl bg-[#D8A94E] px-5 py-3 text-center text-sm font-black text-[#0B2E22] shadow-lg transition hover:bg-[#E5BC67] hover:shadow-xl"
                    >
                        Explore Favorites
                    </a>

                </div>

            </div>



            <!-- =========================
                 PLAN 3
            ========================== -->
            <div
                class="group relative overflow-hidden rounded-3xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-7 transition duration-300 hover:-translate-y-2 hover:border-[#D8A94E]/50 hover:shadow-2xl"
            >

                <!-- Decorative Circle -->
                <div class="absolute -bottom-16 -right-16 h-40 w-40 rounded-full bg-[#D8A94E]/10 blur-2xl"></div>

                <div class="relative">

                    <!-- Plan Label -->
                    <div class="flex items-center justify-between">

                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#D8A94E]">
                            Full Experience
                        </p>

                        <span class="rounded-full border border-[#D8A94E]/30 px-3 py-1 text-xs text-[#F4EFE3]/60">
                            Variety
                        </span>

                    </div>


                    <!-- Plan Name -->
                    <h3 class="mt-5 font-['Instrument_Serif'] text-3xl italic text-[#F4EFE3]">
                        Kofi Feast
                    </h3>

                    <p class="mt-3 min-h-[48px] text-sm leading-6 text-[#F4EFE3]/60">
                        Explore more flavors from the complete Drip Kofi lineup.
                    </p>


                    <!-- Price -->
                    <div class="mt-6 flex items-end gap-2">

                        <span class="text-4xl font-black text-[#F4EFE3]">
                            ₱150
                        </span>

                        <span class="pb-1 text-sm text-[#F4EFE3]/40">
                            starting
                        </span>

                    </div>


                    <!-- Included Items -->
                    <div class="my-7 border-t border-[#F4EFE3]/10 pt-6">

                        <p class="mb-4 text-sm font-semibold text-[#F4EFE3]">
                            Explore:
                        </p>

                        <ul class="space-y-3 text-sm text-[#F4EFE3]/70">

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Ice Blended
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Float
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Tea-Based
                            </li>

                            <li class="flex items-center gap-3">
                                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-[#D8A94E]/15 text-xs text-[#D8A94E]">
                                    ✓
                                </span>
                                Ready to Drink
                            </li>

                        </ul>

                    </div>


                    <!-- Button -->
                    <a
                        href="#menu"
                        class="block w-full rounded-xl border border-[#D8A94E]/40 px-5 py-3 text-center text-sm font-bold text-[#F4EFE3] transition hover:border-[#D8A94E] hover:bg-[#D8A94E]/10"
                    >
                        Explore Full Menu
                    </a>

                </div>

            </div>

        </div>


        <!-- =========================
             MENU CATEGORY STRIP
        ========================== -->
        <div class="mt-12 rounded-3xl border border-[#D8A94E]/20 bg-[#0E3B2B] p-6">

            <div class="flex flex-wrap items-center justify-center gap-3 text-center">

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Coffee
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Non-Coffee
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Seasonal
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Ice Blended
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Float
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Tea-Based
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Keto
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Ready to Drink
                </span>

                <span class="rounded-full border border-[#D8A94E]/30 px-4 py-2 text-xs font-semibold text-[#F4EFE3]/70">
                    Add-Ons
                </span>

            </div>

        </div>

    </div>

</section>


    <!-- =========================
     TESTIMONIALS SECTION
========================== -->
<section
    id="testimonials"
    class="relative overflow-hidden bg-[#0E3B2B] px-6 py-20 sm:py-24 lg:py-28"
>

    <!-- Decorative Background -->
    <div class="absolute -left-32 top-20 h-72 w-72 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>
    <div class="absolute -right-32 bottom-10 h-80 w-80 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl">

        <!-- Section Heading -->
        <div class="mx-auto max-w-2xl text-center">

            <h2 class="mt-3 font-['Instrument_Serif'] text-4xl italic leading-tight text-[#F4EFE3] sm:text-5xl">
                Loved by coffee lovers
            </h2>

            <p class="mt-4 text-base leading-7 text-[#F4EFE3]/60">
                From Ca Phe Sua Da to Ube Matcha, here's what our customers
                say about their favorite Drip Kofi drinks.
            </p>

        </div>


        <!-- Testimonials -->
        <div class="mt-12 grid gap-6 md:grid-cols-3">


            <!-- =========================
                 TESTIMONIAL 1
            ========================== -->
            <div
                class="group relative overflow-hidden rounded-2xl border border-[#D8A94E]/20 bg-[#0B2E22] p-6 shadow-xl transition duration-300 hover:-translate-y-2 hover:border-[#D8A94E]/50"
            >

                <!-- Gold accent -->
                <div class="absolute left-0 top-0 h-1 w-full bg-[#D8A94E]/60"></div>

                <!-- Quote -->
                <div class="mb-5 text-4xl font-serif text-[#D8A94E]/60">
                    “
                </div>

                <!-- Review -->
                <p class="min-h-[120px] text-sm leading-7 text-[#F4EFE3]/75">
                    Ang Ca Phe Sua Da talaga ang favorite ko.
                    Strong yung coffee pero smooth pa rin at hindi
                    nakakaumay. Perfect lalo na kapag kailangan ko
                    ng energy buong araw.
                </p>

                <!-- Rating -->
                <div class="mt-5 flex gap-1 text-[#D8A94E]">
                    ★ ★ ★ ★ ★
                </div>

                <!-- Customer -->
                <div class="mt-6 flex items-center gap-4 border-t border-[#F4EFE3]/10 pt-5">

                    <!-- Customer Photo -->
                    <img
                        src="https://i.pravatar.cc/100?img=47"
                        alt="Maria Santos"
                        class="h-12 w-12 rounded-full border-2 border-[#D8A94E]/50 object-cover"
                    >

                    <div>
                        <p class="font-semibold text-[#F4EFE3]">
                            Maria Santos
                        </p>

                        <p class="mt-0.5 text-xs text-[#D8A94E]">
                            Coffee Lover
                        </p>
                    </div>

                </div>

            </div>



            <!-- =========================
                 TESTIMONIAL 2
            ========================== -->
            <div
                class="group relative overflow-hidden rounded-2xl border border-[#D8A94E]/20 bg-[#0B2E22] p-6 shadow-xl transition duration-300 hover:-translate-y-2 hover:border-[#D8A94E]/50"
            >

                <!-- Gold accent -->
                <div class="absolute left-0 top-0 h-1 w-full bg-[#D8A94E]/60"></div>

                <!-- Quote -->
                <div class="mb-5 text-4xl font-serif text-[#D8A94E]/60">
                    “
                </div>

                <!-- Review -->
                <p class="min-h-[120px] text-sm leading-7 text-[#F4EFE3]/75">
                    Finally nakahanap ako ng Ube Matcha na balanced
                    ang sweetness. Hindi overpowering yung ube at
                    bagay talaga sa matcha. Definitely ordering
                    this again!
                </p>

                <!-- Rating -->
                <div class="mt-5 flex gap-1 text-[#D8A94E]">
                    ★ ★ ★ ★ ★
                </div>

                <!-- Customer -->
                <div class="mt-6 flex items-center gap-4 border-t border-[#F4EFE3]/10 pt-5">

                    <!-- Customer Photo -->
                    <img
                        src="https://i.pravatar.cc/100?img=32"
                        alt="Jhon Rivera"
                        class="h-12 w-12 rounded-full border-2 border-[#D8A94E]/50 object-cover"
                    >

                    <div>
                        <p class="font-semibold text-[#F4EFE3]">
                            Jhon Rivera
                        </p>

                        <p class="mt-0.5 text-xs text-[#D8A94E]">
                            Regular Customer
                        </p>
                    </div>

                </div>

            </div>



            <!-- =========================
                 TESTIMONIAL 3
            ========================== -->
            <div
                class="group relative overflow-hidden rounded-2xl border border-[#D8A94E]/20 bg-[#0B2E22] p-6 shadow-xl transition duration-300 hover:-translate-y-2 hover:border-[#D8A94E]/50"
            >

                <!-- Gold accent -->
                <div class="absolute left-0 top-0 h-1 w-full bg-[#D8A94E]/60"></div>

                <!-- Quote -->
                <div class="mb-5 text-4xl font-serif text-[#D8A94E]/60">
                    “
                </div>

                <!-- Review -->
                <p class="min-h-[120px] text-sm leading-7 text-[#F4EFE3]/75">
                    Yung Ready-to-Drink lineup ang lifesaver ko
                    kapag busy sa school. Ca Phe Latte at Spanish
                    Latte yung lagi kong dala. Masarap at
                    convenient!
                </p>

                <!-- Rating -->
                <div class="mt-5 flex gap-1 text-[#D8A94E]">
                    ★ ★ ★ ★ ★
                </div>

                <!-- Customer -->
                <div class="mt-6 flex items-center gap-4 border-t border-[#F4EFE3]/10 pt-5">

                    <!-- Customer Photo -->
                    <img
                        src="https://i.pravatar.cc/100?img=12"
                        alt="Angela Reyes"
                        class="h-12 w-12 rounded-full border-2 border-[#D8A94E]/50 object-cover"
                    >

                    <div>
                        <p class="font-semibold text-[#F4EFE3]">
                            Angela Reyes
                        </p>

                        <p class="mt-0.5 text-xs text-[#D8A94E]">
                            Student
                        </p>
                    </div>

                </div>

            </div>

        </div>


        <!-- Bottom Message -->
        <div class="mt-12 text-center">

            <div class="mx-auto flex max-w-xl items-center justify-center gap-4">

                <div class="h-px flex-1 bg-[#D8A94E]/20"></div>

                <span class="font-['Instrument_Serif'] text-lg italic text-[#D8A94E]">
                    Made for every mood
                </span>

                <div class="h-px flex-1 bg-[#D8A94E]/20"></div>

            </div>

            <p class="mt-4 text-sm text-[#F4EFE3]/50">
                Coffee · Non-Coffee · Seasonal · Ice Blended · Float · Tea-Based · Keto · Ready-to-Drink
            </p>

        </div>

    </div>

</section>


    <<!-- =========================
     CALL TO ACTION SECTION
========================== -->
<section
    id="contact"
    class="relative overflow-hidden bg-[#0B2E22] px-6 py-20 sm:py-24 lg:py-28"
>

    <!-- Decorative Background -->
    <div class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>

    <div class="absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-[#D8A94E]/10 blur-3xl"></div>


    <div class="relative mx-auto max-w-6xl">

        <!-- Main CTA -->
        <div
            class="relative overflow-hidden rounded-[2rem] border border-[#D8A94E]/30 bg-[#0E3B2B] px-6 py-14 shadow-2xl sm:px-10 lg:px-16 lg:py-16"
        >

            <!-- Decorative Lines -->
            <div class="absolute left-0 top-0 h-px w-32 bg-[#D8A94E]/70"></div>

            <div class="absolute right-0 bottom-0 h-px w-32 bg-[#D8A94E]/70"></div>


            <!-- Heading -->
            <div class="mx-auto max-w-3xl text-center">

                <p class="font-['Instrument_Serif'] text-xl italic text-[#D8A94E]">
                    Kofi break?
                </p>

                <h2
                    class="mt-4 font-['Instrument_Serif'] text-4xl italic leading-tight text-[#F4EFE3] sm:text-5xl lg:text-6xl"
                >
                    Your next cup starts here.
                </h2>

                <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-[#F4EFE3]/65 sm:text-lg">
                    Discover your favorite Drip Kofi drink, create your account,
                    or get in touch with us for more information.
                </p>

            </div>


            <!-- CTA Buttons -->
            <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">

                <!-- Register -->
                <a
                    href=""
                    class="rounded-full bg-[#D8A94E] px-7 py-3.5 text-center text-sm font-bold text-[#0B2E22] shadow-lg transition duration-300 hover:-translate-y-1 hover:bg-[#E5BD68] hover:shadow-xl"
                >
                    Register
                </a>


                <!-- Contact Sales -->
                <a
                    href="mailto:hello@dripkofi.com"
                    class="rounded-full border border-[#D8A94E]/50 px-7 py-3.5 text-center text-sm font-semibold text-[#F4EFE3] transition duration-300 hover:border-[#D8A94E] hover:bg-[#D8A94E]/10"
                >
                    Contact Sales
                </a>

            </div>


            <!-- Small Trust Message -->
            <div class="mt-10 flex items-center justify-center gap-4">

                <div class="h-px w-16 bg-[#D8A94E]/20"></div>

                <p class="text-xs uppercase tracking-[0.2em] text-[#F4EFE3]/40">
                    Coffee · Non-Coffee · Seasonal
                </p>

                <div class="h-px w-16 bg-[#D8A94E]/20"></div>

            </div>


            <!-- Product Categories -->
            <div class="mt-6 flex flex-wrap justify-center gap-2">

                <span
                    class="rounded-full border border-[#D8A94E]/20 px-4 py-2 text-xs text-[#F4EFE3]/60"
                >
                    Ice Blended
                </span>

                <span
                    class="rounded-full border border-[#D8A94E]/20 px-4 py-2 text-xs text-[#F4EFE3]/60"
                >
                    Float
                </span>

                <span
                    class="rounded-full border border-[#D8A94E]/20 px-4 py-2 text-xs text-[#F4EFE3]/60"
                >
                    Tea-Based
                </span>

                <span
                    class="rounded-full border border-[#D8A94E]/20 px-4 py-2 text-xs text-[#F4EFE3]/60"
                >
                    Keto
                </span>

                <span
                    class="rounded-full border border-[#D8A94E]/20 px-4 py-2 text-xs text-[#F4EFE3]/60"
                >
                    Ready to Drink
                </span>

            </div>

        </div>

    </div>

</section>

</main>

<x-footer />

@endsection