<!-- Modal Trigger -->

<!-- Modal Structure -->
<div id="modaladd" class="modal">
  <div class="modal-content">
    <h4>Ingresar una cancion</h4>
        <form id="modal1" method='post' enctype='multipart/form-data'>
            <div class="row">
                <div class="input-field col s6">
                    <input name="titulo" id="titulo" type="text" value='' class="validate">
                    <label for="Titulo">Titulo</label>
                </div>
                <div class="input-field col s6">
                    <input name="album" id="album" type="text" value='' class="validate">
                    <label for="album">Album</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="genero" id="genero" type="text" value='' class="validate">
                    <label for="genero">Genero</label>
                </div>
                <div class="input-field col s6">
                    <input name="duracion" id="duracion" type="text" value='' class="validate">
                    <label for="duracion">Duracion</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="artista" id="artista" type="text" value='' class="validate">
                    <label for="artista">Artista</label>
                </div>
                <div class="input-field col s6">
                    <input name="año" id="año" type="text" value='' class="validate">
                    <label for="año">Año</label>
                </div>
            </div>
            <div class='row center-align'>
                <button type='button' id="add" class='btn waves-effect black' onclick='addsong()'>GUARDAR</button> 
                <button type='button' class='modal-action modal-close btn waves-effect red darken-4'>CANCELAR</button>
            </div>
        </form>
    </div>
</div>

<div id="updatesong" class="modal">
  <div class="modal-content">
    <h4>Ingresar una cancion</h4>
        <form id="updatesong" method='post' enctype='multipart/form-data'>
            <div class="row">
                <div class="input-field col s6">
                    <input name="mtitulo" id="mtitulo" type="text" value='' class="validate">
                    <label for="mtitulo">Titulo</label>
                </div>
                <div class="input-field col s6">
                    <input name="malbum" id="malbum" type="text" value='' class="validate">
                    <label for="malbum">Album</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="mgenero" id="mgenero" type="text" value='' class="validate">
                    <label for="mgenero">Genero</label>
                </div>
                <div class="input-field col s6">
                    <input name="mduracion" id="mduracion" type="text" value='' class="validate">
                    <label for="mduracion">Duracion</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="martista" id="martista" type="text" value='' class="validate">
                    <label for="martista">Artista</label>
                </div>
                <div class="input-field col s6">
                    <input name="maño" id="maño" type="text" value='' class="validate">
                    <label for="maño">Año</label>
                </div>
            </div>
            <div class='row center-align'>
                <input name="mid" id="mid" type="text" value='' class="validate">
                <button type='button' id="add" class='btn waves-effect black' onclick='updatesong()'>GUARDAR</button> 
                <button type='button' class='modal-action modal-close btn waves-effect red darken-4'>CANCELAR</button>
            </div>
        </form>
    </div>
</div>