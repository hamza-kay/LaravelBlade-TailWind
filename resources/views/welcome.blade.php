<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pricing Plans</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">




</head>

<body class="font-serif p-6">



<div class="container mx-auto">

    <div class="flex justify-between">

        @include('plan', ['name' => 'Monthly'])

        @include('plan', ['name' => '2'])

        @include('plan', ['name' => '3'])

        @include('plan', ['name' => '4'])

    </div>

</div>






</body>


</html>