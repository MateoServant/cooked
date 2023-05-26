(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();




  // Vérifier si des données sont déjà stockées dans le localStorage
  if (localStorage.getItem('message')) {
    // Restaurer la valeur du message à partir du localStorage
    document.getElementById('message').value = localStorage.getItem('message');
  }
  
  if (localStorage.getItem('tag')) {
    // Restaurer la valeur du tag à partir du localStorage
    document.getElementById('tag').value = localStorage.getItem('tag');
  }
  
  // Écouter l'événement "input" sur le champ du message
  document.getElementById('message').addEventListener('input', function(event) {
    // Enregistrer la valeur du message dans le localStorage
    localStorage.setItem('message', event.target.value);
  });
  
  // Écouter l'événement "input" sur le champ du tag
  document.getElementById('tag').addEventListener('input', function(event) {
    // Enregistrer la valeur du tag dans le localStorage
    localStorage.setItem('tag', event.target.value);
  });
  
  // Écouter l'événement "submit" sur le formulaire
  document.getElementById('myForm').addEventListener('submit', function() {
    // Supprimer les données du localStorage
    localStorage.removeItem('message');
    localStorage.removeItem('tag');
  });


//tag

function afficherMessagesPlats() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Asiatique";
}
function afficherMessagesGateau() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Gateau";
}
function afficherMessagesPoulet() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Poulet";
}
function afficherMessagesVegan() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Vegan";
}
function afficherMessagesDessert() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Dessert";
}
function afficherMessagesEntree() {
  // Code pour afficher les messages contenant "Poulet"
  // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
  // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
  window.location.href = "index.php?Entree";
}
function afficherMessagesPetite() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Petite-faim";
}
function afficherMessagesSalade() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Salade";
}
function afficherMessagesFrance() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?France";
}
function afficherMessagesPizza() {
    // Code pour afficher les messages contenant "Poulet"
    // Vous pouvez utiliser AJAX ou recharger la page avec les paramètres appropriés ici
    // Pour cet exemple, nous utiliserons le rechargement de la page avec un paramètre dans l'URL
    window.location.href = "index.php?Pizza";
}

function toggleResults() {
    var resultsDiv = document.querySelector('.resultats');
    resultsDiv.classList.toggle('hide');
}

function openPopup() {
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}


// Sélectionnez tous les liens de suppression avec la classe "delete-link"
const deleteLinks = document.querySelectorAll('.delete-link');

// Parcourez les liens de suppression et ajoutez un gestionnaire d'événements pour le clic
deleteLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault(); // Empêche le comportement par défaut du lien

        // Affichez la fenêtre contextuelle de confirmation
        const confirmDelete = confirm('Voulez-vous supprimer ce message ?');

        // Vérifiez si l'utilisateur a confirmé la suppression
        if (confirmDelete) {
            // Redirigez vers la page de suppression
            window.location.href = link.href;
        } else {
            // Fermez l'onglet ou effectuez une action appropriée
            window.close();
        }
    });
});

