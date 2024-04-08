const icons = document.querySelectorAll('.botao-icon');
const BotaoVisu = document.querySelectorAll('.avaliacaoVisu');
const estrela = document.querySelectorAll('.estrela')
const groupButtons = document.querySelectorAll('.group-button');

estrela.forEach((estrela, index) => {
  const nota = Number(estrela.value);
  const icons = groupButtons[index+1].querySelectorAll('.avaliacaoVisu');

  // Preenche as estrelas com base na nota do banco de dados
  icons.forEach((icon, i) => {
    if (i < nota) {
      icon.classList.add('fas');
    } else {
      icon.classList.remove('fas');
    }
  });
});

icons.forEach((icon, index) => {
  icon.addEventListener('mouseover', () => {
    // Adiciona a classe 'fas' para a estrela atual e anteriores ao passar o mouse
    for (let i = 0; i <= index; i++) {
      icons[i].classList.add('fas');
      icons[i].classList.remove('far');
    }

    // Remove a classe 'fas' para as estrelas seguintes ao passar o mouse
    for (let i = index + 1; i < icons.length; i++) {
      icons[i].classList.remove('fas');
      icons[i].classList.add('far');
    }
  });

  icon.addEventListener('mouseout', () => {
    // Remove a classe 'fas' para todas as estrelas se não houver clique
    if (clickedIndex === -1) {
      icons.forEach((icon) => {
        icon.classList.remove('fas');
        icon.classList.add('far');
      });
    } else {
      // Caso contrário, restaura o efeito clicado
      for (let i = 0; i <= clickedIndex; i++) {
        icons[i].classList.add('fas');
        icons[i].classList.remove('far');
      }

      for (let i = clickedIndex + 1; i < icons.length; i++) {
        icons[i].classList.remove('fas');
        icons[i].classList.add('far');
      }
    }
  });

  icon.addEventListener('click', () => {
    // Atualiza o índice clicado
    clickedIndex = index;

    // Adiciona a classe 'fas' para a estrela clicada e anteriores
    for (let i = 0; i <= index; i++) {
      icons[i].classList.add('fas');
      icons[i].classList.remove('far');
    }

    // Remove a classe 'fas' para as estrelas seguintes
    for (let i = index + 1; i < icons.length; i++) {
      icons[i].classList.remove('fas');
      icons[i].classList.add('far');
    }


  });
});
