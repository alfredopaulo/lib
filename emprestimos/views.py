from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy
from django.contrib.auth.mixins import LoginRequiredMixin

from .models import Emprestimo
from .forms import CadastrarEmprestimoForm, AlterarEmprestimoForm, DevolucaoEmprestimoForm


class IndexEmprestimoView(LoginRequiredMixin, TemplateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/emprestimos/index.html'


class CadastrarEmprestimoView(LoginRequiredMixin, CreateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/emprestimos/form.html'
    form_class = CadastrarEmprestimoForm
    success_url = reverse_lazy('emprestimos-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Emprestimo'

        return context


class AlterarEmprestimoView(LoginRequiredMixin, UpdateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    form_class = AlterarEmprestimoForm
    success_url = reverse_lazy('emprestimos-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Emprestimo'

        return context


class DevolucaoEmprestimoView(LoginRequiredMixin, UpdateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/emprestimos/form.html'
    model = Emprestimo
    form_class = DevolucaoEmprestimoForm
    success_url = reverse_lazy('index')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Devolucao Emprestimo'

        return context


class ListarEmprestimosView(LoginRequiredMixin, ListView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/emprestimos/list.html'
    model = Emprestimo