<?php
include 'templates/header.php';
?>

<h1><u>Rubrique de Contact</u></h1>

<html>
  <head>
    <title>Formulaire</title>
  </head>
  <body>
    <form method="post" action="controller.php">
        Email : <input type="email" name="email" placeholder="Entrer votre Email" /><br />
        Requête : <input type="demande" name="name" placeholder="Entrez votre demande" /><br />
      <input type="submit" value="Envoyer" />
    </form>
  </body>
</html>

<h1><u>Nos réseaux !</u></h1>
<ul>
    <li><a href="https://www.youtube.com/@SaborIntenso">Youtube</a></li>
    <li><a href="https://www.instagram.com/saborintenso/">Instagram</a></li>
    <li><a href="https://www.facebook.com/saborintenso">Facebook</a></li>
</ul>

<?php
include 'templates/footer.php';
?>
