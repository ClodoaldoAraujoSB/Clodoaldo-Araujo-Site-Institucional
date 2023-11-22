<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeria de Modals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 80%;
            max-height: 80%;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .col-6 {
          align-items: center;
          justify-content: center;
          display: flex;
        }
    </style>

    <script>
        function openModal(imageSrc) {
            document.getElementById('myModal').style.display = 'block';
            var expandedImg = document.getElementById('expanded-image');
            
            expandedImg.src = imageSrc;
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
            document.getElementById('myModal').style.display = 'none';
        }

        window.addEventListener('click', function (event) {
            var modalElement = document.getElementById('myModal');
            if (event.target === modalElement) {
                closeModal();
            }
        });
    </script>

</head>
<body>
    
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- TITULO -->
    <h1 style="text-align: center;">Diplomas</h1>

    <!-- DIPLOMAS - INICIO -->
    <div class="container">
      <div class="row">
        <div class="col-6"><img src="../img/1997.jpg" width="75%" onclick="openModal('../img/1997.jpg')"></div>
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        <div class="col-6"><img src="../img/2004.jpg" width="75%" onclick="openModal('../img/2004.jpg')"></div>
      </div>
      <div class="row">
        <div class="col-6"><img src="../img/1999.jpg" width="75%" onclick="openModal('../img/1999.jpg')"></div>
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        <div class="col-6"><img src="../img/032001.jpg" width="75%" onclick="openModal('../img/032001.jpg')"></div>
      </div>
      <div class="row">
        <div class="col-6"><img src="../img/2001.jpg" width="75%" onclick="openModal('../img/2001.jpg')"></div>
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        <div class="col-6"><img src="../img/102003.jpg" width="75%" onclick="openModal('../img/102003.jpg')"></div>
      </div>
      <div class="row">
        <div class="col-6"><img src="../img/081999.jpg" width="75%" onclick="openModal('../img/081999.jpg')"></div>
        <div class="col-6">
          <div class="p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
      </div>
    </div>
    <!-- DIPLOMAS - FINAL -->

    <!-- MODAL - INICIO -->
    <div class="modal" id="myModal">
        <span class="close" onclick="closeModal"></span>
        <img class="modal-content" id="expanded-image">
    </div>
    <!-- MODAL - FINAL -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>

</body>
</html>
