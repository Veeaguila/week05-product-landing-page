<nav class="sticky top-0 z-50 border-b border-[#D8A94E]/20 bg-[#0B2E22] shadow-lg">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between">

            <!-- =========================
                 COMPANY LOGO
            ========================== -->
            <a href="#home" class="group flex items-center gap-3">

                <!-- Actual Drip Kofi Logo -->
                <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-[#F4EFE3]">
                    <img
                        src="{{ asset('images/drip-kofi-logo.png') }}"
                        alt="Drip Kofi Logo"
                        class="h-full w-full object-contain p-1 transition duration-300 group-hover:scale-105"
                    >
                </div>

                <!-- Brand Name -->
                <div class="leading-none">

                    <span class="block font-serif text-2xl font-black tracking-tight text-[#F4EFE3]">
                        drip
                    </span>

                    <span class="-mt-1 block font-serif text-sm font-black tracking-[0.08em] text-[#D8A94E]">
                        kofi
                    </span>

                </div>

            </a>


            <!-- =========================
                 DESKTOP NAVIGATION
            ========================== -->
            <div class="hidden items-center gap-7 md:flex">

                <!-- Home -->
                <a
                    href="#home"
                    class="group relative py-2 text-sm font-semibold text-[#F4EFE3]/80 transition hover:text-[#D8A94E]"
                >
                    Home

                    <span class="absolute bottom-0 left-0 h-0.5 w-0 rounded-full bg-[#D8A94E] transition-all duration-300 group-hover:w-full"></span>
                </a>


                <!-- Features -->
                <a
                    href="#features"
                    class="group relative py-2 text-sm font-semibold text-[#F4EFE3]/80 transition hover:text-[#D8A94E]"
                >
                    Features

                    <span class="absolute bottom-0 left-0 h-0.5 w-0 rounded-full bg-[#D8A94E] transition-all duration-300 group-hover:w-full"></span>
                </a>


                <!-- Pricing -->
                <a
                    href="#pricing"
                    class="group relative py-2 text-sm font-semibold text-[#F4EFE3]/80 transition hover:text-[#D8A94E]"
                >
                    Pricing

                    <span class="absolute bottom-0 left-0 h-0.5 w-0 rounded-full bg-[#D8A94E] transition-all duration-300 group-hover:w-full"></span>
                </a>


                <!-- Testimonials -->
                <a
                    href="#testimonials"
                    class="group relative py-2 text-sm font-semibold text-[#F4EFE3]/80 transition hover:text-[#D8A94E]"
                >
                    Testimonials

                    <span class="absolute bottom-0 left-0 h-0.5 w-0 rounded-full bg-[#D8A94E] transition-all duration-300 group-hover:w-full"></span>
                </a>


                <!-- Contact -->
                <a
                    href="#contact"
                    class="group relative py-2 text-sm font-semibold text-[#F4EFE3]/80 transition hover:text-[#D8A94E]"
                >
                    Contact

                    <span class="absolute bottom-0 left-0 h-0.5 w-0 rounded-full bg-[#D8A94E] transition-all duration-300 group-hover:w-full"></span>
                </a>

            </div>


            <!-- =========================
                 DESKTOP BUTTONS
            ========================== -->
            <div class="hidden items-center gap-3 md:flex">

                <!-- Sign In -->
                <a
                    href="#"
                    class="rounded-full border border-[#D8A94E]/40 px-5 py-2.5 text-sm font-semibold text-[#F4EFE3] transition duration-300 hover:border-[#D8A94E] hover:bg-[#D8A94E]/10"
                >
                    Sign In
                </a>


                <!-- Get Started -->
                <a
                    href="#product"
                    class="rounded-full bg-[#D8A94E] px-5 py-2.5 text-sm font-bold text-[#0B2E22] shadow-md transition duration-300 hover:-translate-y-0.5 hover:bg-[#E5BC67] hover:shadow-xl"
                >
                    Get Started
                </a>

            </div>


            <!-- =========================
                 MOBILE MENU BUTTON
            ========================== -->
            <button
                type="button"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                class="rounded-xl border border-[#D8A94E]/40 px-3 py-2 text-xl text-[#F4EFE3] transition hover:bg-[#D8A94E]/10 md:hidden"
                aria-label="Toggle navigation"
            >
                ☰
            </button>

        </div>


        <!-- =========================
             MOBILE NAVIGATION
        ========================== -->
        <div
            id="mobile-menu"
            class="hidden border-t border-[#D8A94E]/20 py-5 md:hidden"
        >

            <div class="flex flex-col gap-1">

                <!-- Home -->
                <a
                    href="#home"
                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                    class="rounded-xl px-4 py-3 text-sm font-semibold text-[#F4EFE3]/80 transition hover:bg-[#D8A94E]/10 hover:text-[#D8A94E]"
                >
                    Home
                </a>


                <!-- Features -->
                <a
                    href="#features"
                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                    class="rounded-xl px-4 py-3 text-sm font-semibold text-[#F4EFE3]/80 transition hover:bg-[#D8A94E]/10 hover:text-[#D8A94E]"
                >
                    Features
                </a>


                <!-- Pricing -->
                <a
                    href="#pricing"
                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                    class="rounded-xl px-4 py-3 text-sm font-semibold text-[#F4EFE3]/80 transition hover:bg-[#D8A94E]/10 hover:text-[#D8A94E]"
                >
                    Pricing
                </a>


                <!-- Testimonials -->
                <a
                    href="#testimonials"
                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                    class="rounded-xl px-4 py-3 text-sm font-semibold text-[#F4EFE3]/80 transition hover:bg-[#D8A94E]/10 hover:text-[#D8A94E]"
                >
                    Testimonials
                </a>


                <!-- Contact -->
                <a
                    href="#contact"
                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                    class="rounded-xl px-4 py-3 text-sm font-semibold text-[#F4EFE3]/80 transition hover:bg-[#D8A94E]/10 hover:text-[#D8A94E]"
                >
                    Contact
                </a>


                <!-- =========================
                     MOBILE BUTTONS
                ========================== -->
                <div class="mt-4 grid grid-cols-2 gap-3 border-t border-[#D8A94E]/20 pt-5">

                    <!-- Sign In -->
                    <a
                        href="#"
                        class="rounded-full border border-[#D8A94E]/40 px-4 py-3 text-center text-sm font-semibold text-[#F4EFE3] transition hover:bg-[#D8A94E]/10"
                    >
                        Sign In
                    </a>


                    <!-- Get Started -->
                    <a
                        href="#product"
                        class="rounded-full bg-[#D8A94E] px-4 py-3 text-center text-sm font-bold text-[#0B2E22] transition hover:bg-[#E5BC67]"
                    >
                        Get Started
                    </a>

                </div>

            </div>

        </div>

    </div>

</nav>