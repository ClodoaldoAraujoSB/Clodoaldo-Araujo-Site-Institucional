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
        }

    }

</style>

<div class="slider">
    <div class="slide-track" onanimationiteration="restartAnimation()">
        <div class="slide">
            <img src="../logos/paises/brasil.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/china.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/egito.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/espanha.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/franca.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/mexico.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paises-baixos.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/portugal.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/suica.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/alemanha.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/argentina.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/colombia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/italia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estados-unidos.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/dinamarca.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/inglaterra.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/uruguai.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/chile.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/peru.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/bolivia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paraguai.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/panama.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/finlandia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/grecia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/catar.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/emirados-arabes-unidos.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estonia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/israel.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/jordania.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/letonia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/lituania.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/rep-tcheca.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/turquia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/ucrania.png" height="75"alt="" />
        </div>

        <div class="slide">
            <img src="../logos/paises/brasil.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/china.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/egito.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/espanha.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/franca.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/mexico.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paises-baixos.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/portugal.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/suica.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/alemanha.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/argentina.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/colombia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/italia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estados-unidos.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/dinamarca.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/inglaterra.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/uruguai.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/chile.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/peru.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/bolivia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/paraguai.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/panama.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/finlandia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/grecia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/catar.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/emirados-arabes-unidos.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/estonia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/israel.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/jordania.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/letonia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/lituania.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/rep-tcheca.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/turquia.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/ucrania.png" height="75"alt="" />
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