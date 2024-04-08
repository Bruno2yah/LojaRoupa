function modPerfil(){
    const botaoPerfil = document.querySelector("#btPerfilDropdown");
    const modalPerfil = document.querySelector("#modalPerfil");
    const closePerfil = document.querySelector("#btClosePerfil");

    botaoPerfil.onclick = function() {
        modalPerfil.showModal();
    }
    closePerfil.onclick = function() {
        modalPerfil.close();
    }
}