// Pega o botão para abrir o modal
var openModalButton = document.getElementById("openModalButton");

// Pega o modal
var modal = document.getElementById("myModal");

// Pega o botão para fechar o modal
var closeButton = document.getElementsByClassName("close")[0];

// Quando o usuário clicar no botão, abre o modal
openModalButton.onclick = function() {
    modal.style.display = "block";
}

// Quando o usuário clicar no botão de fechar, fecha o modal
closeButton.onclick = function() {
    modal.style.display = "none";
}

// Quando o usuário clicar fora do modal, fecha o modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

