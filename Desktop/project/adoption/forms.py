from django import forms
from .models import Adoption_Post, Apply

class AdoptionPostForm(forms.ModelForm):
    class Meta:
        model = Adoption_Post
        fields = ['title', 'image', 'text', ]

        widgets = {
            'title': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder': '제목을 입력하세요.'}
            ),
            'text': forms.Textarea(
                attrs={'style': 'width: 100%; height: 400px;', 'placeholder': '내용을 입력하세요.'}
            ),
            'image': forms.FileInput(
                attrs={'style': 'color: grey; margin-bottom: 30px;',}
            ),
        }

        labels = {
            'title' : '강아지 이름',
            'text' : '세부내용',
            'image' : '강아지 사진',
        }

class ApplyForm(forms.ModelForm):
    class Meta:
        model = Apply
        fields = ['apply_name', 'apply_address', 'apply_age', 'apply_job', 
        'apply_gender', 'apply_phone', 'apply_house', 'apply_housemate', 'apply_pets', ]

        widgets = {
            'apply_name': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'윤상은'}
            ),
            'apply_address': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'충주시'}
            ),
            'apply_age': forms.NumberInput(
                attrs={'min': '1', 'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'22'}
            ),
            'apply_job': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'프리랜서 디자이너'}
            ),
            'apply_gender': forms.RadioSelect(),
            'apply_phone': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'010-0000-0000'}
            ),
            'apply_house': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'단독주택 마당있음'}
            ),
            'apply_housemate': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'3명, 부모님과 남동생, 모두 알레르기 없음'}
            ),
            'apply_pets': forms.TextInput(
                attrs={'style': 'width: 100%; margin-bottom: 30px;', 'placeholder':'1마리, 웰시코기 5살'}
            ),
        }

        labels = {
            'apply_name' : 'Name',
            'apply_address': 'Address',
            'apply_age': 'Age',
            'apply_job': 'Job',
            'apply_gender': 'Gender',
            'apply_phone': 'Phone',
            'apply_house': 'House',
            'apply_housemate': 'Housemate',
            'apply_pets': 'Pets',
        }

