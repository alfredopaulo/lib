from django.db import models


class Autor(models.Model):
    nome = models.CharField('Nome Autor', max_length=50)
    status_ativo = models.BooleanField(default=True)

    def __str__(self):
        return self.nome


class Livro(models.Model):
    isbn = models.CharField('ISBN', max_length=13)
    nome_livro = models.CharField('Nome do Livro', max_length=40)
    autor = models.ForeignKey(Autor, on_delete=models.PROTECT)
    ano_publicacao = models.DateField('Ano de Publicação', blank=True, null=True)
    status_ativo = models.BooleanField(default=True)

    def __str__(self):
        return self.nome_livro
