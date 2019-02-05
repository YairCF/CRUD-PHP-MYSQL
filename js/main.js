var btnCategories = document.getElementById("btnCategories");

btnCategories.addEventListener("click",ValidarCampos);

function ValidarCampos(){
    var nombre = document.getElementById("nameCategories");
    var description = document.getElementById("descriptionCategories");
   
    if(nombre.length == 0 || description.length == 0){
        alert("Ingresa un dato");
        return false;
    }else{
        alert("Save");
    }
}