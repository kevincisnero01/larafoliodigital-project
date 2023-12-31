<x-main-layout>
    <!-- ===== HERO SECTION===== -->
    <div class="relative overflow-hidden bg-[#3d4249]">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-[#3d4249] sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-[#3d4249] transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>

                <!-- Navigation Component -->
                <livewire:navigation.navigation />

                <!-- Hero Info Component -->
                <livewire:hero.info/>
                
            </div>
        </div>

        <!-- Hero Image Component -->
        <livewire:hero.image />
    </div>

    <!-- ===== PROJECTS SECTION===== -->
    <div class="bg-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Projects Component-->
            <livewire:project.project/>
        </div>
    </div>

    <!-- ===== FOOTER SECTION===== -->
    <section class="bg-[#3d4249]">
        <div class="flex justify-center pt-10">
            <h2 class="text-2xl font-extrabold text-gray-200">{{ __('Contact me') }}</h2>
        </div>
        <div class="max-w-screen-xl px-4 py-3 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <!-- Contact Component-->
                <livewire:contact.contact/>
            </nav>

            <!-- Social Link Component-->
            <livewire:contact.social-link/>
            
            <!-- Footer Link Component -->
            <livewire:navigation.footer-link />
        </div>
    </section>

</x-main-layout>