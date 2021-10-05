from django.shortcuts import render, get_object_or_404, redirect
from .models import Adoption_Post, Apply
from django.utils import timezone
from .forms import AdoptionPostForm, ApplyForm
from django.contrib.auth.decorators import login_required
from django.core.paginator import Paginator

def home(request):
    return render(request, 'adoption/home.html')

def introduce(request):
    return render(request, 'adoption/introduce.html')

def map(request):
    return render(request, 'adoption/map.html')

def post_list(request):
    adoption_posts = Adoption_Post.objects.all().order_by('-created_date')
    adoption_paginator = Paginator(adoption_posts, 12)
    adoption_page = request.GET.get('adoption_page')
    adoptions = adoption_paginator.get_page(adoption_page)
    return render(request, 'adoption/post_list.html', {'adoption_posts':adoption_posts, 'adoptions':adoptions,})

def detail(request, post_id):
    adoption_posts_detail = get_object_or_404(Adoption_Post, pk = post_id)
    apply_form = ApplyForm()
    return render(request, 'adoption/detail.html',{'adoption_post':adoption_posts_detail, 'apply_form':apply_form})

@login_required
def post_new(request):
    if request.method == "POST":
        form = AdoptionPostForm(request.POST)
        if form.is_valid():
            adoption_post = form.save(commit=False)
            adoption_post.author = request.user
            adoption_post.published_date = timezone.datetime.now()
            if request.POST.get('image', True):
                adoption_post.image = request.FILES['image']
            adoption_post.save()
            return redirect('detail', post_id = adoption_post.pk)
    else:
        form = AdoptionPostForm()
    return render(request, 'adoption/post_new.html', {'form':form})

def post_edit(request, post_id):
    adoption_post = get_object_or_404(Adoption_Post, pk = post_id)
    if request.method == "POST":
        form = AdoptionPostForm(request.POST, instance=adoption_post)
        if form.is_valid():
            adoption_post = form.save(commit=False)
            adoption_post.author = request.user
            adoption_post.published_date = timezone.datetime.now()
            adoption_post.save()
            return redirect('detail', post_id = adoption_post.pk)
    else:
        form = AdoptionPostForm(instance=adoption_post)
    return render(request, 'adoption/post_edit.html', {'form':form})

def post_delete(request, post_id):
    adoption_post = get_object_or_404(Adoption_Post, pk = post_id)
    adoption_post.delete()
    return redirect('post_list')


@login_required
def apply(request, post_id):
    adoption_post = get_object_or_404(Adoption_Post, pk = post_id)
    if request.method == "POST":
        apply_form = ApplyForm(request.POST)
        if apply_form.is_valid():
            apply = apply_form.save(commit = False)
            apply.post = adoption_post
            apply.nickname = request.user
            apply.save()
    return redirect('detail', post_id=adoption_post.pk)

def apply_delete(request, apply_id):
    apply = get_object_or_404(Apply, pk=apply_id)
    adoption_post = apply.post
    apply.delete()
    return redirect('detail', post_id=adoption_post.id)