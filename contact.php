<?php 
require_once "pdo.php";
$a=1;
if(isset($_GET['name']))
{
    $a=0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title>Contact Us</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
          <a href="index.html" class="brand-logo"><img src="gamelogo.jpg" style="width: 50px; height: 40px; margin-top: 10px ; margin-left: 10px;"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            
            <li><a href="developer.html">Developer Tools</a></li>
            <li><a href="team.html">Our Team</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a class="waves-effect waves-light btn-small" href="game.html">GAMES</a></li>
          </ul>
        </div>
      </nav>

      <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
           
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <form method="GET">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">SUBMIT</button>
              </div>
            </form>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
               
         
              </div>
            </div>
          </div>
        </div>
      </section>
<?php

      if($a==0)
      {
          $name = $_GET['name'];
          $email = $_GET['email'];
          $message = $_GET['message'];
          $sql = "insert into muddy-possum(name,email,message) values('$name', '$email','$message')";
          $result=mysqli_query($conn,$sql);
      }
      
?>
</body>

</html>