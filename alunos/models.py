from django.db import models


class Aluno(models.Model):
    cpf = models.CharField('CPF', max_length=11, unique=True)
    matricula = models.CharField(max_length=8, unique=True)
    nome = models.CharField(max_length=50)
    email = models.EmailField(max_length=50)
    telefone = models.CharField(max_length=11)
    endereco = models.CharField('Endereço', max_length=60)
    status_pendencia = models.BooleanField(default=False)
    status_ativo = models.BooleanField(default=True)

    def __str__(self):
        return self.nome
