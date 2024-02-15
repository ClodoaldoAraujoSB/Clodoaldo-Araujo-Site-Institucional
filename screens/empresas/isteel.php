<style>

  #btn-empresa {
    border: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #div_centro_titulo {
    width: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #div_lateral_titulo {
    width: 40%;
  }

  @media only screen and (max-width: 768px) {
    
    #div_centro_titulo {
      display: none;
    }

  }

</style>

<!-- MODAL - INICIO -->
<div class="modal fade" id="isteelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark">
          <div class="modal-header" style="border: 0px;">
            <div id="div_lateral_titulo">
                <img src="../logos/logo-isteel.png" alt="Logo Super Business" style="height: 30px;">
            </div>
            <div id="div_centro_titulo">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">iSteel</h1>
            </div>
            <div id="div_lateral_titulo" style="text-align: right;">
                <button type="button" style="background-color: #fafafa;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body text-light" style="text-align: center;">
          A iSteel é uma startup do ramo de Tecnologia. É um aplicativo para celular com uma plataforma web para conectar as empresas do ramo de ferro e aço aos consumidores e às empresas transportadoras ou motoristas autônomos. 
O objetivo do aplicativo é facilitar a transação entre o consumidor, o lojista e o processo de entrega.
Clodoaldo Araújo é um empreendedor visionário. Em 1997, após concluir seu MBA na University of California, trouxe ao Brasil uma ideia inovadora: reformular as transações comerciais no setor de ferro e aço. Originalmente, propôs a criação de sites para lojistas, uma ação revolucionária na época em que poucas pessoas entendiam o conceito de site e muitas não tinham acesso à internet. O site da Web 1.0, carente de interação, permitia aos lojistas listar produtos e condições de negociação, exigindo que consumidores interessados enviassem confirmações por fax. Entretanto, devido ao cenário tecnológico inadequado no Brasil na época, com muitos lojistas e consumidores sem acesso a computadores, a ideia não prosperou.
Em 2018, durante uma temporada da Rota da Inovação gravada na Suíça, Clodoaldo viu a oportunidade de reviver a ideia. Introduziu no Brasil um aplicativo, adaptado às necessidades atuais do público, e assim nasceu o App iSteel.
          </div>
          <!--<div class="modal-footer" id="btn-empresa">
            <button type="button" class="btn btn-light text-dark">Save changes</button>
          </div>-->
        </div>
      </div>
    </div>
<!-- MODAL - FINAL -->