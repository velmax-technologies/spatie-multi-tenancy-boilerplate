@extends('layouts.landing')

@section('content')

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Workspace | LiquorPOS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden bg-slate-950">

    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden">

        <div
            class="absolute -top-40 left-1/2 h-[500px] w-[500px] -translate-x-1/2 rounded-full bg-amber-500/20 blur-3xl">
        </div>

        <div
            class="absolute bottom-0 right-0 h-[400px] w-[400px] rounded-full bg-purple-500/20 blur-3xl">
        </div>

        <div
            class="absolute top-1/2 left-0 h-[300px] w-[300px] -translate-y-1/2 rounded-full bg-cyan-500/10 blur-3xl">
        </div>

    </div>

    <div class="relative z-10 flex h-screen">

        <!-- Left Branding Panel -->
        <div
            class="hidden lg:flex lg:w-1/2 flex-col justify-between border-r border-white/10 p-12">

            <div>

                <div class="flex items-center gap-3">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-500 font-black text-black">
                        LP
                    </div>

                    <span class="text-2xl font-black text-white">
                        LiquorPOS
                    </span>
                </div>

                <h1
                    class="mt-16 max-w-lg text-5xl font-black leading-tight text-white">

                    Launch Your Liquor Store
                    Workspace
                    In Minutes.
                </h1>

                <p
                    class="mt-6 max-w-md text-lg text-slate-300">

                    Manage inventory, sales, suppliers, customers,
                    and multiple branches from a single cloud dashboard.
                </p>

            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-4">

                <div
                    class="rounded-2xl border border-white/10 bg-white/5 p-5 backdrop-blur">

                    <h3 class="text-2xl font-bold text-white">
                        500+
                    </h3>

                    <p class="text-sm text-slate-400">
                        Stores
                    </p>

                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/5 p-5 backdrop-blur">

                    <h3 class="text-2xl font-bold text-white">
                        99.9%
                    </h3>

                    <p class="text-sm text-slate-400">
                        Uptime
                    </p>

                </div>

                <div
                    class="rounded-2xl border border-white/10 bg-white/5 p-5 backdrop-blur">

                    <h3 class="text-2xl font-bold text-white">
                        24/7
                    </h3>

                    <p class="text-sm text-slate-400">
                        Support
                    </p>

                </div>

            </div>

        </div>

        <!-- Signup Form -->
        <div
            class="flex w-full items-center justify-center px-6 lg:w-1/2">

            <div
                class="w-full max-w-md rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur-xl">

                <div class="text-center">

                    <h2
                        class="text-3xl font-black text-white">

                        Create Workspace
                    </h2>

                    <p
                        class="mt-2 text-slate-400">

                        Start your 14-day free trial
                    </p>

                </div>

                <form class="mt-8 space-y-4">

                    <!-- Business Name -->
                    <div>

                        <label
                            class="text-sm font-medium text-slate-300">
                            Business Name
                        </label>

                        <input
                            name="business_name"
                            type="text"
                            placeholder="Downtown Liquors"
                            class="mt-2 w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-white outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-500/30"
                        />

                    </div>

                    <!-- Owner Name -->
                    <input
                        name="owner_name"
                        type="text"
                        placeholder="Owner Name"
                        class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-white outline-none focus:border-amber-500"
                    >

                    <!-- Username -->
                    <input
                        name="user_name"
                        type="text"
                        placeholder="Owner Name"
                        class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-white outline-none focus:border-amber-500"
                    >

                     <!-- Phone -->
                    <input
                        name="phone"
                        type="text"
                        placeholder="Phone"
                        class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-white outline-none focus:border-amber-500"
                    >

                    <!-- Email -->
                    <input
                        name="email"
                        type="email"
                        placeholder="Email Address"
                        class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-white outline-none focus:border-amber-500"
                    >

                    <!-- Password -->
                    <input
                        name="password"
                        type="password"
                        placeholder="Password"
                        class="w-full rounded-xl border border-white/10 bg-slate-900/80 px-4 py-3 text-white outline-none focus:border-amber-500"
                    >

                    <!-- Create Account -->
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-amber-500 py-3 font-semibold text-black transition hover:bg-amber-400">

                        Create Workspace

                    </button>

                    <!-- Login Link -->
                    <p
                        class="text-center text-sm text-slate-400">

                        Already have an account?

                        <a
                            href="#"
                            class="font-medium text-amber-500 hover:text-amber-400">

                            Sign In

                        </a>

                    </p>

                </form>

            </div>

        </div>

    </div>

</body>
</html>

@endsection