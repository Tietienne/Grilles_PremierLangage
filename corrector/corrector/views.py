from django.shortcuts import render

def home(request):
    return render(request, 'home.php')

def grille(request):
    return render(request, 'pages/grille.php')