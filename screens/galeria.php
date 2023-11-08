<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
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

        function expandImage(imgElement) {
        var modal = document.getElementById('modal');
        var expandedImg = document.getElementById('expanded-image');
        
        modal.style.display = 'block';
        expandedImg.src = imgElement.src;
        expandedImg.style.height = '80%'; 
        expandedImg.style.width = 'auto'; 
          
        // Centraliza horizontalmente e verticalmente
        expandedImg.style.display = 'block';
        expandedImg.style.margin = '0 auto';
        expandedImg.style.position = 'relative';
        expandedImg.style.top = '50%';
        expandedImg.style.transform = 'translateY(-50%)';
        }

        function closeModal() {
        var modal = document.getElementById('modal');
        modal.style.display = 'none';
        }

    </script>

</head>
    <body>
        <!-- MENU SUPERIOR - INICIO -->
        <?php include("header.php"); ?>
        <!-- MENU SUPERIOR - FINAL -->

        <!-- TITULO - INICIO -->
        <h1 class="titulo_principal">Galeria</h1>
        <!-- TITULO - FINAL -->

        <!-- GALERIA INICIAL -->
        <div class="gallery">
            <div class="image">
                <img src="../img/1.jpg" alt="Imagem 1" onclick="expandImage(this)">
            </div>
            <div class="image">
                <img src="../img/2.jpg" alt="Imagem 2" onclick="expandImage(this)">
            </div>
            <div class="image">
                <img src="../img/3.jpg" alt="Imagem 3" onclick="expandImage(this)">
            </div>
        </div>
        <div class="gallery">
            <div class="image">
                <img src="../img/3.jpg" alt="Imagem 1" onclick="expandImage(this)">
            </div>
            <div class="image">
                <img src="../img/1.jpg" alt="Imagem 2" onclick="expandImage(this)">
            </div>
            <div class="image">
                <img src="../img/2.jpg" alt="Imagem 3" onclick="expandImage(this)">
            </div>
        </div>
        <!-- GALERIA FINAL -->

        <!-- IMAGEM DESTACADA - INICIO -->
        <div class="modal" id="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="expanded-image">
        </div>
        <!-- IMAGEM DESTACADA - FINAL -->

        <script src="script.js"></script>

        <!-- RODAPÉ - INICIO -->
        <?php include("footer.php"); ?>
        <!-- RODAPÉ - FINAL -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
