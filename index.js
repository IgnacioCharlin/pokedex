let nombre='';
let tipo='';
let img='';
const fetchData = async () =>{
    try {
        const res = await fetch('https://pokeapi.co/api/v2/pokemon/5');
        const data = await res.json();
        img = data.sprites.other.dream_world.front_default;
        nombre =data.forms[0].name
        tipo = data.types[0].type.name;

        console.log(img +' '+ nombre+' ' + tipo);
    } catch (error) {
        console.log(error);
    }
    console.log(nombre);
}

fetchData();// declaración de la variable

function realizaProceso(valorCaja1, valorCaja2){
            var parametros = {
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
                    $("#resultado").html(response);
                }
            });
}