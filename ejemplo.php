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

        function badgesAdopcion(){

            const array_badge=[
            [1,             '94300'],
            [2,         'masculino'],
            [3,             'perro'],
	          [4,         	'pulldog'],
	          [5,      'departamento'],
	          [6,         	  'negro'],
            [7,         	     'ok'],
            [8,         	    'oki'],
            [9,         	      'o'],
            [10,         	      'hi'],
                            ];        

            var badges = "";
            if (array_badge[0][0] ==1){
                badges+='<span class="badge badge-primary" id="btn">Primary</span> ';
            }

            if (array_badge[1][0] ==2){
                badges+='<span class="badge badge-secondary" id="btn2">Secondary</span> ';
            }

            if (array_badge[2][0] ==3){
                badges+='<span class="badge badge-success" id="btn3">Success</span> ';
            }
            
            if (array_badge[3][0] =4){
                badges+='<span class="badge badge-danger" id="btn4">Danger</span> ';
            }

            if (array_badge[4][0] =5){
                badges+='<span class="badge badge-warning" id="btn5">Warning</span> ';
            }

            if (array_badge[5][0] =6){
                badges+='<span class="badge badge-info" id="btn6">Info</span> ';
            }

            if (array_badge[6][0] =7){
                badges+='<span class="badge badge-light" id="btn7">Light</span> ';
            }

            if (array_badge[7][0] =8){
                badges+='<span class="badge badge-dark" id="btn8">Dark</span> ';
            }

            if (array_badge[8][0] ==9){
                badges+='<span class="badge badge-primary" id="btn9">Primary</span> ';
            }

            if (array_badge[9][0] ==10){
                badges+='<span class="badge badge-secondary" id="btn10">Secondary</span> ';
            }
       


          var contenedorBadge = document.getElementById('contenedorBadge');
          contenedorBadge.innerHTML = badges;

          $(function(){
              $('#btn').click(function(){
            
                $('#btn').hide();
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

          $(function(){
              $('#btn6').click(function(){
            
                $('#btn6').hide();
              });
          });

          $(function(){
              $('#btn7').click(function(){
            
                $('#btn7').hide();
              });
          });

          $(function(){
              $('#btn8').click(function(){
            
                $('#btn8').hide();
              });
          });

          $(function(){
              $('#btn9').click(function(){
            
                $('#btn9').hide();
              });
          });

          $(function(){
              $('#btn10').click(function(){
            
                $('#btn10').hide();
              });
          });







          //function badges(){
           
            //badgesAdopcion();
          //}
        }

        badgesAdopcion();

      </script>
  </body>
</html>