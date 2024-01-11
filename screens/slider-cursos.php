<?php

    include("../bd/bd.php");
    $sql_ferramenta = $conn->query("SELECT * FROM curso LIMIT 7");
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
            background-color: #f2f2f2;
        }

        .slider-container {
            width: 100%;
            margin: auto;
            overflow-x: hidden;
            white-space: nowrap;
            position: relative; 
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .card-cursos {
            width: 206px;
            margin-right: 20px;
            border-radius: 10px;
            background-color: #fff;
            overflow: hidden;
            display: inline-block;
        }

        .card img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .card-content {
            padding: 20px;
        }

        .arrow {
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

        .arrow-left {
            left: 10px;
        }

        .arrow-right {
            right: 10px;
        }

        .arrow:hover {
            background-color: #f9f9f9;
        }

        .arrow-hidden {
            opacity: 0; /* Torna as setas invisíveis */
            pointer-events: none; /* Impede que as setas sejam clicadas quando invisíveis */
        }
    </style>
</head>
<body>

<div class="slider-container">
    
    <div class="arrow arrow-left arrow-hidden" onclick="prevCard()" tabindex="0">❮</div>
    <div class="slider-wrapper">
        
        <!-- CARDS - INICIO -->

        <?php foreach ($sql_ferramenta as $ferramenta) { ?>
            <div class="col">
                <div class="card-cursos mb-3">
                    <div class="row g-0" style="flex-grow: 1;">
                        <div class="col" style="display: flex; flex-direction: column;">
                            <div style="display: flex; justify-content: center;">
                                <img src="<?php echo $ferramenta["imagem"] ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="card-body card_ferramenta" id="card-ferramenta" style="padding: 0px;"> <!-- style="display: flex; flex-direction: column; align-items: center; text-align:center;" -->
                                <div class="titulo-ferramenta">
                                    <h5 class="card-title" style="font-size: 15px; margin: 0px;"> <?php echo $ferramenta["nome"]; ?> </h5>
                                </div>
                                <div class="botão-ferramenta">
                                <?php if (!empty($ferramenta['preço_antigo']) || $ferramenta['preco_antigo'] != "") {?>
                                    <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">De: <s><?php echo $ferramenta["preco_antigo"]?></s> Por: <b style="color: #c10109;"><?php echo $ferramenta["preco_atual"] ?></b></p>
                                <?php } else {?>
                                    <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">Preço: <b style="color: #c10109;"><?php echo $ferramenta["preco_atual"] ?></b></p>
                                <?php } ?>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- CARDS - INICIO -->

    </div>
    <div class="arrow arrow-right" onclick="nextCard()" tabindex="0">❯</div>
</div>

<script>
    const sliderWrapper = document.querySelector('.slider-wrapper');
    const arrowLeft = document.querySelector('.arrow-left');
    const arrowRight = document.querySelector('.arrow-right');
    let currentIndex = 0;

    function showCard(index) {
        const cards = document.querySelectorAll('.card-cursos');
        const cardWidth = cards[0].getBoundingClientRect().width + parseFloat(getComputedStyle(cards[0]).marginRight);
        sliderWrapper.style.transform = `translateX(${-index * cardWidth}px)`;
        currentIndex = index;
        toggleArrows();
    }

    function nextCard() {
        currentIndex = (currentIndex + 1) % (document.querySelectorAll('.card-cursos').length);
        showCard(currentIndex);
    }

    function prevCard() {
        currentIndex = (currentIndex - 1 + document.querySelectorAll('.card-cursos').length) % (document.querySelectorAll('.card-cursos').length);
        showCard(currentIndex);
    }

    function toggleArrows() {
        arrowLeft.classList.toggle('arrow-hidden', currentIndex === 0);
        arrowRight.classList.toggle('arrow-hidden', currentIndex === document.querySelectorAll('.card-cursos').length - 5);
    }
</script>

</body>
</html>