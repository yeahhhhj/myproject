from django.db import models
from django.utils import timezone

class Review_Post(models.Model):
    review_author = models.ForeignKey('auth.User', on_delete=models.CASCADE)
    review_title = models.CharField(max_length = 200)
    review_text = models.TextField()
    review_image = models.ImageField(blank = True, null = True, upload_to="review/%Y/%m/%d")
    review_created_date = models.DateTimeField(default = timezone.now)
    review_published_date = models.DateTimeField(blank = True, null = True)

    def publish(self):
        self.review_published_date = timezone.now()
        self.save()

    def __str__(self):
        return self.review_title