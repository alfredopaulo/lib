from django.urls import path

from .views import IndexUserView, CadastrarUserView, ListarUserView, AlterarUserView


urlpatterns = [
    path('', IndexUserView.as_view(), name='users-index'),
    path('cadastrar/', CadastrarUserView.as_view(), name='users-cadastrar'),
    path('listar-usuarios/', ListarUserView.as_view(), name='users-listar'),
    path('alterar/<int:pk>/', AlterarUserView.as_view(), name='users-alterar'),
]