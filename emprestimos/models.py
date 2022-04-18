from django.db import models

from alunos.models import Aluno
from livros.models import Livro


class Emprestimo(models.Model):
    PENDENTE = 'PEN.'
    QUITADO = 'QUI.'

    STATUS_EMPRESTIMO = [
        (PENDENTE, 'Pendente'),
        (QUITADO, 'Quitado'),
    ]

    aluno = models.ForeignKey(Aluno, on_delete=models.PROTECT)
    data_emprestimo = models.DateField('Data de emprestimo', auto_now_add=True)
    data_limite = models.DateField('Data limite de devolução', blank=True, null=True)
    data_devolucao = models.DateField('Data de devolução', blank=True, null=True)
    status_emprestimo = models.CharField('Status do emprestimo', max_length=5,
        choices=STATUS_EMPRESTIMO, default=PENDENTE)    
    status_ativo = models.BooleanField(default=True)
    livros = models.ManyToManyField(Livro, related_name='emprestimos')

    def __str__(self):
        return 'Aluno: {}, Status do Emprestimo: {}'.format(self.aluno.nome,
            self.status_emprestimo)
