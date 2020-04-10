{% extends "../base.html" %}
{% block content %}
<h1 class="text-center">Grille critériée</h1>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Critère</th>
		{% for notations in grille.notations %}
			<th scope="col"> {{ notations }} </th>
		{% endfor %}
      </tr>
    </thead>
    <tbody>
	<!-- Double boucle for à modifier (problème de numérotation : impossible à utiliser (changement du Dictionnaire nécessaire -->
	{% for critere in grille.criteres %}
      <tr>
		{% for c in grille.criteres.1 %} <!-- Impossible d'utiliser "critere" au lieu de "1" -->
			<td> {{ c }} </td>
		{% endfor %}
      </tr>
	{% endfor %}
    </tbody>
  </table>
</div>

{% endblock %} 