<?php

  function printThatShit($count)  {
  
    $i = 0;
    print("<!printing that shit>\n");
    
    while($count != $i)  {
      print("\n" .
            "<tr>\n" .				
	    "<td class=\"quad01\" width=\"100%\">\n" .
	    "&nbsp\n" .
	    "</td>\n" .
            "</tr>");
      $i++;
    }
  }
?>

<html>
  <head>
    <style>
    
   .full0 {
   
     border-top:    1px solid #000000;
     border-bottom: 1px solid #000000;
     border-left:   1px solid #000000;
     border-right:  1px solid #000000;
     padding: 0cm;
     font-size: 12pt;
   }
   
    .quad1 {
   
     border-top:    1px solid #000000;
     border-bottom: none;
     border-left:   none;
     border-right:  1px solid #000000;
     padding: 0cm;
     font-size: 12pt;
   }
 
    .quad2 {
   
     border-top:    1px solid #000000;
     border-bottom: none;
     border-left:   1px solid #000000;
     border-right:  none;
     padding: 0cm;
     font-size: 12pt;
   }
   
    .quad3 {
   
     border-top:    none;
     border-bottom: 1px solid #000000;
     border-left:   1px solid #000000;
     border-right:  none;
     padding: 0cm;
     font-size: 12pt;
   }
   
    .quad4 {
   
     border-top:    none;
     border-bottom: 1px solid #000000;
     border-left:   none;
     border-right:  1px solid #000000;
     padding: 0cm;
     font-size: 12pt;
   }
   
    .quad01 {
   
     border-top:    1px solid #000000;
     border-bottom: none;
     border-left:   1px solid #000000;
     border-right:  1px solid #000000;
     padding: 0cm;
     font-size: 12pt;
   }  
      
    .quad02 {
   
     border-top:    1px solid #000000;
     border-bottom: 1px solid #000000;
     border-left:   1px solid #000000;
     border-right:  1px solid #000000;
     padding: 0cm;
     font-size: 12pt;
   }
   
 
   
   
    </style>
  </head>
      
<body>

<center>

<h2>COAST CLIMATE CONTROL</h2>
<img src="TopBar.png"><br><br>
  
  <form contenteditable="true">
	<table width="630" cellpadding="7" cellspacing="0">
	
			<tr>
					
			<td class="quad2">
			
			  <b>Date:</b>&nbsp<?php print(date("F j, Y")); ?>
			</td>
			
			<td class="quad01" width="55%">
			
			  <b>Job Name:</b>&nbsp
			</td>
			
			


		</tr>
        </table>
	
	<table width="630" cellpadding="7" cellspacing="0">
	
                <tr>
					
			<td class="quad01" width="100%">
			
			  <b>Location/Mailing Address:</b>&nbsp
			</td>
			

                  </tr>
		  
                  <tr>
					
			<td class="quad02" width="100%">
			
			  <b>Telephone Number:</b>&nbsp
			</td>
                  </tr>
       </table>
       
       <br>
       
       	<table width="630" cellpadding="7" cellspacing="0">
	
                <tr>
					
			<td class="quad01" width="100%">
			
			  <b>Service Authorization signature (if required):</b>&nbsp
			</td>
			

                  </tr>
		  
                  <tr>
					
			<td class="quad02" width="100%">
			
			  <b>Employee Name:  </b><i>&nbsp</i>
			</td>
                  </tr>
       </table>
       
<br>
       
       	<table width="730" cellpadding="7" cellspacing="0">
	
                <tr>
					
			<td class="quad01" width="100%">
			
			  <b>Site Instructions:</b>&nbsp
			</td>
			

                  </tr>
		  
                  <tr>
					
			<td class="quad01" width="100%">
			
			  &nbsp
			</td>
                  </tr>
		  
		                    <tr>
					
			<td class="quad02" width="100%">
			
			  &nbsp
			</td>
                  </tr>
       </table>
       
<br>

       	<table width="730" cellpadding="7" cellspacing="0">
	
                <tr>
					
			<td class="quad01" width="100%">
			
			  <b>Work Performed:</b>&nbsp
			</td>
			

                  </tr>
		  
                  <?php printThatShit(19); ?>
		  
		  <tr>
					
			<td class="quad02" width="100%">
			
			  <b>Parts to order:</b>&nbsp
			</td>
                  </tr>
       </table>
       
<br>
       
       <table width="630" cellpadding="7" cellspacing="0">
	
                <tr>
					
			<td class="quad01" width="100%">
			
			  <b>*MaterialsUsed:</b>&nbsp
			</td>
			

                  </tr>
		  
		                    <tr>
					
			<td class="quad01" width="100%">
			
			  &nbsp
			</td>
                  </tr>
		  
		  
		                    <tr>
					
			<td class="quad01" width="100%">
			
			  &nbsp
			</td>
                  </tr>
		  
		                    <tr>
					
			<td class="quad01" width="100%">
			
			  &nbsp
			</td>
                  </tr>
		  
					
			<td class="quad02" width="100%">
			
			  &nbsp
			</td>
                  </tr>
       </table>
       
<br>
       
       <table width="730" cellpadding="7" cellspacing="0">
	
                <tr>
					
			<td class="quad01" width="100%">
			
			  <b>Job Status:</b>&nbsp
			</td>
			

                  </tr>
		  
                  <tr>
					
			<td class="quad02" width="100%">
			
			  <b>Total Hours:</b>&nbsp
			</td>
                  </tr>
       </table>
  </form>      


    <h1>...</h1>
  </body>
</html>
