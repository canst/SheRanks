from django.db import models
from django.contrib.auth.models import User

class Profile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE, related_name='profile')
    bio = models.TextField(max_length=500, blank=True)
    location = models.CharField(max_length=30, blank=True)
    # Add other fields here as needed, e.g., profile picture, university affiliation, etc.

    def __str__(self):
        return f'{self.user.username} Profile'