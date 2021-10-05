from django.urls import path
from . import views

urlpatterns = [
    path('home/', views.home, name='home'),
    path('introduce/', views.introduce, name='introduce'),
    path('map/', views.map, name='map'),
    path('post_list/', views.post_list, name='post_list'),
    path('<int:post_id>/', views.detail, name = 'detail'),
    path('new/', views.post_new, name = 'post_new'),
    path('<int:post_id>/edit/', views.post_edit, name = 'post_edit'),
    path('<int:post_id>/delete/', views.post_delete, name = 'post_delete'),
    path('<int:post_id>/apply/', views.apply, name='apply'),
    path('apply/<int:apply_id>/delete/', views.apply_delete, name='apply_delete'),
]
