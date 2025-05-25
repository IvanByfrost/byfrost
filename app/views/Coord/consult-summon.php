    <form id="consultarCitaciones">
        <h1>Citaciones</h1>
        <div>
            <p><label for="buscarPor">Buscar por: <label></label></p>
            <select id="buscarPor" name="buscarPor" required>
                <option value="Estudiante">Estudiante</option>
                <option value="Acudiente">Padre de familia</option>
            </select>
        </div>
        
        <div>
            <p><label for="tipo de identificacion">Tipo de identificación: <label></label></p>
            <select id="tipoIdentificacion" name="tipoIdentificacion" required>
                <option value="CC">Cédula de Ciudadanía</option>
                <option value="TI">Tarjeta de Identidad</option>
                <option value="CE">Cédula de Extranjería</option>
            <input type="text" id="nombreEstudiante" name="nombreEstudiante" required>
            </select>
        </div>
        <br>
        <button type="submit">Consultar</button>
    </form>