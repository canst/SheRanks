from django.urls import path
from . import views

app_name = 'universities'
urlpatterns = [
    # This will be our home page for the universities app, listing all of them
    path('', views.university_list, name='list'),
    # This is a dynamic URL for a single university's detail page
    path('<slug:university_slug>/', views.university_detail, name='detail'),
]