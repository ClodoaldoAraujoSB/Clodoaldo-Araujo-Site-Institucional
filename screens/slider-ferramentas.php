<?php

    include("../bd/bd.php");
    $sql_ferramenta = $conn->query("SELECT * FROM ferramentas LIMIT 7");
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: transparent;
        }

        .slider-container_f {
            width: 100%;
            margin: auto;
            overflow-x: hidden;
            white-space: nowrap;
            position: relative; 
        }

        .slider-wrapper_f {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .card-cursos_f {
            width: 260px;
            margin-right: 80px;
            border-radius: 10px;
            overflow: hidden;
            display: inline-block;
        }

        .card_f img {
            height: 260px;
            width: 260px;
            border-radius: 10px 10px 0 0;
        }

        .card-content_f {
            padding: 20px;
        }

        .arrow_f {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 24px;
            color: #333;
            background-color: #fff;
            padding: 0px 10px 0px 10px;
            border-radius: 50%;
            border: 1px solid #ddd;
            z-index: 1;
            user-select: none;
            transition: background-color 0.3s ease, opacity 0.3s ease;
        }

        .arrow-left_f {
            left: 10px;
        }

        .arrow-right_f {
            right: 10px;
        }

        .arrow_f:hover {
            background-color: #f9f9f9;
        }

        .arrow-hidden_f {
            opacity: 0; /* Torna as setas invisíveis */
            pointer-events: none; /* Impede que as setas sejam clicadas quando invisíveis */
        }

        @media screen and (max-width: 768px) {

            .card-cursos_f {
                width: 200px;
                margin-right: 40px; 
            }

        }

    </style>
</head>
<body>

<div class="slider-container_f">
    
    <div class="arrow_f arrow-left_f arrow-hidden_f" onclick="prevCard_f()" tabindex="0">❮</div>
    <div class="slider-wrapper_f">
        
        <!-- CARDS - INICIO -->

        <?php foreach ($sql_ferramenta as $ferramenta_f) { ?>
            <div class="col">
                <div class="card-cursos_f mb-3">
                    <div class="row g-0" style="flex-grow: 1;">
                        <div class="col" style="display: flex; flex-direction: column;">
                            <div style="display: flex; justify-content: center;">
                                <img src="../<?php echo $ferramenta_f["imagem"] ?>" class="img-fluid rounded-start" alt="..." style="width: 300px; height: 168px; border-radius: 10px;">
                            </div>
                            <div class="card-body card_ferramenta_f" id="card-ferramenta_f" style="padding: 0px;"> <!-- style="display: flex; flex-direction: column; align-items: center; text-align:center;" -->
                                <div class="titulo-ferramenta_f">
                                    <h5 class="card-title" style="font-size: 15px; margin: 0px;"> <?php echo $ferramenta_f["nome"]; ?> </h5>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- CARDS - INICIO -->

    </div>
    <div class="arrow_f arrow-right_f" onclick="nextCard_f()" tabindex="0">❯</div>
</div>

<script>
    const sliderWrapper_f = document.querySelector('.slider-wrapper_f');
    const arrowLeft_f = document.querySelector('.arrow-left_f');
    const arrowRight_f = document.querySelector('.arrow-right_f');
    let currentIndex_f = 0;

    function showCard_f(index) {
        const cards_f = document.querySelectorAll('.card-cursos_f');
        const cardWidth_f = cards_f[0].getBoundingClientRect().width + parseFloat(getComputedStyle(cards_f[0]).marginRight);
        sliderWrapper_f.style.transform = `translateX(${-index * cardWidth_f}px)`;
        currentIndex_f = index;
        toggleArrows_f();
    }

    function nextCard_f() {
        currentIndex_f = (currentIndex_f + 1) % (document.querySelectorAll('.card-cursos_f').length);
        showCard_f(currentIndex_f);
    }

    function prevCard_f() {
        currentIndex_f = (currentIndex_f - 1 + document.querySelectorAll('.card-cursos_f').length) % (document.querySelectorAll('.card-cursos_f').length);
        showCard_f(currentIndex_f);
    }

    function toggleArrows_f() {
        arrowLeft_f.classList.toggle('arrow-hidden_f', currentIndex_f === 0);
        arrowRight_f.classList.toggle('arrow-hidden_f', currentIndex_f >= document.querySelectorAll('.card-cursos_f').length - 4);
    }
</script>

</body>
</html>
