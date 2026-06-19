<!DOCTYPE html>
<html lang="en" data-theme="{{ $theme }}"">
<head>
     

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <main>
        @yield('content')
    </main>

     <script>
        (() => {
            const theme =
                document.documentElement.dataset.theme;

            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
                return;
            }

            if (theme === 'light') {
                return;
            }

            if (
                window.matchMedia(
                    '(prefers-color-scheme: dark)'
                ).matches
            ) {
                document.documentElement.classList.add('dark');
            }
        })();
</script>
</body>
</html>