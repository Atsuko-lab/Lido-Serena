function chargerEmployee() {
    fetch("http://localhost/SN1/lidoserena/Lido-Serena/LidoSerena/responsable/apiEmployee.php")
        .then(response => response.json())
        .then(data => {
            let select = document.getElementById("employee");
            select.innerHTML = "";
            data.forEach(employee => {
                let option = document.createElement("option");
                option.value = employee.id;
                option.textContent = employee.username;
                select.appendChild(option);
            });
        })
        .catch(error => {
            console.error("Erreur lors de la récupération des employés:", error);
            alert("Impossible de charger les employés. Essayez encore.");
        });
}