    <form id="coordinadorForm" class="space-y-4">
      <input type="hidden" id="professorId" />
      <h1 class="text-2xl font-bold mb-4">Formulario Docente - Grupo de Clase</h1>

      <div>
        <label class="block font-semibold">Nombre del Docente:</label>
        <input type="text" id="nombre" class="w-full border p-2 rounded" required />
      </div>

      <div>
        <label class="block font-semibold">Grupo de Clase a asignar:</label>
        <input type="text" id="grupo" class="w-full border p-2 rounded" placeholder="Ej: 3A, 2B, 4C" required />
      </div>

      <div class="flex gap-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        <button type="reset" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Limpiar</button>
      </div>
    </form>