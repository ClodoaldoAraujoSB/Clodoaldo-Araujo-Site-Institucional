<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Galeria de Imagens</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .grid-container {
            width: 24%;
            display: grid;
            padding: 10px;
            justify-items: center;
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 10px;
        }

        .titulo_principal {
            padding: 20px;
            text-align: center;
        }

        .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        }

        .image {
        display: inline-block;
        margin: 1px;
        cursor: pointer;
        }

        .image img {
        height: 250px; 
        }

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

</head>
<body>

    <!-- MENU SUPERIOR - INICIO -->
    <?php 
    $caminho = $_SERVER['PHP_SELF'];
    include("header.php"); 
    ?>
    <!-- MENU SUPERIOR - FINAL -->

    <!-- TITULO -->
    <h5 style="text-align: center; margin: 0px; padding-top: 16px;">Galeria</h5>

    <!-- GALERIA - INICIO -->
    <div>
        <div id="galeria" style="display: flex; justify-content: center;"></div>
    </div>
    <!-- GALERIA - FINAL -->

    <!-- IMAGEM DESTACADA - INICIO -->
    <div class="modal" id="modal">
        <span class="close" onclick="closeModal()"></span>
        <img class="modal-content" id="expanded-image">
    </div>
    <!-- IMAGEM DESTACADA - FINAL -->

    <!-- RODAPÉ - INICIO -->
    <?php include("footer.php"); ?>
    <!-- RODAPÉ - FINAL -->

</body>
</html>