from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy

from .models import Aluno


class IndexAlunoView(TemplateView):
    template_name = 'paginas/alunos/index.html'


class CadastrarAlunoView(CreateView):
    template_name = 'paginas/alunos/form.html'
    model = Aluno
    success_url = reverse_lazy('alunos-listar')
    fields = [
        'cpf',
        'matricula',
        'nome',
        'email',
        'telefone',
        'endereco',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastar Aluno'

        return context


class AlterarAlunoView(UpdateView):
    template_name = 'paginas/alunos/form.html'
    model = Aluno
    success_url = reverse_lazy('alunos-listar')
    fields = [
        'cpf',
        'matricula',
        'nome',
        'email',
        'telefone',
        'endereco',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Aluno'

        return context


class ListarAlunoView(ListView):
    template_name = 'paginas/alunos/list.html'
    model = Aluno
