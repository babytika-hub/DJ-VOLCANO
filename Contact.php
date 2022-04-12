<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav id="nav_bar" class="nav_bar background">
    <div class="content">
      <div class="logo">
        DJ VOLCANO
      </div>
      <ul class="menu-list">
        <div class="cancel-btn burger">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="Photo.html">Photo</a></li>
        <li><a href="Tarifs.html">Tarifs</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="About_me.html">A propos</a></li>
      </ul>
      <div class="menu-btn burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>


  <section id="contact" class="content">
    <div class="contact_text">
      <h1>EXEMPLE</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis obcaecati ad reprehenderit voluptates ducimus possimus adipisci illo, repellendus deserunt numquam sunt porro. Veniam, itaque. Similique aliquid praesentium suscipit molestias non.*5</p>
    </div>

    <div id="contact_form">
      
      <h1>FORMULAIRE DE CONTACT</h1>
      
      <form id="formulaire" method="post" action="traitement.php">
        
        <div class="input_icon">
          <i class="bi bi-people-fill"></i>
          <input type="text" name="nom" id="nom"  placeholder="Nom" required/>
        </div>
        
        <div class="input_icon">
          <label for="prenom"><i class="bi bi-person-fill"></i></label>
          <input type="text" name="prenom" id="prenom"  placeholder="Prénom" required/>
        </div>
        
        <div class="input_icon">
          <label for="email"><i class="bi bi-envelope-open-fill"></i></label>
          <input type="email" name="email" id="email"  placeholder="Email" required/>
        </div>
        
        <div class="input_icon">
          <label for="text"><i class="bi bi-chat-left-text-fill"></i></label>
          <textarea type="text" name="texte" id="text" rows="5" placeholder="Sujet" required></textarea>
        </div>
        
        <div class="col-12">
          <button class="btn btn-primary" type="submit">ENVOYER</button>
        </div>
        
      </form>
    </div>
  </section>

  <footer class="footer-basic">
    <a href="#top" id="arrow"><i class="bi bi-arrow-up-short"></i></a>
        <div class="social">
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-snapchat"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
        </div>
        <p class="copyright">DJ VOLCANO</p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="app.js" defer></script>
</body>
</html>