<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Usuario</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-8 ">
    <div class="max-w-4xl mx-auto bg-white rounded p-8 ">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Agregar Usuario</h2>
            
            <a href="{{ route('index') }}" class="bg-blue-900 hover:bg-blue-700 text-white text-[13px] py-2 px-4 rounded flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="inline-block w-4 h-4 mr-2 p-0"><path fill="#fff" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            Volver al Listado</a>

        </div>


        <form action={{route('create')}} method="POST">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Ingrese el nombre" class="form-input w-full  border focus:outline-none px-2 py-1 text-[14px] rounded-md">
                </div>
                <div>
                    <label for="surname" class="block text-gray-700 font-bold mb-2">Apellido</label>
                    <input type="text" id="surname" name="surname" placeholder="Ingrese el apellido" class="form-input w-full border focus:outline-none px-2 py-1 text-[14px] rounded-md">
                </div>
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" placeholder="Ingrese el E-mail" class="form-input w-full border-gray-300 border focus:outline-none px-2 py-1 text-[14px] rounded-md">
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 font-bold mb-2">Contraseña</label>
                <input type="password" name="password" placeholder="Ingrese una Constraseña" class="form-input w-[50%] border-gray-300 border focus:outline-none px-2 py-1 text-[14px] rounded-md">
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-900 hover:bg-blue-700 text-white text-[13px] py-2 px-14 rounded ">Guardar</button>
            </div>
        </form>
          
    </div>
</body>

</html>