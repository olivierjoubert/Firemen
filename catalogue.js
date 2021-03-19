function date() {
    weekdays = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];

    const input = document.getElementById("dispo-calendar");
    const date = new Date(input.value);
    var weekday = date.getDay();
    console.log(weekdays[weekday]);
}

