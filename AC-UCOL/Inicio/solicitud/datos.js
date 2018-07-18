window.addEventListener('load', () => {

    console.log("hola")

var formulario = document.querySelector("#submit")
 


formulario.addEventListener('click', () => {

 var selecion = document.querySelector("#nombre")

for (var index in selecion)
{
    document.write(selecion[index])
}
    

} )

})