<script>
function pares() { 
    var par = document.querySelector("#par").value;
    var numeroPar = /[(0,2,4,6,8,10); (12,14,16,18,20); (22,24,26,28,30); ( 32,34,36,38,40); ( 42,44,46,48,50); (52,54,56,58,60); ( 62,64,66,68,70); ( 72,74,76,78,80); (82,84,86,88,90); (92,94,96,98,100)]/;

    if (numeroPar.count(par)) {
        window.alert(`o numeros de par e ${par}`);
}
        
    }


</script>
<html>
<head>
<title>Anagrama</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta charset="utf-8">
</head>
<body>
    
<input type="text" id="par">
                <input type="button" value="Confirmar" onclick="pares()">


</body>
</html>