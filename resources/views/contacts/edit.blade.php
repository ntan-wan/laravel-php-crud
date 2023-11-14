<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <title>Document</title>
</head>
<body class="page-contact-create">
    <form class="form-base" method="post" action="{{route('contact.update', ['contact' => $contact])}}">
        @csrf
        @method('put')
        <h1 class="text-xl font-semibold">Edit Contact</h1>
        <div class="wrapper-inputs" style="margin-top:1.5rem;">
            <div class="wrapper-label-input">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="{{$contact->name}}"/>
            </div>

            <div class="wrapper-label-input">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{$contact->email}}"/>
            </div>

            <div class="wrapper-label-input">
                <label for="phone_num">Phone Number</label>
                <input id="phone_num" name="phone_num"  type="text" value="{{$contact->phone_num}}"/>
            </div>
        </div>
        <div style="margin-top:2rem">
            <button style="width: 100%" type="submit" class="btn-base">Submit</button>
        </div>
    </form>
</body>
</html>