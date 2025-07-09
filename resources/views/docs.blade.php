<div class="mx-auto container px-4 sm:px-6 lg:px-8">
    <div class="flex">
        {{-- SIDEBAR --}}
        <aside id="sidebar"
               class="fixed inset-y-0  z-40 xl:w-64 bg-white dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-800 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="flex flex-col h-full pt-16">
                <div class="flex items-center justify-between p-4 border-b border-zinc-200 dark:border-zinc-800 md:hidden">
                    <span class="text-lg font-semibold text-zinc-900 dark:text-white">Navigation</span>
                    <button id="closeSidebar" class="p-2 text-zinc-500 hover:text-zinc-700 dark:hover:text-zinc-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 overflow-y-auto px-4 py-6">
                    <nav class="space-y-1">
                        <div class="pb-4">
                            <h3 class="text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider mb-3">Getting Started</h3>
                            <ul class="space-y-1">
                                <li><a href="#introduction"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Introduction</a>
                                </li>
                                <li><a href="#installation"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Installation</a>
                                </li>
                                <li><a href="#configuration"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Configuration</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pb-4">
                            <h3 class="text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider mb-3">Components</h3>
                            <ul class="space-y-1">
                                <li><a href="#buttons"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Buttons</a>
                                </li>
                                <li><a href="#cards"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Cards</a>
                                </li>
                                <li><a href="#forms"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Forms</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pb-4">
                            <h3 class="text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider mb-3">Advanced</h3>
                            <ul class="space-y-1">
                                <li><a href="#theming"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Theming</a>
                                </li>
                                <li><a href="#customization"
                                       class="sidebar-link flex items-center px-3 py-2 text-sm text-zinc-700 dark:text-zinc-300 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">Customization</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </aside>

        <main class="flex-1 md:ml-64">
            <div class="flex">
                <!-- Content Area -->
                <div class="flex-1 min-w-0">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                        <article class="prose prose-zinc dark:prose-invert max-w-none">
                            {!! $this->content() !!}
                        </article>

                        <!-- Footer -->
                        <footer class="mt-16 pt-8 border-t border-zinc-200 dark:border-zinc-800">
                            <div class="flex flex-col md:flex-row justify-between items-center">
                                <p class="text-zinc-600 dark:text-zinc-400 mb-4 md:mb-0">
                                    © 2024 Luno UI. Built with Tailwind CSS.
                                </p>
                                <div class="flex space-x-6">
                                    <a href="#" class="text-zinc-600 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">GitHub</a>
                                    <a href="#" class="text-zinc-600 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Twitter</a>
                                    <a href="#" class="text-zinc-600 dark:text-zinc-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Discord</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>

                <!-- Table of Contents -->
                <aside id="toc"
                       class="hidden bg-white dark:bg-zinc-900 border-l border-zinc-200 dark:border-zinc-800 transform transition-transform duration-300 ease-in-out xl:block w-64 flex-shrink-0">
                    <div class="fixed top-16 h-[calc(100vh-4rem)] overflow-y-auto p-6">
                        <h3 class="text-sm font-semibold text-zinc-900 dark:text-white mb-4">On this page</h3>
                        <nav class="space-y-2">
                            <a href="#introduction"
                               class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Introduction</a>
                            <a href="#installation"
                               class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Installation</a>
                            <a href="#configuration"
                               class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Configuration</a>
                            <a href="#buttons" class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Buttons</a>
                            <a href="#cards"
                               class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Cards</a>
                            <a href="#forms"
                               class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Forms</a>
                            <a href="#theming" class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Theming</a>
                            <a href="#customization"
                               class="toc-link block text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors py-1">Customization</a>
                        </nav>
                    </div>
                </aside>
            </div>
        </main>

    </div>
</div>
