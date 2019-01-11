window.onload = function() {
    
    setRoutage("linkConnection", "connection");
    setRoutage("linkMention", "mention");
    setRoutage("linkInscription", "inscription");
    setRoutage("linkAccueil", "accueil");
    setRoutage("btnEnvoyer", "inscriptionToBdd");
    setRoutage("btnEnvoyerConnection", "makeConnection");
    setRoutage("btnSessionDestroye", "makeDeconnection");
    setRoutage("linkPass_perdu", "pass_perdu");
    setRoutage("logoGarage", "monGarage");
    setRoutage("logoForum", "menuForum");
    setRoutage("logoArticleTech", "menuArticleTechnique");
    setRoutage("logoImpression", "");
    setRoutage("logoSwap", "");
    setRoutage("logoIndex", "");

    function setRoutage($buttonName, $route) {
        if(document.getElementById($buttonName) !== null) {
            document.getElementById($buttonName).addEventListener('click', function(e) {
                document.getElementById('routage').value = $route;
                document.getElementById('mainForm').submit();
            });
        }
    }
}
