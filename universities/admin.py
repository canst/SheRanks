from django.contrib import admin
from .models import University, Post

@admin.register(University)
class UniversityAdmin(admin.ModelAdmin):
    list_display = ('name', 'location', 'ranking_score', 'is_verified')
    prepopulated_fields = {'slug': ('name',)}
    list_filter = ('is_verified',)
    search_fields = ('name', 'location')

@admin.register(Post)
class PostAdmin(admin.ModelAdmin):
    list_display = ('title', 'university', 'author', 'created_at', 'sentiment_score')
    list_filter = ('created_at', 'university')
    search_fields = ('title', 'content')
    date_hierarchy = 'created_at'