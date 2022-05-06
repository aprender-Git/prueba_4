<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<div id="contenedorBadge"></div>
    <script>

        const array_badge=[
        [1,         '94300'],
        [2,     'masculino'],
        [3,         'perro'],
        [4,          'raza'],
        [5, 'pastor aleman'],
        [6,  'departamento'],
        [7,         'negro'],
        [8,      'doberman'],
        [9,          'gato'],
        [10         'persa']
                        ];        

        var badges = "";
        if (array_badge[0][0] ==1){
            badges+=' <span class="badge badge-primary" id="hide">Primary</span>';
        }

        if (array_badge[1][0] ==2){
            badges+='<span class="badge badge-secondary" id="btn2">Secondary</span>';
           
        }

        if (array_badge[2][0] ==3){
            badges+='<span class="badge badge-success" id="btn3">Success</span>';
           
        }

        if (array_badge[3][0] ==4){
            badges+='<span class="badge badge-danger" id="btn4">Danger</span>';
           
        }

        if (array_badge[4][0] ==5){
            badges+='<span class="badge badge-warning" id="btn5">Warning</span>';
           
        }

        if (array_badge[5][0] ==6){
            badges+='<span class="badge badge-info" id="btn6">Info</span>';
           
        }

        if (array_badge[6][0] ==7){
            badges+='<span class="badge badge-light" id="btn7">Light</span>';
           
        }

        var badge = document.getElementById('contenedorBadge');
	        badge.innerHTML = badges;

     $(function(){
        $('#hide').click(function(){
       
          $('#hide').hide();
        });
    });
   
    $(function(){
  

  $('#btn2').click(function(){
 
    $('#btn2').hide();
  });

});
     
    $(function(){
  

        $('#btn3').click(function(){
       
          $('#btn3').hide();
        });

    });

    $(function(){
  

  $('#btn4').click(function(){
 
    $('#btn4').hide();
  });

});
    
    $(function(){
  

  $('#btn5').click(function(){
 
    $('#btn5').hide();
  });

});


    </script>
</body>
</html>