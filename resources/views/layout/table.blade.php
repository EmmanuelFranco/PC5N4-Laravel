<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-dziS2+E2vcS2+Az0W3RX/YsIb9UR3vHJajbm3P6p1F04eaRDTB72dEAAwhFcKeR6" crossorigin="anonymous">

    <title>Gestión de Usuario</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white rounded p-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Gestión de Usuarios</h2>
            <button type="submit" class="bg-blue-900 hover:bg-blue-700 text-white text-[13px] py-2 px-14 rounded">

                <a href="{{ route('create') }}" class="flex justify-center items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="inline-block w-4 h-4 mr-2">
                        <path fill="#fff" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                    </svg>
                    Agregar</a>
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Usuario</th>
                        <th class="px-4 py-2">Email</th>
                    </tr>
                </thead>
                @foreach ($datos as $dato)
                <tbody>
                    <td class="border px-4 py-2">{{ $dato->name }}</td>
                    <td class="border px-4 py-2">{{ $dato->email }}</td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</body>


</html>