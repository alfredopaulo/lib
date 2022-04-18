from django.views.generic import TemplateView


class IndexDashboardView(TemplateView):
    template_name = 'paginas/dashboard/index.html'
