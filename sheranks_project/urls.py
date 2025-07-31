# sheranks_project/urls.py
from django.contrib import admin
from django.urls import path, include

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('pages.urls')),
    path('universities/', include('universities.urls')),
    # This is the corrected line to handle accounts URLs.
    # The login and logout will now be defined in accounts/urls.py
    path('accounts/', include('accounts.urls')),
]