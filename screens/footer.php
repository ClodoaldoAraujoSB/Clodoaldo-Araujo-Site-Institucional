<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .footer-site {
      padding: 20px;
      background-color: #c10109;
      display: flex;
      justify-content: center;
    }

    .content-footer {
      width: 93%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .footer-icone-principal {
      width: 38%;
      display: inline-block;
    }

    .b_footer_icone_principal {
      color: #c10109;
    }

    .footer-center {
      width: 23%;
      display: inline-block;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .texto_politica {
      font-size: 15px;
      text-transform: capitalize;
    }

    .footer-menu {
      width: 38%;
      display: inline-block;
      float: right;
    }

    .list-menu {
      display: flex;
      justify-content: flex-end;
      margin: 0px;
    }

    .item-menu {
      display: inline-block;
      padding: 0px 10px 0px 10px;
    }

    .footer-button-logo {
      font-size: 15px;
      color: #e1e1e1;
      font-family: inherit;
      font-weight: 500;
      cursor: pointer;
      position: relative;
      border: none;
      background: none;
      text-transform: uppercase;
      transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
      transition-duration: 400ms;
      transition-property: color;
    }

    .footer-button {
      font-size: 15px;
      color: #e1e1e1;
      font-family: inherit;
      font-weight: 500;
      cursor: pointer;
      position: relative;
      border: none;
      background: none;
      text-transform: uppercase;
      transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
      transition-duration: 400ms;
      transition-property: color;
    }

    .footer-button:focus,
    .footer-button:hover {
      color: #fff;
    }

    .footer-button:focus:after,
    .footer-button:hover:after {
      width: 100%;
      left: 0%;
    }

    .footer-button:after {
      content: "";
      pointer-events: none;
      bottom: -2px;
      left: 50%;
      position: absolute;
      width: 0%;
      height: 2px;
      background-color: #fff;
      transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
      transition-duration: 400ms;
      transition-property: width, left;
    }

    .footer-button svg {
      fill: #fff;
      margin: 2px;
    }

    .footer-button.ative {
      color: #fff;
      border-bottom: 2px solid #fff;
    }

    @media only screen and (max-width: 768px) {
      .footer-site {
        padding: 20px;
        background-color: #c10109;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .content-footer {
        width: 93%;
        display: flex;
        flex-direction: column;
        /* Empilhar elementos verticalmente */
        align-items: center;
        text-align: center;
        /* Centralizar o conteúdo horizontalmente */
      }

      .footer-icone-principal {
        width: 38%;
        margin-bottom: 10px;
        /* Adicionar margem inferior para espaçamento */
      }

      .b_footer_icone_principal {
        color: #c10109;
      }

      .footer-center {
        width: 23%;
        text-align: center;
        margin-bottom: 10px;
        /* Adicionar margem inferior para espaçamento */
      }

      .texto_politica {
        font-size: 15px;
        text-transform: capitalize;
      }

      .footer-menu {
        width: 38%;
        margin-top: 10px;
        /* Adicionar margem superior para espaçamento */
      }

      .list-menu {
        display: flex;
        justify-content: flex-end;
        margin: 0;
      }

      .item-menu {
        padding: 0 10px;
      }

      .footer-button-logo,
      .footer-button {
        font-size: 15px;
        color: #e1e1e1;
        font-family: inherit;
        font-weight: 500;
        cursor: pointer;
        border: none;
        background: none;
        text-transform: uppercase;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: color;

        /* Adicionado para centralizar verticalmente */
        align-self: center;
      }

      .footer-button:focus,
      .footer-button:hover {
        color: #fff;
      }

      .footer-button:focus:after,
      .footer-button:hover:after {
        width: 100%;
        left: 0%;
      }

      .footer-button:after {
        content: "";
        pointer-events: none;
        bottom: -2px;
        left: 50%;
        position: absolute;
        width: 0%;
        height: 2px;
        background-color: #fff;
        transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
        transition-duration: 400ms;
        transition-property: width, left;
      }

      .footer-button svg {
        fill: #fff;
      }

      .footer-button.ative {
        color: #fff;
        border-bottom: 2px solid #fff;
      }

    }
  </style>

</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="facebook" viewBox="0 0 16 16">
      <path
        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="whatsapp" viewBox="0 0 16 16">
      <path
        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
    </symbol>
    <symbol id="linkedin" viewBox="0 0 16 16">
      <path
        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4" />
    </symbol>
    <symbol id="email" viewBox="0 0 16 16">
      <path
        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
    </symbol>
  </svg>

  <footer class="footer-site">
    <div class="content-footer">
      <div class="footer-icone-principal">
        <a href="index.php"><button class="footer-button-logo" style="background-color: #fff;"><b
              class="b_footer_icone_principal">Clodoaldo Araújo</b></button></a>
      </div>
      <div class="footer-center">
        <a href="politica-de-privacidade.php"><button
            class="footer-button <?php echo ($pagina == 'politica-de-privacidade.php') ? 'ative' : ''; ?>">
            <p class="texto_politica" style="margin: 0px;">Politica de privacidade</p>
          </button></a>
      </div>
      <div class="footer-menu">
        <ul class="list-menu">
          <li class="item-menu"><a target="_blank" href="https://wa.me/5519994636818"><button class="footer-button"><svg
                  width="17" height="17">
                  <use xlink:href="#whatsapp" />
                </svg></button></a></li>
          <li class="item-menu"><a target="_blank"
              href="https://www.instagram.com/clodoaldoaraujoo/?igshid=MzRlODBiNWFlZA%3D%3D"><button
                class="footer-button"><svg width="17" height="17">
                  <use xlink:href="#instagram" />
                </svg></button></a></li>
          <li class="item-menu"><a target="_blank" href="https://www.facebook.com/clodoaldo.araujo/"><button
                class="footer-button"><img
                  style="width: 16px; height: 16px; padding: 0px; margin: 3px 3px 2px 3px; border-radius: 0px;"
                  src="../logos/facebook (1) (1).png" width="17" height="17">
                <use xlink:href="#facebook" /></img>
              </button></a></li>
          <li class="item-menu"><a target="_blank" href="https://www.linkedin.com/in/clodoaldoaraujo/"><button
                class="footer-button"><img
                  style="width: 16px; height: 16px; padding: 0px; margin: 3px 3px 2px 3px; border-radius: 0px;"
                  src="../logos/linkedin (2) (1).png" width="20" height="20">
                <use xlink:href="#linkedin" /></img>
              </button></a></li>
          <li class="item-menu"><a href="contato.php"><button class="footer-button"><svg width="17" height="17">
                  <use xlink:href="#email" />
                </svg></button></a></li>
        </ul>
      </div>
    </div>
  </footer>

</body>

</html>