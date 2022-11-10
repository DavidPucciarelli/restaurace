<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registracni formular</h1>
    <fieldset>
        <h4>Zakladni info</h4>

        <label for="name">Jmeno:</label>
        <input id="name" type="text" placeholder="Adam" required>
        <br><br>
        
        <label for="surname">Prijmeni:</label>
        <input id="surname" type="text" placeholder="Smith" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input id="email" type="email" placeholder="AdamSmith@Gmail.com" required>
        <br><br>
        
        <label for="heslo">Heslo:</label>
        <input id="heslo" type="password" required>
        <br><br>

        <label for="soubor">Obrazek:</label>
        <input id="soubor" type="file">
    </fieldset>
    <br>
    <fieldset>
        <h4>Zakladni parametry</h4>

        <div>Pohlavi:</div>
        <label for="sex">Muz</label>
        <input id="sex" type="radio" name="pohlavi" checked>
        <label for="sex1">Zena</label>
        <input id="sex1" type="radio" name="pohlavi">
        <label for="sex2">Jine</label>
        <input id="sex2" type="radio" name="pohlavi"><br><br>

        <label for="age">Vek:</label>
        <input id="age" type="number" required><br><br>

        <label for="datum">Datum narozeni:</label>
        <input id="datum" type="date" required>
    </fieldset>
    <br>
    <fieldset>
        <h4>Nepovinne udaje</h4>

        <label for="about">O sebe:</label><br>
        <textarea name="" id="about" cols="30" rows="7"></textarea><br><br>

        <div>Konicky:</div>
        <label for="ch1">Cestovani</label>
        <input id="ch1" type="checkbox">
        <label for="ch2">Hudba</label>
        <input id="ch2" type="checkbox">
        <label for="ch3">Programovani</label>
        <input id="ch3" type="checkbox"><br><br>

        <label for="language">Jazyk:</label>
        <select name="" id="language">
            <optgroup label="EU:">
                <option value="cz">Czech</option>
                <option value="en">English</option>
                <option value="de">German</option>
            </optgroup>
            <optgroup label="Asia:">
                <option value="ch">Chinese</option>
                <option value="jp">Japanese</option>
                <option value="vi">Vietnamese</option>
            </optgroup>
        </select>
    </fieldset>
    <br>
    <button onclick="validate(this.parentNode)">Submit</button>
</body>
<script src="./js/script.js"></script>
</html>