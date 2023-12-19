<style>

  .modal-content {
    background-image: url("../../logos/logo-spyderrace.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
  }

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

</style>

<!-- MODAL - INICIO -->
  <div class="modal fade" id="spyder_raceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-header" style="border: 0px;">
          <div id="div_lateral_titulo">
              <img src="../logos/logo-spyderrace.png" alt="Logo Super Business" style="height: 30px;">
          </div>
          <div id="div_centro_titulo">
              <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Spyder Race</h1>
          </div>
          <div id="div_lateral_titulo" style="text-align: right;">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        </div>
        <div class="modal-body text-light" style="text-align: center;">
        Spyder Race é um dos mais populares protótipos de automóveis nacionais. Desenvolvido pela empresa PW1-Tecnologia em Protótipos de propriedade do paulista Peter William Januário, utiliza como base tecnologia nacional, como motor, câmbio entre outros componentes. Possui inclusive uma categoria própria dentro do automobilismo.
        </div>
        <div class="modal-footer" id="btn-empresa">
          <a href="https://spyderrace.com.br/" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-light text-dark">Saiba Mais</button></a>
        </div>
      </div>
    </div>
  </div>
<!-- MODAL - FINAL -->