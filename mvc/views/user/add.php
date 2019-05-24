<h1>Crie uma conta para anúnciar</h1>
<p></p><sup>Caso possua uma conta, basta clicar em login.</sup></p>

<form method="post" action="<?php echo URL;?>user/create">
  <label>Email</label><input type="text" name="login" /><br />
  <label>Senha</label><input type="password" name="password" /><br />
  <label>Tipo</label>
  <select name="role">
   <option value="default">Acompanhante</option>
  </select><br />
 <label>&nbsp;</label><input type="submit" />
</form>