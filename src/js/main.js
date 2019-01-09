window.onload = function() {
    document.getElementById('linkConnection').addEventListener('click', function(e) {
        document.getElementById('routage').value = "connection";
        document.getElementById('mainForm').submit();
    });
    document.getElementById('linkMention').addEventListener('click', function(e) {
        document.getElementById('routage').value = "mention";
        document.getElementById('mainForm').submit();
    });
    document.getElementById('linkInscription').addEventListener('click', function(e) {
        document.getElementById('routage').value = "inscription";
        document.getElementById('mainForm').submit();
    });

    //if(!document.getElementById('linkPass_perdu') === "undefined") {
        
    //}
    
    document.getElementById('linkAccueil').addEventListener('click', function(e) {
        document.getElementById('routage').value = "accueil";
        document.getElementById('mainForm').submit();
    });
    //linkpass_perdu en dernier//
    document.getElementById('linkPass_perdu').addEventListener('click', function(e) {
        document.getElementById('routage').value = "pass_perdu";
        document.getElementById('mainForm').submit();
    });

    
}
