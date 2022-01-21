<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    <div id="container" class=" position-relative d-flex"> <!--  -->
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<input class="d-none" id="check" type="checkbox">       
<?php  

include ('sidebar.php')

?>
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
        <div class="container"> <!--  -->
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<?php  

include ('navbar.php')

?>





                <div class="">
                    <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">students lists</h2>
                    <i class="bi bi-chevron-expand fs-3 text-info"></i>
                   </div>
                     <div class="table-responsive ">
               <table class="table table-hover table-striped ">

                   <tbody class="border-top-0">
                       <tr>
                       <th scope="row" class="text-secondary"></th>
                       <th  class="text-secondary">Name</th>
                       <th  class="text-secondary">Email</th>
                       <th  class="text-secondary">Phone</th>
                       <th  class="text-secondary">Enroll Number</th>
                       <th  class="text-secondary" colspan="2">Date of admission</th>  
                     </tr>
                     <?php  
                      
                      $students = [
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                          [
                              'name'=> 'username',
                              'email' => 'user@gmail.com',
                              'phone' => '0933477800',
                              'enroll_number' => '12345678910',
                              'date_of_admission' => '16-Jan,2022'
                          ],
                      ];
                      foreach($students as $student){
                          echo'<tr>
                          <td class="text-black "> <img src="username.png" alt="" ></td>
                          <td class="text-black py-4">'.$student['name'].'</td>
                          <td class="text-black py-4">'.$student['email'].'</td>
                          <td class="text-black py-4">'.$student['phone'].'</td>
                          <td class="text-black py-4">'.$student['enroll_number'].'</td>
                          <td class="text-black py-4">'.$student['date_of_admission'].'</td>
                          <td class="py-4 d-flex justify-content-evenly"><i class="bi bi-pen text-info" id="text-ciel"></i><i class="bi bi-trash text-info" id="text-ciel"></i></td>
                      </tr>';
                      }

                     
                     
                     ?>
                    

                     
                    
                   </tbody>
                 </table>
                </div>
               </div>  






            </div>
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
           
 <!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::  -->  
         </div>
<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
    </div>

</body>
</html>