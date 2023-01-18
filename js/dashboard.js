function filterEvents() {
    // déclaration des variables
    let input, filter, table, tr, td, i, txtValue;
    input = document.querySelector(".searchevents");
    filter = input.value.toUpperCase();
    table = document.querySelector(".tableevents");
    tr = table.getElementsByTagName("tr");
    message = document.getElementById("erreurback");

    // boucle pour chaque rangée d'élement trouvé / cache celles qui ne correspondent pas à la requête
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                tr[i].classList.remove('hidden');
            } else {
                tr[i].style.display = "none";
                tr[i].classList.add('hidden');
            }
        }
    }

    allArticles = Array.from(document.querySelector('tbody').querySelectorAll("tr"));
    if (allArticles.every((element) => element.classList.contains("hidden"))) {
        message.style.display = "block";
        document.querySelectorAll('thead th').style.display = "none";
    } else {
        message.style.display = "none";
        document.querySelectorAll('thead th').style.display = "";
    }
}

function filterProjects() {
    // déclaration des variables
    let input, filter, table, tr, td, i, txtValue;
    input = document.querySelector(".searchprojects");
    filter = input.value.toUpperCase();
    table = document.querySelector(".tableprojects");
    tr = table.getElementsByTagName("tr");
    message = document.getElementById("erreurback");

    // boucle pour chaque rangée d'élement trouvé / cache celles qui ne correspondent pas à la requête
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                tr[i].classList.remove('hidden');
            } else {
                tr[i].style.display = "none";
                tr[i].classList.add('hidden');
            }
        }
    }

    allArticles = Array.from(document.querySelector('tbody').querySelectorAll("tr"));
    if (allArticles.every((element) => element.classList.contains("hidden"))) {
        message.style.display = "block";
        document.querySelectorAll('thead th').style.display = "none";
    } else {
        message.style.display = "none";
        document.querySelectorAll('thead th').style.display = "";
    }
}

function filterTemoignages() {
    // déclaration des variables
    let input, filter, table, tr, td, i, txtValue;
    input = document.querySelector(".searchtemoignages");
    filter = input.value.toUpperCase();
    table = document.querySelector(".tabletemoignages");
    tr = table.getElementsByTagName("tr");
    message = document.getElementById("erreurback");

    // boucle pour chaque rangée d'élement trouvé / cache celles qui ne correspondent pas à la requête
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                tr[i].classList.remove('hidden');
            } else {
                tr[i].style.display = "none";
                tr[i].classList.add('hidden');
            }
        }
    }

    allArticles = Array.from(document.querySelector('tbody').querySelectorAll("tr"));
    if (allArticles.every((element) => element.classList.contains("hidden"))) {
        message.style.display = "block";
        document.querySelectorAll('thead th').style.display = "none";
    } else {
        message.style.display = "none";
        document.querySelectorAll('thead th').style.display = "";
    }
}