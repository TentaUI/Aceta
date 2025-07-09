<div>
    <x-layouts.svg />

    <main class="relative">
        <!-- Hero Section -->
        <section class="py-20 sm:py-32">
            <div class="mx-auto container px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="mb-6 text-3xl font-bold text-zinc-900 sm:text-5xl dark:text-white">
                        Meet
                        <span class="text-indigo-600 dark:text-indigo-400">Tenta UI,</span>
                        Built for Livewire
                    </h1>
                    <p class="mx-auto mb-8 max-w-2xl text-lg md:text-xl text-zinc-600 dark:text-zinc-400">
                        Focus on building your app’s logic, not its layout. Tenta UI brings ready-to-use components that feel native to
                        Livewire and Tailwind.
                    </p>
                    <div class="flex flex-row justify-center gap-4">
                        <a
                            href="#"
                            class="inline-flex items-center rounded-lg bg-indigo-600 px-6 py-3 font-medium text-white transition-colors hover:bg-indigo-700"
                        >
                            Get Started
                            <x-icon name="lucide-chevron-right" class="ml-2 size-4"></x-icon>
                        </a>
                        <a
                            href="#features"
                            class="inline-flex items-center rounded-lg border border-zinc-300 px-6 py-3 font-medium text-zinc-700 transition-colors hover:bg-zinc-50 dark:border-zinc-700 dark:text-zinc-300 dark:hover:bg-zinc-800"
                        >
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="bg-zinc-50 py-20 dark:bg-zinc-800/50">
            <div class="mx-auto container px-4 sm:px-6 lg:px-8">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold lg:text-4xl">Why Choose Tenta UI?</h2>
                    <p class="mx-auto max-w-2xl text-xl text-zinc-600 dark:text-zinc-400">
                        The ultimate UI kit for modern Livewire projects
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900/30">
                            <x-icon name="lucide-zap" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"></x-icon>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold">Lightning Fast</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Built with performance in mind. Components are optimized for speed and efficiency.
                        </p>
                    </div>

                    <div class="rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900/30">
                            <x-icon name="lucide-palette" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"></x-icon>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold">Fully Customizable</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Every component can be customized to match your brand and design requirements.
                        </p>
                    </div>

                    <div class="rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900/30">
                            <x-icon name="lucide-shield-check" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"></x-icon>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold">Accessible</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Built with accessibility in mind, following WCAG guidelines and best practices.
                        </p>
                    </div>

                    <div class="rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900/30">
                            <x-icon name="lucide-smartphone" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"></x-icon>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold">Responsive</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            All components are fully responsive and work perfectly on all device sizes.
                        </p>
                    </div>

                    <div class="rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900/30">
                            <x-icon name="lucide-code" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"></x-icon>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold">Developer Friendly</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Clean, semantic code with excellent TypeScript support and documentation.
                        </p>
                    </div>

                    <div class="rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-indigo-100 dark:bg-indigo-900/30">
                            <x-icon name="lucide-heart" class="h-6 w-6 text-indigo-600 dark:text-indigo-400"></x-icon>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold">Open Source</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            Free and open source. Contribute to the project and help make it better.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Used By Section -->
        <section class="py-20">
            <div class="mx-auto container px-4 sm:px-6 lg:px-8">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold lg:text-4xl">What developers are saying</h2>
                    <p class="text-xl text-zinc-600 dark:text-zinc-400">Trusted by developers around the world</p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-xl bg-zinc-50 p-6 dark:bg-zinc-800">
                        <div class="mb-4 flex items-center">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">
                                S
                            </div>
                            <div class="ml-3">
                                <div class="font-semibold">Sarah Chen</div>
                                <div class="text-sm text-zinc-600 dark:text-zinc-400">Frontend Developer</div>
                            </div>
                        </div>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            "Tenta UI has completely transformed our development workflow. The components are beautiful and incredibly easy
                            to customize."
                        </p>
                    </div>

                    <div class="rounded-xl bg-zinc-50 p-6 dark:bg-zinc-800">
                        <div class="mb-4 flex items-center">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">
                                M
                            </div>
                            <div class="ml-3">
                                <div class="font-semibold">Marcus Johnson</div>
                                <div class="text-sm text-zinc-600 dark:text-zinc-400">Full Stack Developer</div>
                            </div>
                        </div>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            "The accessibility features are outstanding. Finally, a component library that takes a11y seriously from the
                            ground up."
                        </p>
                    </div>

                    <div class="rounded-xl bg-zinc-50 p-6 dark:bg-zinc-800">
                        <div class="mb-4 flex items-center">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">
                                A
                            </div>
                            <div class="ml-3">
                                <div class="font-semibold">Alex Rivera</div>
                                <div class="text-sm text-zinc-600 dark:text-zinc-400">UI/UX Designer</div>
                            </div>
                        </div>
                        <p class="text-zinc-600 dark:text-zinc-400">
                            "Perfect balance between design flexibility and development speed. Our team loves working with Tenta UI."
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-zinc-50 py-20 dark:bg-zinc-800/50">
            <div class="mx-auto container px-4 sm:px-6 lg:px-8">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-zinc-900 sm:text-4xl dark:text-white">What developers are saying</h2>
                    <p class="text-xl text-zinc-600 dark:text-zinc-400">
                        See how {{ config('app.name') }} is helping teams build better products
                    </p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-900">
                        <div class="mb-4 flex items-center">
                            <div class="flex text-yellow-500">
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                            </div>
                        </div>
                        <p class="mb-4 text-zinc-600 dark:text-zinc-400">
                            "{{ config('app.name') }} has completely transformed how we build our documentation. The components are
                            beautiful and the developer experience is fantastic."
                        </p>
                        <div class="flex items-center">
                            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/50">
                                <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400">JS</span>
                            </div>
                            <div>
                                <p class="font-medium text-zinc-900 dark:text-white">John Smith</p>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">Senior Developer at TechCorp</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-900">
                        <div class="mb-4 flex items-center">
                            <div class="flex text-yellow-500">
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                            </div>
                        </div>
                        <p class="mb-4 text-zinc-600 dark:text-zinc-400">
                            "The best documentation framework I've used. Clean, fast, and incredibly easy to customize. Our team
                            productivity has increased significantly."
                        </p>
                        <div class="flex items-center">
                            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/50">
                                <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400">MJ</span>
                            </div>
                            <div>
                                <p class="font-medium text-zinc-900 dark:text-white">Maria Johnson</p>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">Lead Designer at StartupXYZ</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-zinc-200 bg-white p-6 dark:border-zinc-800 dark:bg-zinc-900">
                        <div class="mb-4 flex items-center">
                            <div class="flex text-yellow-500">
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                                <x-icon name="lucide-star" class="size-5 fill-yellow-400" />
                            </div>
                        </div>
                        <p class="mb-4 text-zinc-600 dark:text-zinc-400">
                            "Amazing attention to detail and user experience. {{ config('app.name') }} makes creating professional
                            documentation effortless and enjoyable."
                        </p>
                        <div class="flex items-center">
                            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/50">
                                <span class="text-sm font-medium text-indigo-600 dark:text-indigo-400">DW</span>
                            </div>
                            <div>
                                <p class="font-medium text-zinc-900 dark:text-white">David Wilson</p>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">CTO at InnovateLab</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20">
            <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="mb-4 text-3xl font-bold lg:text-4xl">Ready to get started?</h2>
                <p class="mx-auto mb-8 max-w-2xl text-xl text-zinc-600 dark:text-zinc-400">
                    Join thousands of developers who are already building amazing applications with Tenta UI.
                </p>
                <div class="flex flex-col justify-center gap-4 sm:flex-row">
                    <a href="#" class="rounded-lg bg-indigo-600 px-8 py-3 font-medium text-white transition-colors hover:bg-indigo-700">
                        Browse Components
                    </a>
                    <a
                        href="#"
                        class="rounded-lg px-8 py-3 font-medium text-indigo-600 transition-colors hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-300"
                    >
                        View Examples
                    </a>
                </div>
            </div>
        </section>
    </main>

    <x-layouts.inc.footer />
</div>
