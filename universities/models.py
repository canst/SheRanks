from django.db import models
from django.contrib.auth.models import User

# The main model for a university
class University(models.Model):
    name = models.CharField(max_length=200, unique=True)
    location = models.CharField(max_length=200)
    website = models.URLField(max_length=200, blank=True, null=True)
    description = models.TextField(blank=True, null=True)
    slug = models.SlugField(max_length=200, unique=True, help_text="A URL-friendly version of the university name.")
    is_verified = models.BooleanField(default=False, help_text="Has this university been officially verified?")
    ranking_score = models.FloatField(default=0.0)

    def __str__(self):
        return self.name

# A model for user-submitted posts or reviews
class Post(models.Model):
    # A foreign key to link the post to a specific university
    university = models.ForeignKey(University, on_delete=models.CASCADE, related_name='posts')
    # A foreign key to link the post to a specific user
    author = models.ForeignKey(User, on_delete=models.CASCADE, related_name='posts')
    title = models.CharField(max_length=200)
    content = models.TextField()
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    sentiment_score = models.FloatField(default=0.0, help_text="AI-generated sentiment score.")

    def __str__(self):
        return f'{self.title} by {self.author.username}'

    class Meta:
        ordering = ['-created_at']