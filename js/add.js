
//funcion para agregar una nueva area
function addsong(){
    //llamamos el formulario mediante su id
    let form = new FormData(document.getElementById('modal1'))
    form.append("", "")
    $.ajax({
        type: "POST",
        dataType: "html",
        url: "inc/add_song.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returnpage) {
            alert(returnpage)
            mostrar_tabla();
        }
    })
}
//funcion para eliminar area
function deletesong(id) {
    // asiganamos el ID a un campo oculto
            
            swal({
            title: 'Esta seguro de eliminar el registro?',
            text: "Esta accion no se puede deshacer!!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borralo!'
            }).then(function () {
            $.post("inc/delete_song.php", {
                id:id,
            },
            function (data, status) {
                    // recargamos los datos para mostrar los cambios
                    swal("Exito!","El registro se borro satisfactoriamente","success")
                    mostrar_tabla();
                    }
                );
            })
}

function loadsong(id) {
    // asiganamos el ID a un campo oculto
    $.post("inc/song_details.php", {
        id:id   
    },
        function (data, status) {
            alert(`${data}`)
            //PARSE json data
            var song = JSON.parse(data);
            
            // Assing existing values to the modal popup fields
            $("#mtitulo").val(song.titulo);
            $("#malbum").val(song.album);
            $("#mgenero").val(song.genero);
            $("#mduracion").val(song.duracion);
            $("#martista").val(song.artista);
            $("#maño").val(song.año);
            $("#mid").val(song.id)
        }

    );
    $("#updatesong").modal("open");
}

function updatesong() {
    // obtenermos los valores para modificar
    let form = new FormData(document.getElementById('updatesong'))
    form.append("", "")

    $.ajax({
        type: "POST",
        dataType: "html",
        url: "inc/update_song.php",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returnpage) {
            if (returnpage === "Operación satisfactoria") {
                $("#updatesong").modal("close");
                mostrar_tabla();
            }
            else {
               alert(returnpage)
            }
        }
    });
}
//Creamos una funcion para mostrar los datos de los sliders
function mostrar_tabla() {
    $.get("inc/load.php", function (data) {
        $(".contenido").html(data);
    });
}
// esta funcion es para cargar el slider
//Creamos una funcion para eliminar sliders

$(document).ready(function () {
mostrar_tabla();
});