from django import forms

from .models import Emprestimo


class CadastrarEmprestimoForm(forms.ModelForm):
    data_limite = forms.CharField(widget=forms.TextInput(attrs={'type':'date'}))
    class Meta:
        model = Emprestimo
        fields = [
            'aluno',
            'data_limite',
            'livros',
        ]


class AlterarEmprestimoForm(forms.ModelForm):
    data_limite = forms.CharField(widget=forms.TextInput(attrs={'type':'date'}))
    class Meta:
        model = Emprestimo
        fields = [
            'aluno',
            'data_limite',
            'livros',
        ]


class DevolucaoEmprestimoForm(forms.ModelForm):
    data_devolucao = forms.CharField(widget=forms.TextInput(attrs={'type':'date'}))
    class Meta:
        model = Emprestimo
        fields = [
            'data_devolucao',
            'status_emprestimo',
            # 'livros',
        ]
