<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     

    <title>PHP BASIC</title>
  </head>
  <body>


     
         <div class="container bg-light py-5 my-5">
      <div class="row justify-content-center">
        <div class="col-md-6">

          <h1>
            
          To get Namota please put your number.</h1>



        <form action="" method="POST">

        <input type="number" name="nam1" class="form-control mb-5" placeholder="First Number">
        <input type="number" name="nam2" class="form-control mb-5" placeholder="Second Number">
        <input type="submit" name="display" value="Get Result" class="btn btn-info">


      </form>
          
        </div>
      </div>
    
     

     <h1>
            
            <?php 


             if(isset($_POST["display"])){





              $nam1=$_POST["nam1"];
              $nam2=$_POST["nam2"];
                
              for ($i=1; $i <= $nam1 ; $i++) { 
                 echo $i . " x " . $nam2 . " = " . $i*$nam2 . "<br>";
              }
             };
             
            
              

            ?>


          </h1>

        </div>

        <div class="container bg-light py-5 my-5">
      <div class="row justify-content-center">
        <div class="col-md-6">

          <h1>
            
          To know your grade point, Please put your marks.</h1>



        <form action="" method="POST">

        <input type="number" name="marks" class="form-control mb-5" placeholder="Marks">
         
        <input type="submit" name="show" value="Get Result" class="btn btn-danger">


      </form>
          
        </div>
      </div>
    
     

     <h1>
            
            <?php 


             if(isset($_POST["show"])){





              $nam=$_POST["marks"];
              
                if ($nam>100) {
                   echo "please enter the number which is limit 0 to 100";
                } elseif ($nam>=80) {
                   echo "You got A+ grade";
                }elseif ($nam>=70) {
                   echo "You got A grade";
                } elseif ($nam>=60) {
                   echo "You got A- grade";
                } elseif ($nam>=50) {
                   echo "You got B grade";
                }elseif ($nam>+40) {
                   echo "You got C grade";
                }elseif ($nam>=33) {
                   echo "You got D grade";
                }elseif ($nam<33) {
                   echo "You have failed";
                }
                
               
             };  

            ?>


          </h1>

        </div>

        <div class="container bg-light">
          <div class="row">
            <div class="col-sm-6 py-5">
              <form action=" " method="POST">

                <input type="text" name="name" placeholder="Full Name" class="form-control mb-3"><br>
                <input type="email" name="email" placeholder="Email Address" class="form-control mb-3"><br>
                <input type="text" name="phone" placeholder="Phone Number" class="form-control mb-3"><br>
                <input type="password" name="password" placeholder="Password" class="form-control mb-3"><br>
                <input type="password" name="repassword" placeholder="Retype password" class="form-control mb-3"><br>
                
                <strong class="py-4">Select Your Gender</strong><br>
                <input type="radio" name="gender" id="man" value="man " checked><label for="man" class="ml-2">Man</label><br>
                <input type="radio" name="gender" id="woman" value="woman"><label for="woman" class="ml-2">Woman</label><br>
                <input type="radio" name="gender" id="other" value="other"><label for="other" class="ml-2">Other</label><br>


                <strong class="py-4">Choose Your Favorite Country</strong><br>
                <input type="checkbox" name="country[]" id="usa" value="USA"><label for="usa" class="ml-2">USA</label><br>
                <input type="checkbox" name="country[]" id="Canada" value="CANADA"><label for="Canada" class="ml-2">CANADA</label><br>
                <input type="checkbox" name="country[]" id="AUS" value="AUS"><label for="AUS" class="ml-2">AUS</label><br>
                <input type="checkbox" name="country[]" id="England" value="ENGLAND"><label for="England" class="ml-2">ENGLAND</label><br>


                 <select name="subject" class="form-control mb-3">
                   <option>Select Your Subject</option>
                   <option value="Web Design">Web Design</option>
                   <option value="Graphic Design">Graphic Design</option>
                   <option value="WordPress Development">WordPress Development</option>
                   <option value="Shopify Website">Shopify Website</option>
                   <option value="WooCommerce Store">WooCommerce Store</option>
                 </select>
                 <textarea name="meassage" class="form-control mb-3" rows="6" placeholder="Message"></textarea>

                 <input type="submit" name="signup" value="Sign Up" class="btn btn-primary px-3">

              </form>
            </div>
             <div class="col-sm-6 py-5">

               <?php 

                  $info="";

                  if(isset($_POST["signup"])){



                   $password=$_POST["password"];
                   $repassword=$_POST["repassword"];
                   $name=$_POST["name"];
                   $email=$_POST["email"];
                   $email=filter_var($email,FILTER_SANITIZE_EMAIL);
                   $phone=$_POST["phone"];

                   if(empty($name)) //name field checker
                   {
                    echo "Please Enter Your Full Name" . "<br>";
                   }
                   if(!preg_match("/^[a-zA-Z\s]+$/", $name))//valid name checker
                   {
                    echo "Please Enter Name As Only String" . "<br>";
                   }
                   if(!preg_match("/^[0-9]*$/",$phone))//valid number checker
                   {
                    echo "Please Enter Only Number" . "<br>";
                   }
                   if(strlen($phone)<11)//number length checker
                   {
                     echo "Please Enter The Number(0-9)" ."<br>";
                    }
                    if(strlen($phone)>12){
                      echo "The Number You Entered, It's Too Long. Please Enter The Number(0-9)" ."<br>";

                    }
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                       
                    

                   
                    if($password==$repassword AND $password !=""){

                    

                    $name=$_POST["name"];
                    $email=$_POST["email"];
                    $phone=$_POST["phone"];
                    $password=$_POST["password"];
                    $gender=$_POST["gender"];
                    if(!empty($_POST["country"])){
                      foreach ($_POST["country"] as $selected) {
                         
                      }
                    };

                    $subject=$_POST["subject"];
                    $meassage=$_POST["meassage"];

                    $info=
                    "<i>Full Name</i> :". "<b>". $name . "</b>" . "<br>" .
                    "<i>Email Address</i> :". "<b>". $email . "</b>" . "<br>" .
                    "<i>Phone Number</i> :". "<b>". $phone . "</b>" . "<br>" .
                    "<i>Password</i> :". "<b>". $password . "</b>" . "<br>" .
                    "<i>Gender</i> :". "<b>". $gender . "</b>" . "<br>" .
                    "<i>Country</i> :". "<b>". $selected . "</b>" . "<br>" .

                    "<i>Subject</i> :". "<b>". $subject . "</b>" . "<br>" .
                    "<i>Message</i> :". "<b>". $meassage . "</b>" . "<br>" ;


                    echo $info;


                  }else{
                    echo "Please enter a  valid email address";
                  }

                  }else{
                    echo "Password is not correct";
                  }



                  }





               ?>

               
             </div>
          </div>
        </div>

       





     
        

        
      

    
        






   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>