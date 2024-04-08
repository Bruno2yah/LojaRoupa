const estrelaPerfil = document.querySelectorAll('.estrelaPerfil');
const groupButtonsPerfil = document.querySelectorAll('.group-buttonPerfil');

estrelaPerfil.forEach((estrelaPerfil, index) => {
    const nota = Number(estrelaPerfil.value);
    console.log(nota);
    const icons = groupButtonsPerfil[index].querySelectorAll('.avaliacaoVisuPerfil');
  
    // Preenche as estrelas com base na nota do banco de dados
    icons.forEach((icon, i) => {
      if (i < nota) {
        icon.classList.add('fas');
      } else {
        icon.classList.remove('fas');
      }
    });
  });