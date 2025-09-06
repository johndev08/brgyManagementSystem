<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>

</head>

<body>
    <h1 class="text-2xl font-thin">Barangay Residence</h1>
    <a href="{{ route('create') }}">
        <button class="border bg-emerald-500 mb-3 text-white py-2 px-4 rounded-md hover:bg-emerald-600 ">Add new
            Residence</button>
    </a>
    <div class="px-5">
        <table class="border-collapse table-auto w-full">
            <tr>
                <th class="bg-gray-500 text-white py-3">First Name</th>
                <th class="bg-gray-500 text-white py-3">Middle Name</th>
                <th class="bg-gray-500 text-white py-3">Last Name</th>
                <th class="bg-gray-500 text-white py-3">Birth Date</th>
                <th class="bg-gray-500 text-white py-3">Gender</th>
                <th class="bg-gray-500 text-white py-3">Age</th>
                <th class="bg-gray-500 text-white py-3">Contact</th>
                <th class="bg-gray-500 text-white py-3">Email</th>
                <th class="bg-gray-500 text-white py-3">Option</th>
            </tr>
            @foreach ($residence as $tbl_residents )
                <tr >
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->firstName }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->middleName }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->lastName }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->birthDate }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->gender }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->age }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->contactNumber }}</td>
                    <td class="bg-gray-300 text-center py-1">{{ $tbl_residents->email }}</td>
                    <td class="bg-gray-300 text-center py-1 ">
                        <div class="flex justify-center gap-1">
                            <a href="{{ route('edit', $tbl_residents->id) }}">
                                <button class="bg-blue-500 text-white py-1 px-2 rounded-md">Edit</button>
                            </a>
                            <form action="{{ route('delete', $tbl_residents->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="bg-red-500 text-white py-1 px-2 rounded-md" value="Delete">
                            </form>
                        </div>
                    </td>  
                </tr>
              
            @endforeach
        </table>
    </div>
</body>


</html>
