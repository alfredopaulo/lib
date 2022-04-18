from django.urls import path

from .views import IndexEmprestimoView, CadastrarEmprestimoView, AlterarEmprestimoView, DevolucaoEmprestimoView


urlpatterns = [
    path('', IndexEmprestimoView.as_view(), name='emprestimos-index'),
    path('cadastrar/', CadastrarEmprestimoView.as_view(), name='emprestimos-cadastrar'),
    path('alterar/<int:pk>/', AlterarEmprestimoView.as_view(), name='emprestimos-alterar'),
    path('devolucao/<int:pk>/', DevolucaoEmprestimoView.as_view(), name='emprestimos-devolucao'),
]
