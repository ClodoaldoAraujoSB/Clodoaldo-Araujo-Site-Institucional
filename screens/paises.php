<style>
    @mixin white-gradient {
        background: linear-gradient(
            to right,
            rgba(255, 255, 255, 1) 0%,
            rgba(255, 255, 255, 0) 100%
        );
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-125px * 28)); /* Ajuste conforme o número de imagens */
        }
    }

    .slider {
        background: transparent;
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 85%;

        &::before,
        &::after {
            @include white-gradient;
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
        }

        &::after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        &::before {
            left: 0;
            top: 0;
        }

        .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(125px * 56); /* Dobro do número de imagens */
        }

        .slide {
            height: 75px;
            width: 125px;
            margin-right: 25px;
        }

        .slide img {
            width: 100%;
            height: 100%;
        }
    }

    @media only screen and (max-width: 768px) {

        .slider {
            width: 100%;
            height: 100px;

            &::before,
            &::after {
                @include white-gradient;
                z-index: 2;
            }

            .slide {
                height: 50px;
                width: 60px;
                margin-right: 15px;
            }

        }

    }

</style>

<div class="slider">
    <div class="slide-track" onanimationiteration="restartAnimation()">
        <div class="slide">
            <img src="../logos/paises/brasil.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/china.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/egito.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/espanha.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/franca.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/mexico.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paises-baixos.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/portugal.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/suica.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/alemanha.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/argentina.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/colombia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/italia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estados-unidos.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/dinamarca.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/inglaterra.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/uruguai.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/chile.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/peru.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/bolivia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paraguai.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/panama.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/finlandia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/grecia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/catar.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/emirados-arabes-unidos.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estonia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/israel.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/jordania.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/letonia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/lituania.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/rep-tcheca.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/turquia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/ucrania.png" alt="" />
        </div>

        <div class="slide">
            <img src="../logos/paises/brasil.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/china.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/egito.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/espanha.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/franca.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/mexico.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paises-baixos.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/portugal.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/suica.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/alemanha.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/argentina.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/colombia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/italia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estados-unidos.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/dinamarca.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/inglaterra.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/uruguai.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/chile.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/peru.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/bolivia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paraguai.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/panama.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/finlandia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/grecia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/catar.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/emirados-arabes-unidos.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estonia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/israel.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/jordania.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/letonia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/lituania.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/rep-tcheca.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/turquia.png" alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/ucrania.png" alt="" />
        </div>

    </div>
</div>

<!--<script>
    function restartAnimation() {
        const slider = document.querySelector('.slider');
        slider.querySelector('.slide-track').style.animation = 'none';
        setTimeout(() => {
            slider.querySelector('.slide-track').style.animation = 'scroll 40s linear infinite';
        }, 0);
    }
</script>-->