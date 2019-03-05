<html>
<head><h1>Pedir pizza</h1></head>
<body>
<form action="ejer-13a.php" method="post">
    Nombre cliente: <input type="text" name="nom"><br>
    Direccion: <input type="text" name="direc"><br><hr>

    Prosciutto: <input type="checkbox" name="pros"><br>
    Quantity: <select name="qpros">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select><br><hr>
    Napolitana: <input type="checkbox" name="napo"><br>
    Quantity: <select name="qnapo">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select><br><hr>
    Mozzarella: <input type="checkbox" name="mozza"><br>
    Quantity: <select name="qmoza">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select><hr>
    <input type="submit" name="btn">
</form>
</body>
</html>