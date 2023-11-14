<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <title>Document</title>
</head>
<body class="container-base" style="padding-top: 1rem;">
    @if(session()->has('success'))
        <p>{{session('success')}}</p>
    @endif
    <h1 style="display:flex; justify-content: space-between; align-items: center">
        <span>Contacts</span>
        <div>
            <form method="get" action="{{}}">
                <input type="search"/>
            </form>
            <button class="btn-base">
                <a class="" href="{{ url('contacts/search-contact') }}">Search contact</a>
            </button>
            <button class="btn-base">
                <a class="" href="{{ url('contacts/add-contact') }}">Create contact</a>
            </button>
        </div>
    </h1>
    <table style="margin-top:1rem; width: 100%;">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone_num</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{ $contact->name}}</td>
            <td>{{ $contact->email}}</td>
            <td>{{ $contact->phone_num}}</td>
            <td>{{ $contact->created_at}}</td>
            <td>{{ $contact->updated_at}}</td>
            <td>
                <a href="{{route('contact.edit', ['contact'=> $contact])}}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{ route('contact.delete', ['contact' => $contact]) }}">
                    @csrf
                    @method('delete')
                    <button class="btn-base" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>