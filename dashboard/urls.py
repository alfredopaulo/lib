from django.urls import path

from .views import IndexDashboardView


urlpatterns = [
    path('', IndexDashboardView.as_view(), name='index'),
]
