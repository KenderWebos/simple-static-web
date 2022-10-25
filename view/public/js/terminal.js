console.log("running script {terminal.js}");

terminal = document.getElementById("terminal");

// terminal.value += "Heritech Windows [Versión 10.0.19044.2130]\n(c) Heritech Corporation. Todos los derechos reservados.\nC:>";

terminal.addEventListener("keyup", function (event) {
    if (event.keyCode === 13) {
        event.preventDefault();

        console.log("Nueva linea");
        var command = terminal.value;
        command = command.split("\n");

        command = command[command.length - 2];
        console.log('el comando es: ' + command);

        interpreter(command);
    }
});

arrayCommands = ["wsp_direct: send a wsp to a munber without add him", "calendar", "shoping", "dance", "help", "cls"];
anime_dance = true;

function interpreter(argument) {
    terminal.value += "> ";
    switch (argument) {
        case "wsp_direct":
            terminal.value += `abriendo ${argument}`;
            window.open("http://localhost/index.php?p=wsp_direct")
            break;
        case "calendar":
            terminal.value += `abriendo ${argument}`;
            window.open("http://localhost/index.php?p=/modules/databases/kcalendar")
            break;
        case "shoping":
            terminal.value += `abriendo ${argument}`;
            window.open("https://www.facebook.com/marketplace/?ref=app_tab");
            window.open("https://new.yapo.cl/biobio/computadores_electronica?ca=9_s&l=0&w=1&cmn=");
            break;
        case "dance":
            terminal.value += `dance: ${!anime_dance}`;
            anime_dance = !anime_dance;
            console.log(`dance: ${anime_dance}`);
            if (anime_dance) { document.getElementById("anime_dance").style.display = "block"; } else { document.getElementById("anime_dance").style.display = "none"; }
            break;
        case "help":
            terminal.value += `comandos disponibles: \n`;
            printCommands();
            break;
        case "cls":
            terminal.value = '';
            break;
        case "clear":
            terminal.value = '';
            break;
        default:
            terminal.value += `"${argument}" no se reconoce como un comando interno o externo.`;

    }

    if (argument != "cls" && argument != "clear") { terminal.value += "\n" };
}

function printCommands() {
    for (let index = 0; index < arrayCommands.length; index++) {
        terminal.value += "        "+arrayCommands[index] + "\n";
    }
}