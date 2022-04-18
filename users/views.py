from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy

from .forms import UserChangeForm, UserCreationForm
from .models import User


class IndexUserView(TemplateView):
    template_name = 'paginas/users/index.html'


class CadastrarUserView(CreateView):
    template_name = 'paginas/users/form.html'
    form_class = UserCreationForm
    success_url = reverse_lazy('users-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Usuário'
        context['tipo_operacao'] = 'cadastro'

        return context


class AlterarUserView(UpdateView):
    template_name = 'paginas/users/form.html'
    form_class = UserChangeForm
    model = User
    success_url = reverse_lazy('users-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Usuário'
        context['tipo_operacao'] = 'alterar'

        return context


class ListarUserView(ListView):
    template_name = 'paginas/users/list.html'
    model = User
