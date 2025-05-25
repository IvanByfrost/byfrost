    <form id="citacionForm" class="space-y-4">
      <h1 class="text-2xl font-bold mb-4">Gestión de Citaciones</h1>
      <input type="hidden" id="citacionId" />

      <div>
        <label class="block font-semibold">Nombre del Coordinador:</label>
        <input type="text" id="coordinador" class="w-full border p-2 rounded" required />
      </div>

      <div>
        <label class="block font-semibold">Nombre del Citado:</label>
        <input type="text" id="citado" class="w-full border p-2 rounded" required />
      </div>

      <div>
        <label class="block font-semibold">Motivo de la Citación:</label>
        <textarea id="motivo" class="w-full border p-2 rounded" required placeholder="Ej: Incumplimiento de normas..."></textarea>
      </div>

      <div>
        <label class="block font-semibold">Fecha y Hora:</label>
        <input type="datetime-local" id="fechaHora" class="w-full border p-2 rounded" required />
      </div>

      <div class="flex gap-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        <button type="reset" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Limpiar</button>
      </div>
    </form>