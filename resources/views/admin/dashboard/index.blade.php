<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Merlyn89</title>


</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="ml-5">
        admin panel
        {{ dd(app()->getLocale()) }}
    </div>
</body>

</html>
