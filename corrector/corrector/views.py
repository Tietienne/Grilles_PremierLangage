from django.shortcuts import render
from corrector.models import Grille

def home(request):
    return render(request, 'home.php')

def grille(request):
    if(request.GET.get('save')): ## Si le bouton a été utilisé, on lance la méthode de sauvegarde dans la bdd
        saveJSON((request.GET.get('json'))) ## en récupérant la valeur JSON
    return render(request, 'pages/grille.php')

def utiliserGrille(request):
    ##grille = Grille.objects.all()
    ## Il faut appeller la grille depuis une bdd

    ## Peut être à modifier
    grille = dict()
    grille['0'] = ['Excellent','Bon','Mauvais']
    grille['1'] = ["L'élève a bien rendu son devoir", "L'élève a rendu son devoir à l'heure",
                    "L'élève a rendu son devoir mais en retard", "L'élève n'a pas rendu son devoir"]
    grille['2'] = ["Capacité à fournir les éléments dés clés de la réponse", "Tout les éléments ont été fournis",
                    "Une partie des éléments ont été fournis", "Les éléments n'ont pas été fournis"]
    return render(request, 'pages/utiliserGrille.php', {'grille':grille})
    ## Peut être à modifier

## Fonction de sauvegarde de la grille dans la BDD ##

def saveJSON(value):
    print(value)
    grille = Grille(json=value) ## Création d'une table avec comme champ json la valeur JSON
    grille.save()
