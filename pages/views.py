from django.shortcuts import render
from universities.models import University

def home(request):
    # Fetch a list of universities to rank on the front page.
    # For now, let's just get the top 5 by ranking score.
    # We'll build the ranking algorithm later.
    top_ranked_universities = University.objects.order_by('-ranking_score')[:5]

    # The context dictionary passes data from our view to the template.
    context = {
        'top_ranked_universities': top_ranked_universities,
        'mission_statement': "Our mission is to create a safe and inclusive environment where all female students can thrive academically and personally...",
        'team_members': [
            {'name': 'Team Member 1', 'role': 'Lead Developer'},
            {'name': 'Team Member 2', 'role': 'Community Manager'},
            # Add more team members here
        ],
        'call_to_action': "Join us in our mission to rank universities on gender equality and safety. Register or post your experience today!",
        'donation_link': "#", # This should be a real link to a donation page
    }
    return render(request, 'pages/home.html', context)