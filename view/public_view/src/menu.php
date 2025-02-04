<header>
        <div class="logo">
          <a href="./"><img src="img/logoSanteFormation.png" alt="Logo"></a>
        </div>
        <nav class="menu"> <!-- Déplacer la classe 'menu' ici -->
          <div class="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="?view=asbl"><?=$recupNav->getNavbarAsbl()?></a></li>
            <li><a href="?view=actions"><?=$recupNav->getNavbarAction()?></a></li>
            <li><a href="?view=formations"><?=$recupNav->getNavbarFormation()?></a></li>
            <li><a href="?view=agenda"><?=$recupNav->getNavbarAgenda()?></a></li>
            <li><a href="?view=contact"><?=$recupNav->getNavbarContact()?></a></li>
            <li><a href="?view=donation"><?=$recupNav->getNavbarDon()?></a></li>
          </ul>
        </nav>
        <div id="langueNavDesktop" class="language-selector">
            <div class="selected-language">
                <img class="flag-icon" src="img/icons8-french-flag-48.png" alt="French Flag"><p>FR</p><i class="fas fa-caret-down"></i>
            </div>
            <ul class="language-options">
            <li data-lang="fr">
                <img class="flag-icon" src="img/icons8-french-flag-48.png" alt="French Flag"><p>FR</p></li>
            <li data-lang="en">
                <img class="flag-icon" src="img/icons8-great-britain-48.png" alt="American Flag"><p>EN</p></li>
            <li data-lang="nl">
                <img class="flag-icon" src="img/icons8-netherlands-48.png" alt="American Flag"><p>NL</p></li>
            <li data-lang="ar">
                <img class="flag-icon" src="img/icons8-saudi-arabia-48.png" alt="American Flag"><p>AR</p></li>
            </ul>
        </div>
</header>