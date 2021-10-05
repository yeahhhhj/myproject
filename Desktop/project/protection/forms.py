from django import forms
from .models import Protection_Post

class ProtectionPostForm(forms.ModelForm):
    class Meta:
        model = Protection_Post
        fields = ['protection_title', 'protection_image', 'protection_text', ]

        widgets = {
            'protection_title': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder': '제목을 입력하세요.'}
            ),
            'protection_text': forms.Textarea(
                attrs={'style': 'width: 100%; height: 400px;', 'placeholder': '내용을 입력하세요.'}
            ),
            'protection_image': forms.FileInput(
                attrs={'style': 'color: grey; margin-bottom: 30px;',}
            ),
        }

        labels = {
            'protection_title' : '강아지 이름',
            'protection_text' : '세부내용',
            'protection_image' : '강아지사진',
        }