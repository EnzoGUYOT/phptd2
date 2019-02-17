<!DOCTYPE HTML>

<html lang="fr">
	
	<head>   
    	<meta charset="utf-8">
		<meta name="Index" content="TP PHP">
        <link rel="icon" href="">
        <title>PHP</title>
    </head>
    
    <body>
        <?php
        try{
            $dbh = new PDO('mysql:host=bbd.itescia.msql;dbname=useritescia', "itescia", "itescia");
            }
        catch(PDOException $e){
            die('Erreur : '.$e->getMessage());
            }
        
        $request = $dbh->prepare("SELECT * FROM Acces");
        $request->execute();
        while ($data = $request->fetch())
            {echo $data['prenom'];}
        
        $request = $dbh->prepare("UPDATE Acces SET prenom = 'Toto' Where prenom=:p");
        $request->bindValue(':p','Thomas');
                $request->execute();
        
        
        $request = $dbh->prepare("INSERT INTO Acces (prenom, login, password, statut, age) VALUES (:prenom, :login, :password, :statut, :age)");
        $request->bindValue(':prenom','enzo');
        $request->bindValue(':login','eguyot');
        $request->bindValue(':password','password');
        $request->bindValue(':statut','expert');
        $request->bindValue(':age','19');
        $request->execute();
        
        $request = $dbh->prepare("DELETE FROM Acces WHERE prenom=:prenom");
        $request->bindValue(':prenom','enzo');
        $request->execute();
        ?>
        
    </body> 	
</html>
            
