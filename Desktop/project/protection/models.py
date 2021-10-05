from django.db import models
from django.utils import timezone

class Protection_Post(models.Model):
    protection_author = models.ForeignKey('auth.User', on_delete=models.CASCADE)
    protection_title = models.CharField(max_length = 200)
    protection_text = models.TextField()
    protection_image = models.ImageField(blank = True, null = True, upload_to="protection/%Y/%m/%d")
    protection_created_date = models.DateTimeField(default = timezone.now)
    protection_published_date = models.DateTimeField(blank = True, null = True)

    def publish(self):
        self.protection_published_date = timezone.now()
        self.save()

    def __str__(self):
        return self.protection_title