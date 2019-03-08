<!DOCTYPE html>
<html>
      <head>
          <meta charset ="utf-8"/>
          <link rel="stylesheet" href="style.css">

          <title>ue017projet1</title>
       </head>
       <body>
       <form 	class='contact_form'
       			action="formulaire de contact.php" methode="post">
		
		<ul>
			
				<legend>FORMULAIRE DE CONTACT</legend>
			
			<li>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" autofocus  required /><br>
               
            </li>
            <li>
                <label for="email">Adresse email</label>
                <input type="email" name="email" id="email" required/><br>
            </li>
            <li>
                <label for="sujet">Sujet</label>
                <textarea name="sujet" id="sujet"></textarea><br>
            </li>
            <li>
                <label for="message">Message</label>
                <textarea name="message" id="message"size="30"></textarea><br>
            </li>

           	<li>
           		
           		<button class="validationButton" type="submit" >Envoyer</button>
            
          
     	</ul>
     	</form>
     </body>


