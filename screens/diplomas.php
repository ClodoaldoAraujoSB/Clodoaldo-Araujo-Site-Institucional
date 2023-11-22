<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Diplomas || Clodoaldo Araújo</title>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
      display: block;
      max-width: 90%;
      max-height: 90%;
      margin: auto;
    }

    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      color: white;
      font-size: 30px;
      cursor: pointer;
    }
  </style>
  <script>

document.addEventListener('DOMContentLoaded', function () {
    const galeria = document.getElementById('galeria');
    var modalElement = document.getElementById('modal');

    // Arrays para armazenar as informações
    const array1 = [];
    const array2 = [];
    const array3 = [];
    const array4 = [];

    // Função para adicionar evento de clique a uma imagem
    function addClickEvent(img) {
        img.onclick = function () {
            var modal = document.getElementById('modal');
            var expandedImg = document.getElementById('expanded-image');

            modal.style.display = 'block';
            expandedImg.src = img.src;
            expandedImg.style.height = '80%';
            expandedImg.style.width = 'auto';

            // Centraliza horizontalmente e verticalmente
            expandedImg.style.display = 'block';
            expandedImg.style.margin = '0 auto';
            expandedImg.style.position = 'relative';
            expandedImg.style.top = '50%';
            expandedImg.style.transform = 'translateY(-50%)';
        };
    }

    // Faz uma solicitação AJAX para obter os dados das imagens
    fetch('get_images.php')
        .then(response => response.json())
        .then(data => {
            // Manipula os dados e armazena nas arrays
            data.forEach((array, index) => {
                if (index === 0) {
                    array1.push(...array);
                } else if (index === 1) {
                    array2.push(...array);
                } else if (index === 2) {
                    array3.push(...array);
                } else if (index === 3) {
                    array4.push(...array);
                }

                // Exibe as imagens na página (substitua conforme necessário)
                const div = document.createElement('div');
                div.classList.add('grid-container');

                array.forEach(image => {
                    const img = document.createElement('img');
                    img.src = '../img/' + image;
                    div.appendChild(img);

                    // Adiciona o evento de clique à imagem
                    addClickEvent(img);
                });
                galeria.appendChild(div);
            });
        })
        .catch(error => console.error('Erro:', error));

    function closeModal() {
        var modal = document.getElementById('modal');
        modal.style.display = 'none';
    }

    modalElement.addEventListener('click', function (event) {
        if (event.target === modalElement) {
            closeModal();
        }
    });
});

</script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>
    <h1><p class="text-center"><b>Diplomas</b></p></h1>
    <div class="container text-center">
  <div class="row g-2">
    <div class="col-6">
      <span class="close" onclick="closeModal()"></span>
      <div class="p-3" id="modal"><img class="modal-content" id="expanded-image" src="../img/1997.jpg" width="75%"></div>
    </div>
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
    <div class="col-6">
      <div class="p-3"><img src="../img/081999.jpg" width="62%"></div>
    </div>
    <div class="col-6">
      <div class="p-3"><img src="../img/1999.jpg" width="62%"></div>
    </div>
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
    <div class="row g-2">
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
    <div class="col-6">
      <div class="p-3"><img src="../img/032001.jpg" width="62%"></div>
    </div>
    <div class="col-6">
      <div class="p-3"><img src="../img/2001.jpg" width="62%"></div>
    </div>
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
    <div class="col-6">
      <div class="p-3"><img src="../img/102003.jpg" width="62%"></div>
    </div>
    <div class="col-6">
      <div class="p-3"><img src="../img/2004.jpg" width="62%"></div>
    </div>
    <div class="col-6">
      <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
  </div>
</div>

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>