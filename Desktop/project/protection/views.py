from django.shortcuts import render, get_object_or_404, redirect
from .models import Protection_Post
from django.utils import timezone
from .forms import ProtectionPostForm
from django.contrib.auth.decorators import login_required
from django.core.paginator import Paginator

def protection_post_list(request):
    protection_posts = Protection_Post.objects.all().order_by('-protection_created_date')
    protection_paginator = Paginator(protection_posts, 12)
    protection_page = request.GET.get('protection_page')
    protections = protection_paginator.get_page(protection_page)
    return render(request, 'protection/protection_post_list.html', {'protection_posts':protection_posts, 'protections':protections,})

def protection_detail(request, post_id):
    protection_posts_detail = get_object_or_404(Protection_Post, pk = post_id)
    return render(request, 'protection/protection_detail.html',{'protection_post':protection_posts_detail})

@login_required
def protection_post_new(request):
    if request.method == "POST":
        protection_form = ProtectionPostForm(request.POST)
        if protection_form.is_valid():
            protection_post = protection_form.save(commit=False)
            protection_post.protection_author = request.user
            protection_post.protection_published_date = timezone.datetime.now()
            if request.POST.get('protection_image', True):
                protection_post.protection_image = request.FILES['protection_image']
            protection_post.save()
            return redirect('protection_detail', post_id = protection_post.pk)
    else:
        protection_form = ProtectionPostForm()
    return render(request, 'protection/protection_post_new.html', {'protection_form':protection_form})

def protection_post_edit(request, post_id):
    protection_post = get_object_or_404(Protection_Post, pk = post_id)
    if request.method == "POST":
        protection_form = ProtectionPostForm(request.POST, instance=protection_post)
        if protection_form.is_valid():
            protection_post = protection_form.save(commit=False)
            protection_post.protection_author = request.user
            protection_post.protection_published_date = timezone.datetime.now()
            if request.POST.get('protection_image', True):
                protection_post.protection_image = request.FILES['protection_image']
            protection_post.save()
            return redirect('protection_detail', post_id = protection_post.pk)
    else:
        protection_form = ProtectionPostForm(instance=protection_post)
    return render(request, 'protection/protection_post_edit.html', {'protection_form':protection_form})

def protection_post_delete(request, post_id):
    protection_post = get_object_or_404(Protection_Post, pk = post_id)
    protection_post.delete()
    return redirect('protection_post_list')