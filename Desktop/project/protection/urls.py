from django.urls import path
from . import views

urlpatterns = [
    path('post_list/', views.protection_post_list, name='protection_post_list'),
    path('<int:post_id>/', views.protection_detail, name = 'protection_detail'),
    path('new/', views.protection_post_new, name = 'protection_post_new'),
    path('<int:post_id>/edit/', views.protection_post_edit, name = 'protection_post_edit'),
    path('<int:post_id>/delete/', views.protection_post_delete, name = 'protection_post_delete'),
]
