<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Add Residence</title>
</head>

<body>
    <h1 class="text-2xl font-thin">Add Residence</h1>
    <a href="{{ route('index') }}">
        <button class="text-white bg-indigo-500 py-2 px-4 rounded-md hover:bg-indigo-600">View List</button>
    </a>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for="fistName">First Name:</label><br>
        <input type="text" name="firstName" id="firstName" class="border" value="{{ old('firstName') }}"><br>

        <label for="middleName">Middle Name:</label><br>
        <input type="text" name="middleName" id="middleName" class="border" value="{{ old('middleName') }}"><br>

        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastName" id="lastName" class="border" value="{{ old('lastName') }}"><br>

        <label for="birthDate">Birth Date:</label><br>
        <input type="date" name="birthDate" id="birthDate" class="border" value="{{ old('birthDate') }}"><br>

        <label for="gender">Gender:</label><br>

        <select name="gender" id="gender" class="border">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>


        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age" class="border" value="{{ old('age') }}"><br>

        <label for="contactNumber">Contact Number:</label><br>
        <input type="number" name="contactNumber" id="contactNumber" class="border" value="{{ old('contactNumber') }}"><br>

        <label for="email">Email Address:</label><br>
        <input type="emaial" name="email" id="email" class="border" value="{{ old('email') }}"><br>
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
