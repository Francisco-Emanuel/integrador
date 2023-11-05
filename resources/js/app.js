import './bootstrap';
import axios from 'axios';



//COMENTADO
document.addEventListener('DOMContentLoaded', function () {
    //DELETAR CARD
    const deleteButtons = document.querySelectorAll('.delete-card');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const title = button.getAttribute('data-title');
            const confirmDelete = confirm(`Tem certeza de que deseja excluir o card "${title}"?`);

            if (confirmDelete) {
                // Enviar uma solicitação POST para a rota de exclusão
                axios.post(`/deleteCard`, { title: title })
                    .then(response => {
                        window.location.reload();
                    })
                    .catch(error => {
                        console.error('Erro:', error);
                    });
            }
        });
    });//FIM DELETAR CARD

    //LOGOUT
    const lBtn = document.querySelector('#userprofile');

    lBtn.addEventListener('click', ()=>{
        const confirmDelete = confirm('Você deseja sair?')

        if (confirmDelete) {
            axios.post('/logout').then(response => {window.location.reload()}).catch(error=>{console.log('Erro:', error)});
        }
    })
    //FIM LOGOUT
});
//--------