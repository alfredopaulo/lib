from django.views.generic import TemplateView
from django.views.generic.edit import CreateView, UpdateView
from django.views.generic.list import ListView
from django.urls import reverse_lazy
from django.contrib.auth.mixins import LoginRequiredMixin

from .models import Autor, Livro
from .forms import CadastroLivroForm, AlterarLivroForm


class IndexLivroView(LoginRequiredMixin, TemplateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/livros/index.html'


# Cadastros
class CadastrarAutorView(LoginRequiredMixin, CreateView):
    login_url = reverse_lazy('users-login')
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


class CadastrarLivroView(LoginRequiredMixin, CreateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/livros/form_livro.html'
    model = Livro
    form_class = CadastroLivroForm
    success_url = reverse_lazy('livros-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Cadastrar Livro'

        return context


# Alterar Cadastros
class AlterarAutorView(LoginRequiredMixin, UpdateView):
    login_url = reverse_lazy('users-login')
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


class AlterarLivroView(LoginRequiredMixin, UpdateView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/livros/form_livro.html'
    model = Livro
    form_class = AlterarLivroForm
    success_url = reverse_lazy('livros-listar')

    def get_context_data(self, *args, **kwargs):
        context = super().get_context_data(*args, **kwargs)
        context['titulo_pagina'] = 'Alterar Livro'

        return context


# Listar Dados
class ListarAutoreView(LoginRequiredMixin, ListView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/livros/list_autores.html'
    model = Autor
    paginate_by = 5

    def get_queryset(self):
        text_nome = self.request.GET.get('nome')
        if text_nome:
            nome = Autor.objects.filter(nome__icontains=text_nome)
        else:
            nome = Autor.objects.all()

        return nome


class ListarLivrosView(ListView):
    login_url = reverse_lazy('users-login')
    template_name = 'paginas/livros/list_livros.html'
    model = Livro
    paginate_by = 5

    def get_queryset(self):
        text_isbn = self.request.GET.get('isbn')
        if text_isbn:
            isbn = Livro.objects.filter(isbn__icontains=text_isbn)
        else:
            isbn = Livro.objects.all()

        return isbn
