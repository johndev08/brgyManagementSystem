<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Edit</title>
</head>

<body>
    <form action="{{ route('update', $residence->id) }}" method="post">
        @csrf
        @method('PUT')
        <h1 class="text-xl">Edit
            <span class="font-bold">{{ $residence->firstName }}'s</span> Credentials
        </h1>
        <label for="fistName">First Name:</label><br>
        <input type="text" name="firstName" id="firstName" class="border"
            value="{{ old('middleName', $residence->firstName) }}"><br>

        <label for="middleName">Middle Name:</label><br>
        <input type="text" name="middleName" id="middleName" class="border" value="{{ $residence->middleName }}"><br>

        <label for="lastName">Last Name:</label><br>
        <input type="text" name="lastName" id="lastName" class="border" value="{{ $residence->lastName }}"><br>

        <label for="birthDate">Birth Date:</label><br>
        <input type="date" name="birthDate" id="birthDate" class="border" value="{{ $residence->birthDate }}"><br>

        <label for="gender">Gender:</label><br>

        <select name="gender" id="gender" class="border">
            <option value="Male" {{ $residence->gender === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female"{{ $residence->gender === 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other"{{ $residence->gender === 'Other' ? 'selected' : '' }}>Other</option>
        </select><br>


        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age" class="border" value="{{ $residence->age }}"><br>

        <label for="contactNumber">Contact Number:</label><br>
        <input type="number" name="contactNumber" id="contactNumber" class="border"
            value="{{ $residence->contactNumber }}"><br>

        <label for="email">Email Address:</label><br>
        <input type="emaial" name="email" id="email" class="border" value="{{ $residence->email }}"><br>
        <input type="submit" value="Submit"
            class="rounded-md mt-2 py-2 px-4 bg-green-500 hover:bg-green-600 text-white">
        <a href="{{ route('index') }}">
            <button type="button"
                class="bg-amber-500 py-2 px-2 rounded-md text-white hover:bg-amber-600">Cancel</button>
        </a>
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
