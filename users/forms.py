from django.contrib.auth import forms

from .models import User


class UserChangeForm(forms.UserChangeForm):
    class Meta(forms.UserChangeForm.Meta):
        model = User
        fields = [
            'cpf',
            'first_name',
            'last_name',
            'username',
            'email',
            'telefone',
            'endereco',
        ]

class UserCreationForm(forms.UserCreationForm):
    class Meta(forms.UserCreationForm.Meta):
        model = User
        fields = [
            'cpf',
            'first_name',
            'last_name',
            'username',
            'email',
            'telefone',
            'endereco',
        ]
