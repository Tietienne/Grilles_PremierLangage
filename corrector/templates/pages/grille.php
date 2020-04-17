<script type="text/javascript">
function htmlToJson() {
	table = document.getElementsByName("grille");

	/* Fonctions qui doit transformer la table en JSON
	var myRows = [];
	var $headers = $("th");
	var $rows = $("tbody tr").each(function(index) {
	  $cells = $(this).find("td");
	  myRows[index] = {};
	  $cells.each(function(cellIndex) {
		myRows[index][$($headers[cellIndex]).html()] = $(this).html();
	  });    
	});
	
	var myObj = {};
	myObj = myRows;
	console.log(JSON.stringify(myObj));​

	document.getElementsByName("json").value = JSON.stringify(myObj);*/ // Modification de la valeur de l'élement avec le JSON */
}

function addColumn() {
	tbl = document.getElementsByTagName("body")[0];
	columns = tbl.getElementsByTagName("tr");
	for (i = 0; i < columns.length; i++) {
		var td = document.createElement('td');
		var text = document.createElement('textarea');
		text.maxLength = "100";
		text.rows = "4";
		text.cols = "30";
		td.appendChild(text);
		columns[i].appendChild(td);
	}
}

function addLine() {
	tbl = document.getElementsByTagName("body")[0]; // La grille (table)
	tbody = tbl.getElementsByTagName("tbody"); // L'intérieur de la table 
	
	columns = tbl.getElementsByTagName("tr"); // Toutes les lignes
	lines = columns[0].getElementsByTagName("td"); // Nb de colonnes de la 1ère ligne
	
	line = document.createElement('tr'); // Nouvelle ligne
	
	for (i = 0; i < lines.length; i++) {
		var td = document.createElement('td');
		var text = document.createElement('textarea');
		text.maxLength = "100";
		text.rows = "4";
		text.cols = "30";
		td.appendChild(text);
		line.appendChild(td); // On ajoute une nouvelle colonne à la nouvelle ligne 
	}
	
	tbody[0].appendChild(line); // On ajoute la nouvelle ligne à la grille
}

</script>

{% extends "../base.html" %}
{% block content %}
<h1 class="text-center">Grille critériée</h1>

<div class="container">

<form action="#" method="get">

  <table class="table table-bordered" name="grille" id="grille">
    <thead>
      <tr>
        <td>Critères \ Notations</th>
        <td> <textarea maxlength="100" rows="4" cols="30">Excellent</textarea> </th>
        <td> <textarea maxlength="100" rows="4" cols="30">Bon</textarea> </th>
        <td> <textarea maxlength="100" rows="4" cols="30">Mauvais</textarea> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <textarea  maxlength="100" rows="4" cols="30">L'élève à bien rendu son devoir</textarea> </th>
        <td> <textarea  maxlength="100" rows="4" cols="30">L'élève à rendu son devoir à l'heure</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">L'élève a rendu son devoir mais en retard</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">L'élève n'a pas rendu son devoir</textarea> </td>
      </tr>
      <tr>
        <td> <textarea  maxlength="100" rows="4" cols="30">Capacité à fournir les éléments dés clés de la réponse</textarea> </th>
        <td> <textarea  maxlength="100" rows="4" cols="30">Tout les éléments ont été fournis</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">Une partie des éléments ont été fournis</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">Les éléments n'ont pas été fournis</textarea> </td>
      </tr>
      <tr>
        <td> <textarea  maxlength="100" rows="4" cols="30">Cohérence et structure</textarea> </th>
        <td> <textarea  maxlength="100" rows="4" cols="30">Excellent</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">Le support suit une logique claire et les idées sont structurées</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">Le support ne suit aucune logique et les idées sont mal structurées</textarea> </td>
      </tr>
      <tr>
        <td> <textarea  maxlength="100" rows="4" cols="30">Grammaire, syntaxe et ponctuation</textarea> </th>
        <td> <textarea  maxlength="100" rows="4" cols="30">Excellent</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">Bon</textarea> </td>
        <td> <textarea  maxlength="100" rows="4" cols="30">Mauvais</textarea> </td>
      </tr>
    </tbody>
  </table>
	
  
	<input type="hidden" name="json" size="1"/> <!-- Input qui sert à mémoriser le JSON -->
  	<input type="submit" onclick="htmlToJson()" class="btn" value="Save as JSON" name="save"> <!-- Bouton pour faire la sauvegarde en JSON -->
</form>
	<button onclick="addColumn()">Add Column</button>
	<button onclick="addLine()">Add Line</button>
</div>

{% endblock %} 