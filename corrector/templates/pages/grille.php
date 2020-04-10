{% extends "../base.html" %}
{% block content %}
<h1 class="text-center">Grille critériée</h1>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Critère</th>
        <th scope="col"> <textarea style="resize: none; outline: none;" maxlength="45" rows="3" cols="30">Excellent</textarea> </th>
        <th scope="col"> <textarea style="resize: none; outline: none;" maxlength="45" rows="3" cols="30">Bon</textarea> </th>
        <th scope="col"> <textarea style="resize: none; outline: none;" maxlength="45" rows="3" cols="30">Mauvais</textarea> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">L'élève à bien rendu son devoir</textarea> </th>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">L'élève à rendu son devoir à l'heure</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">L'élève a rendu son devoir mais en retard</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">L'élève n'a pas rendu son devoir</textarea> </td>
      </tr>
      <tr>
        <th scope="row"> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Capacité à fournir les éléments dés clés de la réponse</textarea> </th>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Tout les éléments ont été fournis</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Une partie des éléments ont été fournis</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Les éléments n'ont pas été fournis</textarea> </td>
      </tr>
      <tr>
        <th scope="row"> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Cohérence et structure</textarea> </th>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Excellent</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Le support suit une logique claire et les idées sont structurées</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Le support ne suit aucune logique et les idées sont mal structurées</textarea> </td>
      </tr>
      <tr>
        <th scope="row"> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Grammaire, syntaxe et ponctuation</textarea> </th>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Excellent</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Bon</textarea> </td>
        <td> <textarea style="resize: none; outline: none;" maxlength="100" rows="4" cols="30">Mauvais</textarea> </td>
      </tr>
    </tbody>
  </table>
</div>

{% endblock %} 