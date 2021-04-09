<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>sheet</title>
  </head>
  <body>
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      
  <form id="info1">
    <div class="form-row"> 

     <div class="col-10">   
            <div class="form-row">  
<div class="col-xl"><input type="button" id="sheet" class="btn btn-brand btn-danger" value="Выгрузить"></div>
<div class="col-xl">от</div>
<div class="col-xl">18<input type="number" class="form-control" name="limit" id="limit" value="18"   style="visibility: hidden;"  placeholder="Возвраст"></div>
<div class="col-xl"> лет  </div>
<div class="col-8"> </div> 
   </div>
</div>
     <div class="col-2">  </div>

    </div>  

  </form>
  <form id="info">

        <div class="form-row">  </div>
  <div class="form-row">
    <div class="col-4">
      <input type="text" class="form-control" name="name" placeholder="Имя" >
    </div>
    <div class="col-4">
      <input type="text" class="form-control" name="last" placeholder="Фамилия" >
    </div>
    <div class="col-4">
      <input type="text" class="form-control" name="age" id="age"  oninput="valid(this)" placeholder="Возвраст">
    </div>
  </div>
    <div class="form-row">    
      <div class="col-4">
        <input type="button" id="db" class="btn btn-brand btn-primary" value="Сохранить">
</div>
      <div class="col-4">

</div>
      <div class="col-4">
       
</div>
    </div>
  
</form>


    </div>
    <div class="col-2"></div>  
</div>
<script>
function valid(a) {



   if(a.value.length<2){
$('#'+a.id).val(a.value.replace(/[^1-9]/g, '').replace(/(\..*)\./g, '$1'));

  } else{
  $('#'+a.id).val(a.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1'));
}
}
$(document).on('click','#db',function(e) {
      

    var personal = $("#info").serialize();
    $.ajax({
         data: personal,
         type: "post",               
         url: "info.php",
    success: function(data){
                   

console.log(data);   
         $('#info')[0].reset();
    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);
        }
    }
  });

  });

$(document).on('click','#sheet',function(e) {
      

    var limit = $("#info1").serialize();
    $.ajax({
         data: limit,
         type: "post",               
         url: "write-sheet.php",
    success: function(data){
                   

console.log(limit);   
        
    },
    error: function (err) {
        if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);
        }
    }
  });

  });

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>