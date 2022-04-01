let btn = document.querySelector(".bouton");
let mod = document.querySelector(".hide-1");
let bool = 1;

btn.addEventListener("click", function (){
    if (bool === 0){
        mod.className = "hide-1";
        btn.innerHTML = "Ajouter aux favoris";
        bool = 1;
    } else{
        mod.className = "hide-2";
        btn.innerHTML = "Retirer des favoris";
        bool = 0;
    }
}, false);