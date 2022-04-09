
<html>
    <form action="../../index.php" method="POST">
        <fieldset>
            <legend>Cadastrar livro</legend>
            
            <input type="hidden" name="action" value="cadastrarLivro">
            
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" value="" />
            
            <br>

            <label for="Nome">Nome do Livro:</label>
            <input type="text" id="Nome" name="nome" value="" />
            
            <br>

            <label for="id_autor">Autor:</label>
            <input type="text" id="id_autor" name="id_autor" value="" />
            
            <br>

            <label for="ano_publicacao">Ano publicação:</label>
            <input type="text" id="ano_publicacao" name="ano_publicacao" value="" />
            
            <br>

            <input type="submit" value="Cadastrar""/>
            <input  type="reset" value="Limpar" />
            <input type="button" value="Voltar" onclick="history.go(-1)">
        </fieldset>
    </form>
</html>
