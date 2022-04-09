
<html>
<?php




 



?>
    <form name="cadastrarLivro" action="<?= URL ?>/livros/cadastrarLivro" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Cadastrar livro</legend>
            
            <input type="hidden" name="action" value="cadastrarLivro">
            
            <label for="nome">Titulo:</label>
            <input type="text" id="titulo" name="titulo" value="" />
            
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="" />
            
            <label for="status">Status:</label>
            <input type="text" id="status" name="stats" value="" />
            
            <input type="submit" value="cadastrarLivro"/>
            <input  type="reset" value="Limpar" />
            <?php
             echo "<a href='".URL. "/paginas/home'>Voltar 2</a>";

            ?>


        </fieldset>
    </form>
</html>
