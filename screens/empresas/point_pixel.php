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
<div class="modal fade" id="point_pixelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark">
          <div class="modal-header" style="border: 0px;">
            <div id="div_lateral_titulo">
                <img src="../logos/logo-point_pixel.png" alt="Logo Super Business" style="height: 20px;">
            </div>
            <div id="div_centro_titulo">
                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Point Pixel</h1>
            </div>
            <div id="div_lateral_titulo" style="text-align: right;">
                <button type="button" style="background-color: #fafafa;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body text-light" style="text-align: center;">
          A Point Pixel oferece às empresas um trabalho completo de conteúdo, design e estratégia de forma única e integrada. A empresa acredita que a qualidade e o sucesso do serviço estão interligados, defendendo a ideia de que ambos devem caminhar juntos para proporcionar resultados eficazes.
          </div>
          <!--<div class="modal-footer" id="btn-empresa">
            <button type="button" class="btn btn-light text-dark">Save changes</button>
          </div>-->
        </div>
      </div>
    </div>
<!-- MODAL - FINAL -->