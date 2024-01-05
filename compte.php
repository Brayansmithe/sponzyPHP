<?php

  include("session_user.php");

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
    <title>Mon Compte</title>
</head>
<body class="mt-5 mb-5">

    <?php
        include('footer.php');
    ?>
    <section class="container mt-3 d-lg-flex justify-content-between align-items-center entete  ">
        <div class="entete1">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                <circle cx="32.5" cy="32.5" r="30" fill="#291E41" stroke="white" stroke-width="5"/>
            </svg>
        </div>
        <div class="ms-3 text-center entete1">
            <p class="paragra">
                Mon Compte
            </p>
        </div>
        <div class="ms-3 text-center entete1">
            <p class="paragra">
                <a href="mesMachines.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="43" viewBox="0 0 61 43" fill="none">
                        <path d="M22.4061 26.375H21.7607L21.9219 26.9999L22.615 29.6874L22.7118 30.0625H23.0992H51.5254C52.2214 30.0625 52.8007 30.319 53.1594 30.6754C53.5136 31.0273 53.6455 31.4604 53.5232 31.8871L52.9389 33.9259L52.8129 34.3658L53.24 34.5303C55.0875 35.2415 56.2639 36.7001 56.2639 38.2969C56.2639 40.5357 53.9045 42.5355 50.7518 42.4995C47.7537 42.4653 45.4776 40.5514 45.4047 38.4098C45.3646 37.2332 45.9562 36.1363 46.9912 35.3323L48.1432 34.4374H46.6845H24.4822H23.0236L24.1754 35.3322C25.1777 36.1109 25.7639 37.1643 25.7639 38.2969C25.7639 40.5789 23.3088 42.6145 20.069 42.4951C17.2047 42.3897 15.0462 40.571 14.9101 38.5175C14.805 36.9318 15.8547 35.4643 17.5893 34.6731L17.9707 34.4991L17.866 34.0933L10.4266 5.25012L10.3299 4.875H9.94247H2.54167C1.29974 4.875 0.5 4.09455 0.5 3.35937V2.01562C0.5 1.28044 1.29974 0.5 2.54167 0.5H13.3998C14.4544 0.5 15.2375 1.08466 15.4057 1.73654C15.4057 1.73655 15.4057 1.73655 15.4057 1.73656L16.3764 5.49988L16.4732 5.875H16.8606H58.4573C59.1533 5.875 59.7326 6.13149 60.0913 6.48789C60.4455 6.83979 60.5774 7.27286 60.4551 7.69959L55.4487 25.1683C55.2649 25.8098 54.4862 26.375 53.4509 26.375H22.4061ZM36.7927 23.8666L36.7927 23.8666L43.8913 18.2372C44.4757 17.7737 44.5957 17.0833 44.2992 16.5156C44.0175 15.9763 43.406 15.625 42.6819 15.625H38.625V11.0859C38.625 10.1513 37.7178 9.57812 36.8542 9.57812H34.3125C33.4489 9.57812 32.5417 10.1513 32.5417 11.0859V15.625H28.4848C27.7606 15.625 27.1492 15.9763 26.8675 16.5157C26.571 17.0833 26.691 17.7737 27.2755 18.2372L34.3741 23.8666C35.0523 24.4044 36.1144 24.4044 36.7927 23.8666Z" fill="white" stroke="white"/>
                    </svg>
                </a>
            </p>
        </div>
        
    </section>

<section class="container">
    <div class="card contener1 paragra">
        <div class="row pt-3 pda">
            <div class="col-2">
                <i class="fa-solid fa-user fa-2x"></i>
            </div>
            <div class="col-4">
                <span>
                <?php

                    if (isset($num_tel)) {
                        echo $num_tel;
                    }

                
                ?>
                </span><br>
                <span>ID:</span>
                <span>
                    
                    <?php

                        if (isset($id)) {
                        echo $id;
                        }


                    ?>
                </span>
            </div>
            <div class="col-3">
            </div>
            <div class="col-3">
                <div class="btn-group dropend ">
                    <button type="button" class="btn btn-secondary " data-bs-toggle="dropdown" aria-expanded="true">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <ul class="dropdown-menu bluecol">

                        <li><a class="dropdown-item" href="depot.php">

                            <div class="d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <g clip-path="url(#clip0_32_47)">
                                      <path d="M10.5469 0H14.4531C15.1025 0 15.625 0.522461 15.625 1.17188V9.375H19.9072C20.7764 9.375 21.2109 10.4248 20.5957 11.04L13.1689 18.4717C12.8027 18.8379 12.2021 18.8379 11.8359 18.4717L4.39941 11.04C3.78418 10.4248 4.21875 9.375 5.08789 9.375H9.375V1.17188C9.375 0.522461 9.89746 0 10.5469 0ZM25 18.3594V23.8281C25 24.4775 24.4775 25 23.8281 25H1.17188C0.522461 25 0 24.4775 0 23.8281V18.3594C0 17.71 0.522461 17.1875 1.17188 17.1875H8.33496L10.7275 19.5801C11.709 20.5615 13.291 20.5615 14.2725 19.5801L16.665 17.1875H23.8281C24.4775 17.1875 25 17.71 25 18.3594ZM18.9453 22.6562C18.9453 22.1191 18.5059 21.6797 17.9688 21.6797C17.4316 21.6797 16.9922 22.1191 16.9922 22.6562C16.9922 23.1934 17.4316 23.6328 17.9688 23.6328C18.5059 23.6328 18.9453 23.1934 18.9453 22.6562ZM22.0703 22.6562C22.0703 22.1191 21.6309 21.6797 21.0938 21.6797C20.5566 21.6797 20.1172 22.1191 20.1172 22.6562C20.1172 23.1934 20.5566 23.6328 21.0938 23.6328C21.6309 23.6328 22.0703 23.1934 22.0703 22.6562Z" fill="black"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_32_47">
                                        <rect width="25" height="25" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                                <p class="menutext">Recharger</p>
                            </div>
                        </a></li>

                        <li><a class="dropdown-item" href="retrait.php">

                            <div class="d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <g clip-path="url(#clip0_32_47)">
                                      <path d="M10.5469 0H14.4531C15.1025 0 15.625 0.522461 15.625 1.17188V9.375H19.9072C20.7764 9.375 21.2109 10.4248 20.5957 11.04L13.1689 18.4717C12.8027 18.8379 12.2021 18.8379 11.8359 18.4717L4.39941 11.04C3.78418 10.4248 4.21875 9.375 5.08789 9.375H9.375V1.17188C9.375 0.522461 9.89746 0 10.5469 0ZM25 18.3594V23.8281C25 24.4775 24.4775 25 23.8281 25H1.17188C0.522461 25 0 24.4775 0 23.8281V18.3594C0 17.71 0.522461 17.1875 1.17188 17.1875H8.33496L10.7275 19.5801C11.709 20.5615 13.291 20.5615 14.2725 19.5801L16.665 17.1875H23.8281C24.4775 17.1875 25 17.71 25 18.3594ZM18.9453 22.6562C18.9453 22.1191 18.5059 21.6797 17.9688 21.6797C17.4316 21.6797 16.9922 22.1191 16.9922 22.6562C16.9922 23.1934 17.4316 23.6328 17.9688 23.6328C18.5059 23.6328 18.9453 23.1934 18.9453 22.6562ZM22.0703 22.6562C22.0703 22.1191 21.6309 21.6797 21.0938 21.6797C20.5566 21.6797 20.1172 22.1191 20.1172 22.6562C20.1172 23.1934 20.5566 23.6328 21.0938 23.6328C21.6309 23.6328 22.0703 23.1934 22.0703 22.6562Z" fill="black"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_32_47">
                                        <rect width="25" height="25" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                                <p class="menutext">Retirer</p>
                            </div>
                            
                        </a></li>

                        

                        <li><a class="dropdown-item" href="parainage.php">

                            <div class="d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <g clip-path="url(#clip0_32_47)">
                                      <path d="M10.5469 0H14.4531C15.1025 0 15.625 0.522461 15.625 1.17188V9.375H19.9072C20.7764 9.375 21.2109 10.4248 20.5957 11.04L13.1689 18.4717C12.8027 18.8379 12.2021 18.8379 11.8359 18.4717L4.39941 11.04C3.78418 10.4248 4.21875 9.375 5.08789 9.375H9.375V1.17188C9.375 0.522461 9.89746 0 10.5469 0ZM25 18.3594V23.8281C25 24.4775 24.4775 25 23.8281 25H1.17188C0.522461 25 0 24.4775 0 23.8281V18.3594C0 17.71 0.522461 17.1875 1.17188 17.1875H8.33496L10.7275 19.5801C11.709 20.5615 13.291 20.5615 14.2725 19.5801L16.665 17.1875H23.8281C24.4775 17.1875 25 17.71 25 18.3594ZM18.9453 22.6562C18.9453 22.1191 18.5059 21.6797 17.9688 21.6797C17.4316 21.6797 16.9922 22.1191 16.9922 22.6562C16.9922 23.1934 17.4316 23.6328 17.9688 23.6328C18.5059 23.6328 18.9453 23.1934 18.9453 22.6562ZM22.0703 22.6562C22.0703 22.1191 21.6309 21.6797 21.0938 21.6797C20.5566 21.6797 20.1172 22.1191 20.1172 22.6562C20.1172 23.1934 20.5566 23.6328 21.0938 23.6328C21.6309 23.6328 22.0703 23.1934 22.0703 22.6562Z" fill="black"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_32_47">
                                        <rect width="25" height="25" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                                <p class="menutext">Inviter</p>
                            </div>
                            
                        </a></li>


                        <li><form action="deconnexion.php" method="post"><button type="submit" name="deconnexion" class="bg-transparent border-0 dropdown-item">
                            
                            <div class="d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <g clip-path="url(#clip0_32_47)">
                                      <path d="M10.5469 0H14.4531C15.1025 0 15.625 0.522461 15.625 1.17188V9.375H19.9072C20.7764 9.375 21.2109 10.4248 20.5957 11.04L13.1689 18.4717C12.8027 18.8379 12.2021 18.8379 11.8359 18.4717L4.39941 11.04C3.78418 10.4248 4.21875 9.375 5.08789 9.375H9.375V1.17188C9.375 0.522461 9.89746 0 10.5469 0ZM25 18.3594V23.8281C25 24.4775 24.4775 25 23.8281 25H1.17188C0.522461 25 0 24.4775 0 23.8281V18.3594C0 17.71 0.522461 17.1875 1.17188 17.1875H8.33496L10.7275 19.5801C11.709 20.5615 13.291 20.5615 14.2725 19.5801L16.665 17.1875H23.8281C24.4775 17.1875 25 17.71 25 18.3594ZM18.9453 22.6562C18.9453 22.1191 18.5059 21.6797 17.9688 21.6797C17.4316 21.6797 16.9922 22.1191 16.9922 22.6562C16.9922 23.1934 17.4316 23.6328 17.9688 23.6328C18.5059 23.6328 18.9453 23.1934 18.9453 22.6562ZM22.0703 22.6562C22.0703 22.1191 21.6309 21.6797 21.0938 21.6797C20.5566 21.6797 20.1172 22.1191 20.1172 22.6562C20.1172 23.1934 20.5566 23.6328 21.0938 23.6328C21.6309 23.6328 22.0703 23.1934 22.0703 22.6562Z" fill="black"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_32_47">
                                        <rect width="25" height="25" fill="white"/>
                                      </clipPath>
                                    </defs>
                                </svg>
                                <p class="menutext">Deconnexion</p>
                            </div>
                            
                        </button></form></li>

                    </ul>

                  </div>

            </div>

            <div class="row text-center pt-3 pb-3">

                <div class="col-4">

                    <span>

                    <?php

                        if (isset($solde_user)) {
                        echo $solde_user;
                        }


                    ?>

                    </span><span>F</span><br>

                    <span>Solde</span>

                </div>

                <div class="col-4">
                </div>

               <!--  <div class="col-4">
                    <span>0.00</span><br>
                    <span>Equipe</span>
                </div> -->
            </div>

        </div>

    </div>

    <div class="container-fluid contener2 paragra">

        <div class="row pt-3 bordure">

            <div class="col-2 pt-4">

                <i class="fa-solid fa-book fa-2x"></i>
            </div>

            <div class="col-7 text-center pb-3 texte">
                <span>Mes retraits</span><br> 
                <span>
                    ici vous verez la liste de 
                    tout vos retrait deja effectuer
                </span>
            </div>

            <div class="col-3 ">

                <div class="detail">
                    <span>Details</span>
                </div>

            </div>
        </div>

        <div class="row pt-3 bordure">

            <div class="col-2 pt-3">
                <i class="fa-solid fa-star fa-2x"></i>
            </div>

            <div class="col-7 text-center pb-3 texte">
                <span>Les temoignages</span><br>   
                <span>
                    Cliquez sur pour avoir 
                    les temoignages des 
                    utilisateurs
                </span>
            </div>

            <div class="col-3 ">

                <div class="detail">
                    <span>Details</span>
                </div>

            </div>
        </div>

        <div class="row pt-3 bordure">

            <div class="col-2 pt-3">
                <i class="fa-solid fa-users-gear fa-2x"></i>
            </div>

            <div class="col-7 text-center pb-3 texte">
                <span>Service client</span><br>   
                <span>
                    veillez nous contacter
                    en cas de difilculter
                </span>
            </div>

            <div class="col-3 ">

                <div class="detail">
                    <span>Contact</span>
                </div>

            </div>

        </div>

        <div class="row pt-3 bordure">

            <div class="col-2 pt-3">
                <i class="fa-solid fa-star fa-2x"></i>
            </div>

            <div class="col-7 text-center pb-3 texte">
                <span>Autres</span><br>   
                <span>
                    Cliquez sur pour avoir 
                    les temoignages des 
                    utilisateurs
                </span>
            </div>

            <div class="col-3 ">

                <div class="detail">
                    <span>Details</span>
                </div>

            </div>

        </div>

    </div>
    
</section>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    
</body>
</html>