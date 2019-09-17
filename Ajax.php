<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Checkbox Database</title>
</head>
<body>
  <h3>Selecciona los valores: </h3> <br />
    <input type="checkbox" class="get_value" value="Apple"><label>Apple</label><br />
    <input type="checkbox" class="get_value" value="Google"><label>Google</label><br>
    <input type="checkbox" class="get_value" value="IBM"><label>IBM</label><br>
    <input type="checkbox" class="get_value" value="Microsoft"><label>Microsoft</label><br>
    <input type="checkbox" class="get_value" value="Amazon"><label>Amazon</label><br>
    <button type="button" name="submit" id="submit">Guardar</button>
    <br>
    <h4 id="result"></h4>

 <script>
 $(document).ready(function(){
     $('#submit').click(function(){
         var insert = [];
         $('.get_value').each(function(){
             if($(this).is(":checked"))
             {
                 insert.push($(this).val())
             }
         });
         insert = insert.toString();
         $.ajax({
             url:"insert.php",
             method: "POST",
             data: {insert:insert},
             success: function(data){
                 $('#result').html(data);
             }
         });

     });
 });
 </script>
    
</body>
</html>