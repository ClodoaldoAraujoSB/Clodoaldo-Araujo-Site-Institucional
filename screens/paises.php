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
            transform: translateX(calc(-250px * 7));
        }
    }

    .slider {
        background: white;
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 960px;

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
            width: calc(250px * 14);
        }

        .slide {
            height: 75px;
            width: 125px;
        }
    }

</style>

<div class="slider">
    <div class="slide-track">
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
            <img src="../logos/paises/brasil.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/brasil.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/brasil.png" height="75"alt="" />
        </div>
        <div class="slide">
            <img src="../logos/paises/brasil.png" height="75"alt="" />
        </div>
    </div>
</div>