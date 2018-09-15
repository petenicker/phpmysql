<html>
    <head>
        <title>Bestellformular</title>
    </head>
    <body>
        <h1>Formulardaten</h1>

        <?php
            echo "Anrede: $Anrede<br />";
            echo "Vorname: $Vorname<br />";
            echo "Nachname: $Nachname<br />";
            echo "E-Mail: $Email<br />";
            echo "Promo: $Promo<br />";
            echo "Anzahl Karten: $Anzahl<br />";
            echo "Sektion: $Sektion<br />";
            echo "Kommentare: $Kommentare<br />";
            echo "AGB: $AGB<br />";
        ?>

        <h1>WM-Ticketservice</h1>
        <form>
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