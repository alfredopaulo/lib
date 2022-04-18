from django.urls import path

from .views import IndexLivroView, CadastrarLivroView, AlterarLivroView, ListarLivrosView
from .views import CadastrarAutorView, AlterarAutorView, ListarAutoreView


urlpatterns = [
    path('', IndexLivroView.as_view(), name='livros-index'),
    path('cadastrar/livro/', CadastrarLivroView.as_view(), name='livros-cadastrar'),
    path('cadastrar/autor/', CadastrarAutorView.as_view(), name='livros-cadastrar-autor'),
    path('alterar/autor/<int:pk>/', AlterarAutorView.as_view(), name='livros-alterar-autor'),
    path('alterar/livro/<int:pk>/', AlterarLivroView.as_view(), name='livros-alterar'),
    path('listar/autors/', ListarAutoreView.as_view(), name='livros-listar-autor'),
    path('listar/livros/', ListarLivrosView.as_view(), name='livros-listar'),
]