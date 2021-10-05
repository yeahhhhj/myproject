from django.shortcuts import render, get_object_or_404, redirect
from .models import Review_Post
from django.utils import timezone
from .forms import ReviewPostForm
from django.contrib.auth.decorators import login_required
from django.core.paginator import Paginator

def review_post_list(request):
    review_posts = Review_Post.objects.all().order_by('-review_created_date')
    review_paginator = Paginator(review_posts, 12)
    review_page = request.GET.get('review_page')
    reviews = review_paginator.get_page(review_page)
    return render(request, 'review/review_post_list.html', {'review_posts':review_posts, 'reviews':reviews,})

def review_detail(request, post_id):
    riview_posts_detail = get_object_or_404(Review_Post, pk = post_id)
    return render(request, 'review/review_detail.html',{'review_post' : riview_posts_detail})

@login_required
def review_post_new(request):
    if request.method == "POST":
        review_form = ReviewPostForm(request.POST)
        if review_form.is_valid():
            review_post = review_form.save(commit=False)
            review_post.review_author = request.user
            review_post.review_published_date = timezone.datetime.now()
            if request.POST.get('review_image', True):
                review_post.review_image = request.FILES['review_image']
            review_post.save()
            return redirect('review_detail', post_id = review_post.pk)
    else:
        review_form = ReviewPostForm()
    return render(request, 'review/review_post_new.html', {'review_form':review_form})

def review_post_edit(request, post_id):
    review_post = get_object_or_404(Review_Post, pk = post_id)
    if request.method == "POST":
        review_form = ReviewPostForm(request.POST, instance=review_post)
        if review_form.is_valid():
            review_post = review_form.save(commit=False)
            review_post.review_author = request.user
            review_post.review_published_date = timezone.datetime.now()
            if request.POST.get('review_image', True):
                review_post.review_image = request.FILES['review_image']
            review_post.save()
            return redirect('review_detail', post_id = review_post.pk)
    else:
        review_form = ReviewPostForm(instance=review_post)
    return render(request, 'review/review_post_edit.html', {'review_form':review_form})

def review_post_delete(request, post_id):
    review_post = get_object_or_404(Review_Post, pk = post_id)
    review_post.delete()
    return redirect('review_post_list')