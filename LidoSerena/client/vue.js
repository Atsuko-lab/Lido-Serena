fetch('apiPoint.php')
    .then(res => res.json())
    .then(clients => {
        document.getElementById('client').innerHTML = clients
            .map(c => `${c.prenom} ${c.nom}`).join('<br>');

        document.getElementById('nombre2points').innerHTML = clients
            .map(c => `${c.prenom} : ${c.points} pts`).join('<br>');
    });

fetch('apiRecompense.php')
    .then(res => res.json())
    .then(recompenses => {
        document.getElementById('récompenses').innerHTML = recompenses
            .map(r => `${r.descriptionRécompenses} — ${r.nbrPoints} pts`).join('<br>');
    });