let nombre='';
let tipo='';
let img='';
let i = 0;
let id = '';
function enviarDatos() {
    while(i<6){
    const fetchData = async () =>{
        try {
            const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${i}`);
            const data = await res.json();
            id = data.game_indices[5].game_index;
            img = data.sprites.other.dream_world.front_default;
            nombre =data.forms[0].name
            tipo = data.types[0].type.name;
            await realizaProceso(id,nombre,tipo,img);
        } catch (error) {
            console.log(error);
        }

    }
    i++;
    fetchData();

    }// declaración de la variable

    function realizaProceso(id,nombre , tipo , img){
        var parametros = {
            "id":id,
            "nombre" : nombre,
            "tipo" : tipo,
            "img" : img
        };
        $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'model/insertar.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
               window.location.href='index.php';
            }
        });
    }
}


