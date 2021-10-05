from django.db import models
from django.utils import timezone

class Adoption_Post(models.Model):
    author = models.ForeignKey('auth.User', on_delete=models.CASCADE)
    title = models.CharField(max_length = 200)
    text = models.TextField()
    image = models.ImageField(blank = True, null = True, upload_to="adoption/%Y/%m/%d")
    created_date = models.DateTimeField(default = timezone.now)
    published_date = models.DateTimeField(blank = True, null = True)

    def publish(self):
        self.published_date = timezone.now()
        self.save()

    def __str__(self):
        return self.text

class Apply(models.Model):
    post = models.ForeignKey('adoption.Adoption_Post', related_name='applys', on_delete=models.CASCADE)
    nickname = models.ForeignKey('auth.User', on_delete=models.CASCADE)
    apply_created_date = models.DateTimeField(default = timezone.now)
    apply_name = models.CharField(blank = True, null = True, max_length = 400)
    apply_address = models.CharField(blank = True, null = True, max_length = 400)
    apply_age = models.IntegerField(blank = True, null = True)
    apply_job = models.CharField(blank = True, null = True, max_length = 400)
    TYPE_SELECT = (('여자', '여자'), ('남자', '남자'), )
    apply_gender = models.CharField(null = True, max_length = 10, choices=TYPE_SELECT)
    apply_phone = models.CharField(blank = True, null = True, max_length = 400)
    apply_house = models.CharField(blank = True, null = True, max_length = 400)
    apply_housemate = models.CharField(blank = True, null = True, max_length = 400)
    apply_pets = models.CharField(blank = True, null = True, max_length = 400)

    def __str__(self):
        return self.apply_name
    