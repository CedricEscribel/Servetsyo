<!doctype html>
<html>
    <head>
        <title>Reel Time</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Ultra&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <style>label{display: inline-block; width: 80px;}</style>
    </head>
    <body>

        <label>Name</label> <input id="namebox" type="text">
        <label>RollNo</label> <input id="RollNo" type="text">
        <label>Section</label> <input id="Section" type="text">
        <label>Name</label>
        <select id="Genbox">
            <option value="Male">Male</option>
            <option value="Male">Female</option>

        </select>
        <hr>
        <button id="Insbtn">Insert</button>
        <button id="Selbtn">Select</button>
        <button id="Updbtn">Update</button>
        <button id="Delbtn">Delete</button>

        <script src="index.js"></script>
    </body>
</html>