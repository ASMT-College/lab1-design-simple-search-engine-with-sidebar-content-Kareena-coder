<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
    <input type="range" id="a" name="a" value="50" oninput ="showValueOfA()" />
    <span id ="a_value">50</span>
    +
    <input type="number" id="b" name="b" value="50" />
    =
    <output name="x" for= " a b "> </output>
    <br/> </br>
    <input type="submit"/>
</form>
<script>
    function showValueOfA(){
        var a_element = document.getElementById("a_value");
        a_element.innerHTML = document.getElementById("a").value;
    }
</script>
</body>
</html>