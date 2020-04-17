{% extends "../base.html" %}
{% block content %}
<h1 class="text-center">Grille critériée</h1>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Critère</th>
		{% for notations in grille %}
			<th scope="col"> {{ notations }} </th>
		{% endfor %}
      </tr>
    </thead>
    <tbody>
	<!-- Double boucle for à modifier (problème de numérotation : impossible à utiliser (changement du Dictionnaire nécessaire -->
	{% for numero in grille %}
		{% if numero %}
		  <tr>
			{% for c in criteres %}
				<td> {{ c }} </td>
			{% endfor %}
		  </tr>
		{% endif %}

	{% endfor %}
    </tbody>
  </table>
</div>

{% endblock %} 