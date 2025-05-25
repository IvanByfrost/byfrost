<form id="observadorForm" class="space-y-4">
  <h1 class="text-2xl font-bold mb-4">Observador del Estudiante</h1>
  <input type="hidden" id="observacionId" />

  <div>
    <label class="block font-semibold">Nombre del Coordinador:</label>
    <input type="text" id="coordinador" class="w-full border p-2 rounded" required />
  </div>

  <div>
    <label class="block font-semibold">Nombre del Estudiante:</label>
    <input type="text" id="estudiante" class="w-full border p-2 rounded" required />
  </div>

  <div>
    <label class="block font-semibold">Observación:</label>
    <textarea id="observacion" class="w-full border p-2 rounded" rows="4" placeholder="Descripción de la observación..."
      required></textarea>
  </div>

  <div>
    <label class="block font-semibold">Fecha:</label>
    <input type="date" id="fecha" class="w-full border p-2 rounded" required />
  </div>

  <div class="flex gap-4">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
    <button type="reset" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Limpiar</button>
  </div>
</form>