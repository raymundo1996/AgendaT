window.addEventListener('load', () => {
    console.log("hola")



function archivo(evt) {
    var files = evt.target.files;     
    
    for (var i = 0, j; j = files[i]; i++) {
    
      if (!j.type.match('image.*')) {
          continue;
      }

      var reader = new FileReader();

      reader.onload = (function(theFile) {
          return function(e) {
            
           document.querySelector('#list').innerHTML = ['<img heigth = "150px" width="150px" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
          };
      })(j);

      reader.readAsDataURL(j);
    }
}

document.querySelector(".file").addEventListener('change', archivo, false);


var visible = document.querySelector(".visible")

visible.style.display = "none"

var cambiar = document.querySelector(".color");
cambiar.style.background = "#49da6c"
cambiar.style.fontsize = "100%"
cambiar.style.color = "black"





})