from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy

from .models import Emprestimo
from .forms import CadastrarEmprestimoForm, AlterarEmprestimoForm, DevolucaoEmprestimoForm


class IndexEmprestimoView(TemplateView):
    template_name = 'paginas/emprestimos/index.html'


class CadastrarEmprestimoView(CreateView):
    template_name = 'paginas/emprestimos/form.html'
    form_class = CadastrarEmprestimoForm
    success_url = reverse_lazy('emprestimos-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Emprestimo'

        return context


class AlterarEmprestimoView(UpdateView):
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    form_class = AlterarEmprestimoForm
    success_url = reverse_lazy('emprestimos-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Emprestimo'

        return context


class DevolucaoEmprestimoView(UpdateView):
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    form_class = DevolucaoEmprestimoForm
    success_url = reverse_lazy('index')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Devolucao Emprestimo'

        return context


class ListarEmprestimosView(ListView):
    template_name = 'paginas/emprestimos/list.html'
    model = Emprestimo