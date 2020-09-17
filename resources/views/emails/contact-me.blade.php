@component('mail::message')
# A heading

Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam corrupti animi impedit ad natus iste minus nesciunt saepe est accusantium.

- A list
- goes
- here

@component('mail::button', ['url' => 'https://laracasts.com'])
    Visit Laracasts
@endcomponent

@endcomponent


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>It works again!</h1>

    <p>It sounds like you want to hear more about {{ $topic }}.</p>
</body>
</html> --}}
