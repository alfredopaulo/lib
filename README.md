# LAW_HACK

Sistema para gerenciamento de Biblioteca

---

#### Passos para instalação do projeto:

1. Clonar o projeto;

2. Criar um ambiente virtual python;

3. Instalar as bibliotecas que se encontram no arquivo **requirements.txt** e pronto.

   ```bash
   pip install -r requirements.txt 
   ```

4. Realizar as migrações do banco de dados.
   
   ```bash
   python manage.py makemigrations
   ```
      ```bash
   python manage.py migrate 
   ```
 
5. Rodar o servidor interno do Django.
   ```bash
   python manage.py runserver 
   ```

6. Ser feliz para testar :-P

---

## Desenvolvido por:
- ### Alfredo de Paulo
- ### Lucas Carvalho
- ### Waleson Melo