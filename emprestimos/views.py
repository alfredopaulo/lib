from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy

from .models import Emprestimo


class IndexEmprestimoView(TemplateView):
    template_name = 'paginas/emprestimos/index.html'


class CadastrarEmprestimoView(CreateView):
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    success_url = reverse_lazy('emprestimos-listar')
    fields = [
        'aluno',
        'data_limite',
        'livros',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Emprestimo'

        return context


class AlterarEmprestimoView(UpdateView):
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    success_url = reverse_lazy('emprestimos-listar')
    fields = [
        'aluno',
        'data_limite',
        'livros',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Emprestimo'

        return context


class DevolucaoEmprestimoView(UpdateView):
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    success_url = reverse_lazy('index')
    fields = [
        'data_devolucao',
        'status_emprestimo',
        'livros',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Emprestimo'
        # context['teste'] = self.get_object
        print(self.object.livros.all())

        return context


class ListarEmprestimosView(ListView):
    template_name = 'paginas/emprestimos/list.html'
    model = Emprestimo