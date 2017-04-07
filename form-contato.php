<div class="form-container">
  <form class="form form-contato" id="formContato" name="" action="<?php echo URL;?>sendmail/send.php" method="post">
    <div class="input-group">
      <label for="nome">Nome</label>
      <input class="input input-text" id="nome" name="nome" type="text">
    </div>

    <div class="input-group">
      <label for="telefone">Telefone </label>
      <input class="input input-tel only-number" id="telefone" name="telefone" type="tel">
    </div>

    <div class="input-group">
      <label for="email">E-mail </label>
      <input class="input input-email" id="email" name="email" type="email">
    </div>

    <div class="input-group">
      <label for="mensagem">Mensagem: </label>
      <textarea class="input input-textarea" id="mensagem" name="mensagem"></textarea>
    </div>

    <div class="actions">
      <button id="btnSubmit" class="btn -alt" type="submit">Enviar</button>
    </div>
  </form>
</div>
