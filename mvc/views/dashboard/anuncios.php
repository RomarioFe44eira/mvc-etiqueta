<p>	dashboard / anuncios</p>

<h1>Anúncios... Você está logado.</h1>
Aqui será mostrado todos seus anúncios e possíveis alterações.
<hr>

<h2>Crie um anúncio</h2>
<p><sup>Informe os dados referente a sua profissão</sup></p>

<form id="anuncioInsert" action="<?php echo URL;?>dashboard/anuncio/xhrInsert/" method="post">
    <label>Nome Profissional</label><input type="text" name="nomePro" /><br />
    <label>Celular</label><input type="text" name="celularPro" /><br />
    
    <label>Cache/Hora</label><input type="text" name="cacheHoraPro" placeholder="Valor por hora de serviços" /><br />
    
    <label>Eu sou</label>
    <select name="genero">
        <option value="default">Mulher</option>
        <option value="default">Homem</option>
        <option value="default">Trans</option>
        <option value="default">Outros</option>
    </select><br />
 <label>&nbsp;</label><input type="submit" value="Registar Anúncio" />
</form>
<hr>

<h2>Lista de anúncios</h2>
<div id="ListAnunciosInsert">
    <table>
        <tr>
            <td>Nome Profissional</td>
            <td>Celular</td>
            <td>Cache/hora</td>
            <td>Genero</td>
        </tr>
    </table>
    
    
    
</div>