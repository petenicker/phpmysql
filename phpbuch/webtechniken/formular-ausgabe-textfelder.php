<html>
    <head>
        <title>Bestellformular</title>
    </head>
    <body>
        <h1>Formulardaten</h1>

        <?php
            $Vorname = (isset($_POST["Vorname"]) && is_string($_POST["Vorname"])) ? $_POST["Vorname"] : "";
            $Nachname = (isset($_POST["Nachname"]) && is_string($_POST["Nachname"])) ? $_POST["Nachname"] : "";
            $Email = (isset($_POST["Email"]) && is_string($_POST["Email"])) ? $_POST["Email"] : "";
            $Promo = (isset($_POST["Promo"]) && is_string($_POST["Promo"])) ? $_POST["Promo"] : "";
            $Kommentare = (isset($_POST["Kommentare"]) && is_string($_POST["Kommentare"])) ? $_POST["Kommentare"] : "";
            $Vorname = htmlspecialchars($Vorname);
            $Nachname = htmlspecialchars($Nachname);
            $Email = htmlspecialchars($Email);
            $Promo = htmlspecialchars($Promo);
            $Kommentare = nl2br(htmlspecialchars($Kommentare));
            echo "<b>Vorname:</b> $Vorname<br />";
            echo "<b>Nachname:</b> $Nachname<br />";
            echo "<b>E-Mail:</b> $Email<br />";
            echo "<b>Promo:</b> $Promo<br />";
            echo "<b>Kommentare:</b> $Kommentare<br />";
        ?>

        <h1>WM-Ticketservice</h1>
        <form method="post">
            <input type="radio" name="Anrede" value="Hr." />Herr
            <input type="radio" name="Anrede" value="Fr." />Frau
            <input type="radio" name="Anrede" value="Frl." />Fr&auml;ulein<br />
            Vorname <input type="text" name="Vorname" /><br />
            Nachname <input type="text" name="Nachname" /><br />
            E-Mail-Adresse <input type="text" name="Email" /><br />
            Promo-Code <input type="text" name="Promo" /><br />
            Anzahl Karten
            <select name="Anzahl">
                <option value="0">Bitte w&auml;hlen</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br />
            Gew&uuml;nschte Sektion im Stadion
            <select name="Sektion[]" size="4" multiple="multiple">
                <option value="nord">Nordkurve</option>
                <option value="sued">S&uuml;kurve</option>
                <option value="haupt">Haupttrib&uuml;ne</option>
                <option value="gegen">Gegentrib&uuml;ne</option>
            </select><br />
            Kommentare/Anmerkungen
            <textarea cols="70" rows="10" name="Kommentare"></textarea><br />
            <input type="checkbox" name="AGB" value="ok" />
            Ich akzeptiere die AGB.<br />
            <input type="submit" name="Submit" value="Bestellung aufgeben" />
        </form>
    </body>
</html>