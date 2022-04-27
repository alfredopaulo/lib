from django.urls import path

from .views import IndexAlunoView, CadastrarAlunoView, AlterarAlunoView, ListarAlunoView


urlpatterns = [
    path('', IndexAlunoView.as_view(), name='alunos-index'),
    path('cadastrar/', CadastrarAlunoView.as_view(), name='alunos-cadastrar'),
    path('alterar/<int:pk>/', AlterarAlunoView.as_view(), name='alunos-alterar'),
    path('listar/', ListarAlunoView.as_view(), name='alunos-listar'),
]
