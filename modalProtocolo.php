  <div id="id01" class="w3-modal">
    <div class="w3-modal-content" width="50%">
      <div class="w3-container" style="color:black; padding-top:20px;padding-bottom:20px;">
        <img style="filter: invert(60%) sepia(37%) saturate(6349%) hue-rotate(83deg) brightness(99%) contrast(106%);"  src="./imgs/confimação.svg" width="35%" alt="">
        <h4>Denuncia salva com sucesso</h4>
        <h4>O protocolo da sua denuncia é: <?php echo $_SESSION['num'];?></h4>

        <a href="./inicio.php">
            <button src="./inicio.php" class="btn-protocolo">
                Voltar para o inicio
            </button>
        </a>
      </div>
    </div>
  </div>