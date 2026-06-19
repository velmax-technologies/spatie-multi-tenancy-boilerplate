@extends('layouts.landing')

@section('content')

<section class="relative min-h-screen overflow-hidden bg-white dark:bg-slate-950">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img
            src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop"
            alt="Liquor Store"
            class="h-full w-full object-cover"
        >

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/70"></div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 via-black/50 to-amber-900/70"></div>
    </div>

    <!-- Animated Background Blobs -->
    <div class="absolute inset-0 overflow-hidden">

        <div
            class="absolute -top-40 -left-20 h-96 w-96 rounded-full bg-purple-500/20 blur-3xl animate-pulse">
        </div>

        <div
            class="absolute bottom-0 right-0 h-[500px] w-[500px] rounded-full bg-amber-500/20 blur-3xl animate-pulse">
        </div>

        <div
            class="absolute top-1/3 right-1/4 h-64 w-64 rounded-full bg-cyan-500/10 blur-3xl animate-bounce">
        </div>

    </div>

    <div class="relative z-10 mx-auto flex min-h-screen max-w-7xl items-center px-6">

        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">

            <!-- Content -->
            <div>

                <span
                    class="inline-flex items-center rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-white backdrop-blur-md">

                    🍷 Trusted by Liquor Stores Across Africa

                </span>

                <h1
                    class="mt-6 text-5xl font-black leading-tight text-white md:text-7xl">

                    Modern
                    <span
                        class="bg-gradient-to-r from-amber-400 via-orange-400 to-yellow-300 bg-clip-text text-transparent">
                        Liquor POS
                    </span>

                    Built For Growth
                </h1>

                <p
                    class="mt-6 max-w-xl text-lg text-slate-200">

                    Manage inventory, sales, customers, suppliers and multi-branch liquor operations from a single cloud dashboard.

                    Real-time analytics. Automated stock tracking. Lightning-fast checkout.
                </p>

                <!-- Buttons -->
                <div class="mt-10 flex flex-wrap gap-4">

                    <a href="#"
                        class="group rounded-xl bg-amber-500 px-8 py-4 font-semibold text-black transition hover:scale-105 hover:bg-amber-400">

                        Start Free Trial

                        <span
                            class="inline-block transition-transform group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                    <a href="#"
                        class="rounded-xl border border-white/20 bg-white/10 px-8 py-4 font-semibold text-white backdrop-blur-md transition hover:bg-white/20">

                        Watch Demo
                    </a>

                </div>

                <!-- Stats -->
                <div class="mt-12 flex gap-8">

                    <div>
                        <h3 class="text-3xl font-bold text-white">
                            500+
                        </h3>
                        <p class="text-slate-300">
                            Stores
                        </p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-white">
                            99.9%
                        </h3>
                        <p class="text-slate-300">
                            Uptime
                        </p>
                    </div>

                    <div>
                        <h3 class="text-3xl font-bold text-white">
                            24/7
                        </h3>
                        <p class="text-slate-300">
                            Support
                        </p>
                    </div>

                </div>

            </div>

            <!-- Dashboard Mockup -->
            <div class="relative">

                <!-- Floating Card 1 -->
                <div
                    class="absolute -left-6 top-10 hidden rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-xl lg:block animate-bounce">

                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full bg-green-500 text-xl">
                            💰
                        </div>

                        <div>
                            <p class="text-sm text-slate-300">
                                Today's Sales
                            </p>
                            <h4 class="font-bold text-white">
                                $12,450
                            </h4>
                        </div>
                    </div>

                </div>

                <!-- Floating Card 2 -->
                <div
                    class="absolute -right-4 bottom-12 hidden rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-xl lg:block animate-pulse">

                    <div class="flex items-center gap-3">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-full bg-amber-500 text-xl">
                            📦
                        </div>

                        <div>
                            <p class="text-sm text-slate-300">
                                Stock Alerts
                            </p>
                            <h4 class="font-bold text-white">
                                12 Items Low
                            </h4>
                        </div>
                    </div>

                </div>

                <!-- Main Dashboard -->
                <div
                    class="relative overflow-hidden rounded-3xl border border-white/20 bg-white/10 shadow-2xl backdrop-blur-xl">

                    <div
                        class="border-b border-white/10 p-4">

                        <div class="flex gap-2">
                            <span class="h-3 w-3 rounded-full bg-red-500"></span>
                            <span class="h-3 w-3 rounded-full bg-yellow-500"></span>
                            <span class="h-3 w-3 rounded-full bg-green-500"></span>
                        </div>

                    </div>

                    <div class="p-6">

                        <img
                            src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?q=80&w=1200&auto=format&fit=crop"
                            alt="POS Dashboard"
                            class="rounded-2xl"
                        >

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Scroll Indicator -->
    <div
        class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">

        <div
            class="flex h-12 w-7 justify-center rounded-full border-2 border-white">

            <div
                class="mt-2 h-3 w-1 rounded-full bg-white animate-pulse">
            </div>

        </div>

    </div>

</section>


<section class="relative bg-white py-24 dark:bg-slate-950">

    <!-- Background glow -->
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute left-1/4 top-10 h-72 w-72 rounded-full bg-purple-500/10 blur-3xl"></div>
        <div class="absolute bottom-10 right-1/4 h-72 w-72 rounded-full bg-amber-500/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6">

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-4xl font-black text-slate-900 dark:text-white md:text-5xl">
                Everything Your Liquor POS Needs
            </h2>
            <p class="mt-4 text-slate-600 dark:text-slate-300">
                Built for multi-store liquor operations, inventory control, and real-time sales intelligence.
            </p>
        </div>

        <!-- Feature Grid -->
        <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- Card -->
            <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl dark:border-white/10 dark:bg-white/5 backdrop-blur-xl">
                <div class="text-3xl">📊</div>
                <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">Real-time Analytics</h3>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    Track sales, peak hours, and product performance instantly across all branches.
                </p>
            </div>

            <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl dark:border-white/10 dark:bg-white/5 backdrop-blur-xl">
                <div class="text-3xl">📦</div>
                <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">Smart Inventory</h3>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    Auto-deduct stock on sale, get low-stock alerts, and prevent losses.
                </p>
            </div>

            <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl dark:border-white/10 dark:bg-white/5 backdrop-blur-xl">
                <div class="text-3xl">🏪</div>
                <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">Multi-Branch Control</h3>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    Manage multiple liquor stores from one central dashboard.
                </p>
            </div>

            <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl dark:border-white/10 dark:bg-white/5 backdrop-blur-xl">
                <div class="text-3xl">💳</div>
                <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">Fast Checkout</h3>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    Optimized POS flow for barcode scanning and instant billing.
                </p>
            </div>

            <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl dark:border-white/10 dark:bg-white/5 backdrop-blur-xl">
                <div class="text-3xl">🔐</div>
                <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">Role-based Access</h3>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    Secure staff permissions for cashiers, managers, and admins.
                </p>
            </div>

            <div class="group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-2 hover:shadow-xl dark:border-white/10 dark:bg-white/5 backdrop-blur-xl">
                <div class="text-3xl">☁️</div>
                <h3 class="mt-4 text-xl font-bold text-slate-900 dark:text-white">Cloud Sync</h3>
                <p class="mt-2 text-slate-600 dark:text-slate-300">
                    All data synced securely in real-time across devices and branches.
                </p>
            </div>

        </div>
    </div>
</section>



<section class="relative overflow-hidden bg-slate-950 py-28">

    <!-- Subtle grid background -->
    <div class="absolute inset-0 opacity-20">
        <div class="h-full w-full bg-[radial-gradient(#ffffff10_1px,transparent_1px)] [background-size:20px_20px]"></div>
    </div>

    <!-- Glow effects -->
    <div class="absolute inset-0">
        <div class="absolute left-1/4 top-0 h-[500px] w-[500px] rounded-full bg-amber-500/10 blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 h-[500px] w-[500px] rounded-full bg-purple-500/10 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-6xl px-6">

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-4xl font-black text-white md:text-5xl">
                Everything Ready.
                <span class="text-amber-400">Launch Your POS Today.</span>
            </h2>
            <p class="mt-4 text-slate-300">
                No setup delays. No complex onboarding. Start selling in minutes.
            </p>
        </div>

        <!-- CTA Grid -->
        <div class="mt-14 grid gap-6 lg:grid-cols-3">

            <!-- Left panel -->
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur">
                <h3 class="text-lg font-semibold text-white">Why LiquorPOS?</h3>

                <ul class="mt-4 space-y-3 text-sm text-slate-300">
                    <li>✔ Real-time inventory tracking</li>
                    <li>✔ Multi-store management</li>
                    <li>✔ Lightning-fast checkout</li>
                    <li>✔ Cloud backup & sync</li>
                </ul>
            </div>

            <!-- Center CTA (highlight) -->
            <div class="relative rounded-2xl border border-amber-500/40 bg-gradient-to-b from-amber-500/10 to-white/5 p-8 text-center backdrop-blur">

                <!-- Badge -->
                <span class="inline-block rounded-full bg-amber-500 px-4 py-1 text-xs font-semibold text-black">
                    Most Recommended
                </span>

                <h3 class="mt-5 text-2xl font-bold text-white">
                    Start Your Free Trial
                </h3>

                <p class="mt-3 text-sm text-slate-300">
                    Join liquor stores already scaling with smarter POS systems.
                </p>

                <a href="#"
                   class="mt-6 inline-block w-full rounded-xl bg-amber-500 px-6 py-3 font-semibold text-black shadow-lg transition hover:scale-105 hover:bg-amber-400">
                    Get Started Now
                </a>

                <p class="mt-4 text-xs text-slate-400">
                    No credit card • Setup in minutes
                </p>
            </div>

            <!-- Right panel -->
            <div class="rounded-2xl border border-white/10 bg-white/5 p-6 backdrop-blur">
                <h3 class="text-lg font-semibold text-white">What You Get</h3>

                <ul class="mt-4 space-y-3 text-sm text-slate-300">
                    <li>📊 Sales analytics dashboard</li>
                    <li>📦 Inventory automation</li>
                    <li>👥 Staff role management</li>
                    <li>⚡ Fast POS interface</li>
                </ul>
            </div>

        </div>

        <!-- Bottom trust strip -->
        <div class="mt-12 flex flex-wrap items-center justify-center gap-6 text-sm text-slate-400">
            <span>✔ 99.9% uptime</span>
            <span>✔ Secure cloud sync</span>
            <span>✔ 24/7 support</span>
        </div>

    </div>
</section>


<footer class="relative bg-slate-950 text-slate-300">

    <!-- Top gradient line -->
    <div class="h-px w-full bg-gradient-to-r from-transparent via-amber-500/40 to-transparent"></div>

    <div class="mx-auto max-w-7xl px-6 py-16">

        <div class="grid gap-10 md:grid-cols-4">

            <!-- Brand -->
            <div>
                <h3 class="text-2xl font-black text-white">
                    Liquor<span class="text-amber-400">POS</span>
                </h3>

                <p class="mt-4 text-sm text-slate-400">
                    Modern SaaS POS system built for liquor stores, bottle shops, and retail chains.
                </p>

                <div class="mt-6 flex gap-3">
                    <a href="#" class="h-10 w-10 rounded-full bg-white/10 hover:bg-white/20"></a>
                    <a href="#" class="h-10 w-10 rounded-full bg-white/10 hover:bg-white/20"></a>
                    <a href="#" class="h-10 w-10 rounded-full bg-white/10 hover:bg-white/20"></a>
                </div>
            </div>

            <!-- Product -->
            <div>
                <h4 class="font-semibold text-white">Product</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="#" class="hover:text-amber-400">Features</a></li>
                    <li><a href="#" class="hover:text-amber-400">Pricing</a></li>
                    <li><a href="#" class="hover:text-amber-400">Integrations</a></li>
                    <li><a href="#" class="hover:text-amber-400">Updates</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="font-semibold text-white">Company</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="#" class="hover:text-amber-400">About</a></li>
                    <li><a href="#" class="hover:text-amber-400">Careers</a></li>
                    <li><a href="#" class="hover:text-amber-400">Blog</a></li>
                    <li><a href="#" class="hover:text-amber-400">Contact</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="font-semibold text-white">Support</h4>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><a href="#" class="hover:text-amber-400">Help Center</a></li>
                    <li><a href="#" class="hover:text-amber-400">Documentation</a></li>
                    <li><a href="#" class="hover:text-amber-400">Status</a></li>
                    <li><a href="#" class="hover:text-amber-400">Security</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 text-sm text-slate-500 md:flex-row">

            <p>© 2026 LiquorPOS. All rights reserved.</p>

            <div class="flex gap-6">
                <a href="#" class="hover:text-amber-400">Privacy Policy</a>
                <a href="#" class="hover:text-amber-400">Terms</a>
                <a href="#" class="hover:text-amber-400">Cookies</a>
            </div>

        </div>

    </div>
</footer>

@endsection