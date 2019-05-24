<h1>Dashboard... Você está logado.</h1>

Aqui será possível visualizar informações do seu anúncio, tais como </br>
quantidade de acesso diário, semanal, mensal ou mesmo anual,</br>
também é disponibilizado o tempo médio que os usuários visualizaram seu anúncio.

<br />

<form id="randomInsert" action="<?php echo URL;?>dashboard/xhrInsert/" method="post">
	<input type="text" name="text" />
	<input type="submit" />
</form>

<br />

<div id="listInserts"></div>