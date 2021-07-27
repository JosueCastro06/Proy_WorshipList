<h1>Entra a crear cancion</h1>

<form>

    <input type="text" id="name" class="nombre-input" placeholder="Nombre de la canción">
    <input type="autor" id="autor" class="autor-input" placeholder="Nombre de la canción">

    <!---<input list="datalist-tipo" name="browser" id="datalist-tipo-cancion">-->
    <br>
    <br>
    <select id="datalist-tipo">

        <option value="alabanza">Alabanza</option>
        <option value="adoración">Adoración</option>

    </select>

    <textarea rows="5" cols="40" placeholder="Letra" required></textarea>

    <input type="submit">

</form>
