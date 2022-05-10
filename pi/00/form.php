<html>
<head>
<title>Vérifier les saisies de formulaire</title>
<style>
  .error{
    color: red;
}
</style>
<script type="text/javascript" src="script.js"></script>
</head>
<body>

<h1>Ajouter un club</h1>
<form name="clubForm" onsubmit="return validateForm(event)" method="post">

<fieldset>
Responsable du club: <br>
Nom: <input type="text" name="nomR"><br>
<p id="errorNR" class="error"></p>
Prenom: <input type="text" name="prenomR"> <br>
<p id="errorPR" class="error"></p>
E-Mail du responsable:   <input type="email" name="mail"><br>
<p id="errorMR" class="error"></p>

Confirmation E-Mail du responsable:   <input type="email" name="Cmail" onblur="VerifEmail()" onkeyup="VerifEmail()"><br>
<p id="errorCR" class="error"></p>

Mot de Passe:    		 <input type="password"  name="password"><br>
<p id="errorPass" class="error"></p>
</fieldset>
<br>
<fieldset>
Nom Club:     		<input type="text" name="nomC"><br><p id="errorNC" class="error"></p>
Date Fondation : 	<input type="date" name="DateFond"><br><p id="errorDF" class="error"></p>
Nombre de membres: 	<input type="number" name="NbM"><br><p id="errorNBM" class="error"></p>
Categorie: 
	<select name="cat" id="cat">
		<option value="select">Select</option>
		<option value="etudiant">Informatique</option>
		<option value="enseignant">Electronique</option>
		<option value="ingenieur">Mecanique</option>
		<option value="ingenieur">Genie Civil</option>
	</select><br><p id="errorCAT" class="error"></p>
Type d'activités: <table> <tr> <td><input type="checkbox" id="sem" name="act" value="Seminaire">
							<label for="sem">
								Séminaire</label> </td>
							<td> <input type="checkbox" id="forma" name="act" value="forma">
							<label for="forma">
								Formation</label> </td>
							<td><input type="checkbox" id="event" name="act" value="event" >
							<label for="event">
								Evenements</label> </td>
			</tr><tr> <td><input type="checkbox" id="tb" name="act" value="tb">
							<label for="tb">
								Team Building </label> </td>
							<td> <input type="checkbox" id="autre" name="act" value="autre" onclick="changeAutre()">
							<label for="autre">
								Autres</label> </td>

			</tr>
<table>
                <p id="errorACT" class="error"></p>
<textarea id="desc" name"desc" style="display:none"> </textarea> <br> <br>
Adhésion: <input type="radio" name="adhe" id="adhe" value="ouverte" checked><label for="ouverte">Ouverte
							</label>
							<input type="radio" name="adhe" id="adhe" value="fermee"><label for="fermee">fermée
							</label>
              <p id="errorADH" class="error"></p>
</fieldset>


<input type="submit" value="Envoyer"><input type="reset" value="Tout enlever">

</form>

</body>
</html>