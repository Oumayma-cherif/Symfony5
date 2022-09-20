<?PHP
//include "club.php";
if (isset($_GET['id']) and isset($_GET['nom']) and 
isset($_GET['description']) and isset($_GET['adresse']) 
and isset($_GET['domaine'])){
if (!empty($_GET['id']) and !empty($_GET['nom']) and 
!empty($_GET['description']) and !empty($_GET['adresse']) 
and !empty($_GET['domaine'])){
//$club=new club($_GET['id'],$_GET['nom'],
//$_GET['description'],$_GET['adresse'],$_GET['domaine']); 
//$club->ajouterClub($club);
//header('Location: afficherclub.php');
?>

	<h2>  Affichage des Clubs</h2>
<table border="2">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Description</td>
<td>Adresse</td>
<td>Domaine</td>
</tr>
	<tr>
	<td><?PHP echo $_GET['id']; ?></td>
	<td><?PHP echo $_GET['nom']; ?></td>
	<td><?PHP echo $_GET['description']; ?></td>
	<td><?PHP echo $_GET['adresse']; ?></td>
	<td><?PHP echo $_GET['domaine']; ?></td>

	<?PHP
}
?>
</table>
<?PHP
}else{
	echo "Champs Manquants";
}
?>