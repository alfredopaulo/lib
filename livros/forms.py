from django import forms

from .models import Livro


class CadastroLivroForm(forms.ModelForm):
    ano_publicacao = forms.CharField(widget=forms.TextInput(attrs={'type':'date'}))
    class Meta:
        model = Livro
        fields = [
            'isbn',
            'nome_livro',
            'autor',
            'ano_publicacao',
        ]
    
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['ano_publicacao'].label = 'Data de publicação:'


class AlterarLivroForm(forms.ModelForm):
    ano_publicacao = forms.CharField(widget=forms.TextInput(attrs={'type':'date'}))
    class Meta:
        model = Livro
        fields = [
            'isbn',
            'nome_livro',
            'autor',
            'ano_publicacao',
        ]
    
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['ano_publicacao'].label = 'Data de publicação:'
