<!DOCTYPE html>
<html>
<head>
    <title>Enregistrer un post</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            color: white;
            font-family: Arial, sans-serif;
        }

        form {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
        }

        h1 {
            text-align: center;
            color: blue;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: black;
            font-weight: bold;
        }

        input[type="text"], textarea, select {
            width: 90%;
            padding: 10px 20px;
            margin-bottom: 10px;
            border: none;
            background: #f1f1f1;
            outline: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            display: block;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>

<h1 style="margin-top: 20px">Enregistrer un post</h1>
<form method="post">
    <div class="form-group">
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div class="form-group">
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
    </div>

    <div class="form-group">
        <label for="link">Lien :</label>
        <input type="text" name="link" id="link" required>
    </div>

    <div class="form-group">
        <label for="type">Type :</label>
        <select name="type" id="type" required>
            <option value="">-- Choisissez votre categorie --</option>
            <optgroup label="Designe">
                <option value="web">Designer web</option>
                <option value="mobile">Designer mobile</option>
                <option value="Infographie">Infographie</option>
            </optgroup>
            <optgroup label="Developpeur">
                <option value="PHP">PHP</option>
                <option value="Javascript">Javascript</option>
                <option value="JEE">JEE</option>
            </optgroup>
            <optgroup label="Codeur">
                <option value="C">C</option>
                <option value="C#">C#</option>
                <option value="C++">C++</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
            </optgroup>
        </select>
    </div>

    <input type="submit" name="post" value="Enregistrer">
</form>
</body>
</html>