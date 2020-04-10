from django.shortcuts import render
##from corrector.models import Grille

def home(request):
    return render(request, 'home.php')

def grille(request):
    return render(request, 'pages/grille.php')

def utiliserGrille(request):
    ##grille = Grille.objects.all()
    ## Il faut appeller la grille depuis une bdd ou d'un fichier -> à voir
    grille = {'notations': ['Excellent','Bon','Mauvais'], 'criteres':
              {'1':["L'élève a bien rendu son devoir", "L'élève a rendu son devoir à l'heure",
                    "L'élève a rendu son devoir mais en retard", "L'élève n'a pas rendu son devoir"]}}
    return render(request, 'pages/utiliserGrille.php', {'grille':grille})
