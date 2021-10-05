from django.shortcuts import render
from django.shortcuts import render, redirect
from django.contrib.auth.models import User
from .forms import CreateUserForm
from django.contrib.auth import views
from django.contrib.auth.forms import UserCreationForm
from django.contrib import auth

def signup(request):
    if request.method == "POST":
        userform = CreateUserForm(request.POST)
        print(userform.is_valid())
        if userform.is_valid():
            userform.save()
            return redirect('home')
    elif request.method == 'GET':
        userform = CreateUserForm()

    return render(request, 'registration/signup.html',{"userform":userform})