<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <title>Document</title>
</head>
<body class="page-contact-create">
    <form class="form-base" method="get" action="{{route('contact.search')}}">
        @csrf
        @method('get')
        <h1 class="text-xl font-semibold">Search Contact</h1>
        <div class="wrapper-inputs" style="margin-top:1.5rem;">
            <div class="wrapper-label-input">
                <label for="name">Name</label>
                <input id="name" name="query" type="text" placeholder="Search by name"/>
            </div>

        </div>
        <div style="margin-top:2rem">
            <button style="width: 100%" type="submit" class="btn-base">Submit</button>
        </div>
    </form>
</body>
</html>