from django.urls import path
from . import views

urlpatterns = [
    path('post_list/', views.review_post_list, name='review_post_list'),
    path('<int:post_id>/', views.review_detail, name = 'review_detail'),
    path('new/', views.review_post_new, name = 'review_post_new'),
    path('<int:post_id>/edit/', views.review_post_edit, name = 'review_post_edit'),
    path('<int:post_id>/delete/', views.review_post_delete, name = 'review_post_delete'),
]
