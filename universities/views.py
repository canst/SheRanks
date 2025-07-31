from django.shortcuts import render, get_object_or_404
from .models import University, Post

# View to display a list of all universities
def university_list(request):
    universities = University.objects.all().order_by('name')
    context = {
        'universities': universities
    }
    return render(request, 'universities/university_list.html', context)

# View to display a single university's detail page
def university_detail(request, university_slug):
    university = get_object_or_404(University, slug=university_slug)
    posts = university.posts.all()
    context = {
        'university': university,
        'posts': posts
    }
    return render(request, 'universities/university_detail.html', context)