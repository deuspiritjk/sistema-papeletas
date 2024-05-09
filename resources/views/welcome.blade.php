<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body class="">

    <div x-data="dropdown">
        <button @click="toggle">Click here</button>
        <div x-show="open">hided content</div>
    </div>

    <script>

        //x-data="dropdown" -> dropdown = {open = false, toggle (){this.open = open}}
        document.addEventListener('alpine:init', () => {
            Alpine.data('dropdown', () => ({
                open: false,

                toggle() {
                    this.open = !this.open
                }
            }))
        })
    </script>

</body>

</html>