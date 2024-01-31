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
          iSteel é uma empresa brasileira de tecnologia. Desenvolvemos um aplicativo para celular com uma plataforma web que conecta empresas do ramo de ferro e aço aos consumidores e empresas transportadoras ou motoristas autônomos.
          <br>
          O objetivo do aplicativo é facilitar a compra e venda de aço, sendo uma solução totalmente inovadora para o setor, automatizando o processo comercial e de logística dos distribuidores e garantindo um atendimento ágil e de qualidade para todos os clientes.
          <br>
          O iSteel para lojistas permite a gestão completa dos pedidos. Além de receber os pedidos através dele, também dá acesso a estatísticas de vendas, dados de pagamentos e opções de transportes, automatizando todo o processo comercial e logístico.
          </div>
          <!--<div class="modal-footer" id="btn-empresa">
            <button type="button" class="btn btn-light text-dark">Save changes</button>
          </div>-->
        </div>
      </div>
    </div>
<!-- MODAL - FINAL -->