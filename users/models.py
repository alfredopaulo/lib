from django.contrib.auth.models import AbstractUser
from django.db import models


class User(AbstractUser):
    cpf = models.CharField('CPF', max_length=11, unique=True)
    telefone = models.CharField(max_length=11, blank=True, null=True)
    endereco = models.CharField('Endereço', max_length=50, blank=True, null=True)
