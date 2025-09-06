<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Add New Residence</title>
</head>

<body>
    <nav class="flex p-5">
        <h1 class="flex-1 text-2xl font-thin">Add New Residence</h1>
        <a href="{{ route('index') }}">
            <button class="text-white bg-indigo-500 py-2 px-4 rounded-md hover:bg-indigo-600">View List</button>
        </a>
    </nav>
    <form action="{{ route('store') }}" method="post" class="max-w-sm rounded-xl bg py-5 px-10 mx-auto">
        @csrf
        <label for="fistName">First Name:</label><br>
        <input type="text" name="firstName" id="firstName" class="border px-2 py-1 rounded w-full"
            value="{{ old('firstName') }}"><br>

        <label for="middleName">Middle Name:</label><br>
        <input type="text" name="middleName" id="middleName" class="border px-2 py-1 rounded w-full"
            value="{{ old('middleName') }}"><br>

        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastName" id="lastName" class="border px-2 py-1 rounded w-full"
            value="{{ old('lastName') }}"><br>

        <div class="flex gap-3">
            <div>
                <label for="birthDate">Birth Date:</label><br>
                <input type="date" name="birthDate" id="birthDate" class="border px-2 py-1 rounded "
                    value="{{ old('birthDate') }}">
            </div>
            <div class="flex-1">
                <label for="gender">Gender:</label><br>
                <select name="gender" id="gender" class="border rounded px-2 py-1 w-full">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age" class="border rounded px-2 py-1 w-full"
            value="{{ old('age') }}"><br>

        <label for="contactNumber">Contact Number:</label><br>
        <input type="number" name="contactNumber" id="contactNumber" class="border px-2 py-1 rounded w-full"
            value="{{ old('contactNumber') }}"><br>

        <label for="email">Email Address:</label><br>
        <input type="emaial" name="email" id="email" class="border rounded px-2 py-1 w-full"
            value="{{ old('email') }}"><br>
        <input type="submit" value="Submit"
            class="rounded-md mt-2 py-2 px-4 bg-green-500 hover:bg-green-600 text-white">
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    @endif
</body>

</html>
