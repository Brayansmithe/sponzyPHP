<?php
  include("connexion.php");
  if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $cles = $_SESSION["cle"];

    $req = $con->query("SELECT * FROM utilisateurs WHERE id = '".$id."'");
    $result = $req->fetchAll();

    foreach($result as $results){
      var_dump($results);
      $num_tel = $results["num_tel"];
      $cle = $results["code_user"];
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/Compte.css">
    <script src="https://kit.fontawesome.com/c629837099.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Parainage</title>
</head>
<body class="mt-5 mb-5">
<?php
include('footer.php');
?>




    <section class="container mt-3 d-flex justify-content-between align-items-center entete  ">
      <div class="">
          <a href="/compte">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20" viewBox="0 0 13 20" fill="none">
                  <path d="M9.98615 0.775511L9.988 0.777443L11.31 2.16338C11.6765 2.54769 11.6739 3.17453 11.3118 3.55014L11.3096 3.55245L5.67662 9.47027L5.34815 9.81536L5.67698 10.1601L11.3158 16.0718C11.6824 16.4561 11.6798 17.0829 11.3177 17.4585L11.3151 17.4613L9.99385 18.8526C9.99371 18.8527 9.99358 18.8528 9.99345 18.853C9.63951 19.2236 9.08182 19.2206 8.73635 18.8545L8.73451 18.8526L0.779314 10.5124L0.77748 10.5105C0.408226 10.1275 0.408133 9.50059 0.773459 9.11759L8.72866 0.777443C9.08257 0.406408 9.64055 0.409276 9.98615 0.775511Z" fill="white" stroke="white"/>
              </svg>
          </a>
      </div>
      <div class="">
          <p class="paragra">
              Parrainage
          </p>
      </div>
      <div class="ms-3 text-center entete1">
          <p class="paragra">
              
          </p>
      </div>
      
  </section>



    <div class="row mt-3 justify-content-center align-item-center">
        <div class="card carddim p-2">
            <div class="card-body">
              <h5 class="card-title text-white ">Recommender TCM a des amis Recevez jusqu’a 10% de leurs  recharge</h5>
              <div class="liste ">
                <a href="#" class="lienliste text-center">liste des personnes parainer</a>
              </div>
              <div class="copie1 copie1s d-flex mt-5 border large-80 pe-4 ps-4 justify-content-between align-items-center rounded ps-3">
                <div class="code">
                    <h5 class=" text-white text-center">code:gfreg</h5>
                </div>
                <div class="copie ">
                    <button type="button" class="btn btn-outline-primary">copier</button>
                </div>
                
              </div>

              <div class="copie1 copie1s d-flex mt-5 border large-80 pe-4 ps-4 justify-content-between align-items-center rounded ps-3">
                <div class="code">
                    <h6 class="text-white ">lien: <a href="http://localhost/SponzyProjet/register.php?p=<?php if (isset($cle)) {  echo $cle; }; ?>"> http://localhost/SponzyProjet/register.php?p=<?php if (isset($cle)) {  echo $cle; }; ?></a></h6>
                </div>
                <div class="copie ">
                    <button type="button" class="btn btn-outline-primary">copier</button>
                </div>
                
              </div>
      
        
            </div>

          </div>

    </div>

  <section class=" container d-flex justify-content-center  mt-3 mb-5 ">
    <div class="mb-5">
        <div class="card carddim" >
            <div class="card-body">
              <h3 class="card-title text-white text-center">comment parainer</h3>
              <div class=" ">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam quia maiores deleniti! Labore illo sapiente ab, corrupti aliquid dolore nulla tempore repellat laboriosam vero, dolor delectus quidem, quisquam tenetur modi?</p>
              </div>
              

            
      
        
            </div>

        </div>

    </div>

  </section>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>