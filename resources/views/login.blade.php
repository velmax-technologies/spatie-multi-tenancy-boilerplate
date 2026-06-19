<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | LiquorPOS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-50 dark:bg-slate-950 flex items-center justify-center">

    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 left-1/2 h-[500px] w-[500px] -translate-x-1/2 rounded-full bg-amber-500/20 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-[400px] w-[400px] rounded-full bg-purple-500/20 blur-3xl"></div>
        <div class="absolute left-0 top-1/2 h-[300px] w-[300px] -translate-y-1/2 rounded-full bg-cyan-500/10 blur-3xl"></div>
    </div>

    <!-- Login Container -->
    <div class="relative z-10 w-full max-w-md px-6">

        <!-- Logo -->
        <div class="text-center">
            <h1 class="text-3xl font-black text-slate-900 dark:text-white">
                Liquor<span class="text-amber-500">POS</span>
            </h1>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
                Sign in to your dashboard
            </p>
        </div>

        <!-- Card -->
        <div class="mt-8 rounded-2xl border border-slate-200 bg-white/70 p-8 shadow-xl backdrop-blur-xl dark:border-white/10 dark:bg-white/5">

            <form class="space-y-5">

                <!-- Email -->
                <div>
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Email</label>
                    <input
                        type="email"
                        placeholder="you@example.com"
                        class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-amber-500 focus:ring-2 focus:ring-amber-500/30 dark:border-white/10 dark:bg-slate-900 dark:text-white"
                    />
                </div>

                <!-- Password -->
                <div>
                    <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Password</label>
                    <input
                        type="password"
                        placeholder="••••••••"
                        class="mt-2 w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition focus:border-amber-500 focus:ring-2 focus:ring-amber-500/30 dark:border-white/10 dark:bg-slate-900 dark:text-white"
                    />
                </div>

                <!-- Options -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                        <input type="checkbox" class="accent-amber-500">
                        Remember me
                    </label>

                    <a href="#" class="text-amber-500 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full rounded-xl bg-amber-500 py-3 font-semibold text-black shadow-lg transition hover:scale-[1.02] hover:bg-amber-400">
                    Sign In
                </button>

                <!-- Divider -->
                <div class="flex items-center gap-4">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-white/10"></div>
                    <span class="text-xs text-slate-500">or</span>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-white/10"></div>
                </div>

                <!-- Social Login -->
                <button
                    type="button"
                    class="w-full rounded-xl border border-slate-200 bg-white py-3 font-medium text-slate-700 transition hover:bg-slate-50 dark:border-white/10 dark:bg-white/5 dark:text-white dark:hover:bg-white/10">
                    Continue with Google
                </button>

            </form>
        </div>

        <!-- Footer -->
        <p class="mt-6 text-center text-xs text-slate-500 dark:text-slate-400">
            © 2026 LiquorPOS. All rights reserved.
        </p>

    </div>

</body>
</html>