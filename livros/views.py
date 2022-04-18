from pyexpat import model
from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy 

from .models import Autor, Livro


class IndexLivroView(TemplateView):
    template_name = 'paginas/livros/index.html'


# Cadastros
class CadastrarAutorView(CreateView):
    template_name = 'paginas/livros/form_autor.html'
    model = Autor
    success_url = reverse_lazy('livros-listar-autor')
    fields = [
        'nome',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Autor'

        return context


class CadastrarLivroView(CreateView):
    template_name = 'paginas/livros/form_livro.html'
    model = Livro
    success_url = reverse_lazy('livros-listar')
    fields = [
        'isbn',
        'nome_livro',
        'autor',
        'ano_publicacao',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Livro'

        return context


# Alterar Cadastros
class AlterarAutorView(UpdateView):
    template_name = 'paginas/livros/form_autor.html'
    model = Autor
    success_url = reverse_lazy('livros-listar-autor')
    fields = [
        'nome',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Autor'

        return context


class AlterarLivroView(UpdateView):
    template_name = 'paginas/livros/form_livro.html'
    model = Livro
    success_url = reverse_lazy('livros-listar')
    fields = [
        'isbn',
        'nome_livro',
        'autor',
        'ano_publicacao',
    ]

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Livro'

        return context


# Listar Dados
class ListarAutoreView(ListView):
    template_name = 'paginas/livros/list_autores.html'
    model = Autor


class ListarLivrosView(ListView):
    template_name = 'paginas/livros/list_livros.html'
    model = Livro
