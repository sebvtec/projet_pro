window.onload = function() {
    setRoutage('linkConnection', 'connection');
    setRoutage('linkMention', 'mention');
    setRoutage('linkInscription', 'inscription');
    setRoutage('linkAccueil', 'accueil');
    setRoutage('btnEnvoyer', 'inscriptionToBdd');
    setRoutage('btnEnvoyerConnection', 'makeConnection');
    setRoutage('btnSessionDestroye', 'makeDonnection');
    setRoutage('linkPass_perdu', 'pass_perdu');

    function setRoutage($buttonName, $route) {
        if(document.getElementById($buttonName) === "undefined") {
            document.getElementById($buttonName).addEventListener('click', function(e) {
                document.getElementById('routage').value = "inscriptionToBdd";
                document.getElementById('mainForm').submit();
            });
        }
    }

}
