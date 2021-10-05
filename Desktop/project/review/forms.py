from django import forms
from .models import Review_Post

class ReviewPostForm(forms.ModelForm):
    class Meta:
        model = Review_Post
        fields = ['review_title', 'review_image', 'review_text', ]

        widgets = {
            'review_title': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder': '제목을 입력하세요.'}
            ),
            'review_text': forms.Textarea(
                attrs={'style': 'width: 100%; height: 400px;', 'placeholder': '내용을 입력하세요.'}
            ),
            'review_image': forms.FileInput(
                attrs={'style': 'color: grey; margin-bottom: 30px;',}
            ),
        }

        labels = {
            'review_title' : '강아지 이름',
            'review_text' : '세부내용',
            'review_image' : '강아지사진',
        }