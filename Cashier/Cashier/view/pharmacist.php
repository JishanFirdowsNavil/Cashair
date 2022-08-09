<!DOCTYPE html>  
 <html>  
    
      <body>    
      <div class="container" style="width:500px;">              
                <div class="table-responsive">         
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>      
                          </tr>  
                          <?php   
                          include '../controller/DataController.php' ;

                          $data = loadData();

                          foreach($data as $row)  
                          {                         
                              ?>
                               <tr>
                               <td><a href="../view/details.php? name=<?php echo $row['name']?>"><?php echo $row['name'] ?></a></td>
                               
                               <td><?php echo $row['e-mail'] ?></td>
                               <td><?php echo $row['Username'] ?></td>
                               <td><?php echo $row['Gender'] ?></td>
                               <td><?php echo $row['Dob'] ?></td>
                          </tr> 
                               <?php 
                          }  
                          ?>  
                     </table> 
                     <br>
                     <a href="../view/append.php" ><button> ADD NEW </button> </a> <br> <br>
                     <a href="../view/cashier_dashboard.html" > <button> BACK </button> </a> 
                     </div>
                 </div>
      </body>  
 </html>  