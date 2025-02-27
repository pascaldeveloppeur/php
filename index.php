<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        
        <img src="images/IMG_20230911_063146.jpg" alt="pascal" width="200px" height="200px">
        
        <div>
            <h1>Pascal Yakou Yami</h1>
            <ul>
                <li>Tel: 0492 751 534</li>
                <li>Adresse: Rue Henry Lemaître 8, 5000</li>
                <li>Né: 29-04-1997 à Bertoua</li>
            </ul>
        </div>

    </div>
    
    

    <h2>Expériences professionnelles</h2>
    <div>
        <ul>
            <li>2019-2020: Stage à la société SOTRACO SA</li>
            <li>2018-2019: Stage à la société Neslet SA</li>
            <li>2017-2018: Stage à la société MORISET&CO</li>
        </ul>
    </div>

    <h2>Formations</h2>
    <div>
        <ul>
            <li>2015-2016: Bacaloréat C en science informatique</li>
            <li>2016-2017: Licence1 en Physique</li>
            <li>2018-2019: Licence2 en Physique</li>
            <li>2020-2021: Licence en Physique</li>
            <li>2021-2023: Dev junior </li>
            <li>2024-2025: Bachelier 1 en informatique</li>
        </ul>
    </div>

    <h2>Compétences</h2>
    <div>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>Java</li>
            <li>SQL</li>
            <li>UML</li>
            <li>Spring boot</li>
        </ul>
    </div>

    <h2>Langues</h2>
    <div>
        <ul>
            <li>Français: Courant</li>
            <li>Anglais: Moyen</li>
            <li>Neerlandais: Débutant</li>
        </ul>
    </div>

    <h2>Centres d'intérêt</h2>
    <div>
        <ul>
            <li>Football</li>
            <li>Jeux vidéo</li>
            <li>Programmation</li>
            <li>piano</li>
        </ul>

    </div>

    <h2>Profil</h2>
    <div>
        <p>Je suis un jeune passionné de la programmation. J'aime apprendre de nouvelles choses et je suis très motivé. Je suis à la recherche d'un emploi dans le domaine de la programmation.</p>
    </div>

    <h2>Contacts</h2>
    <div>
        <ul>
            <li>Email:pascalyakouyami@gmail.com </li>
            <li>LinkedIn: Pascal Yakou Yami</li>
            <li>GitHub: Pascaldeveloppeur</li>
        </ul>
    </div>

    <h2>Projets</h2>
    <div>
        <ul>
            <li>Projet1: Application de gestion de stock</li>
            <li>Projet2: Application de gestion d'e-commerce</li>
            <li>Projet3: Application de gestion de compte bancaire</li>
        </ul>
    </div>

    <h2>Stages</h2>
    <div>
        <ul>
            <li>Stage1: Mise en place d'un plateforme ci/cd </li>
        </ul>
    </div>

    <h2>Emplois</h2>
    <div>
        <ul>
            <li>Emploi1: Développeur junior</li>
        </ul>
    </div>



<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>