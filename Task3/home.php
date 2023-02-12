<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Ajay Cyber Security Guides</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://media.istockphoto.com/vectors/ransomware-icon-vector-on-white-background-ransomware-trendy-filled-vector-id1095638720" sizes="32x32" type="image/png">
    <link rel="icon" href="https://media.istockphoto.com/vectors/ransomware-icon-vector-on-white-background-ransomware-trendy-filled-vector-id1095638720" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://media.istockphoto.com/vectors/ransomware-icon-vector-on-white-background-ransomware-trendy-filled-vector-id1095638720">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/cover/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Ajay Cyber Security Guides</h3>
                
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
        <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
            <p class="lead"><u>Ransomware</u> is a type of malicious software, or malware,that prevents you from accessing your computer files, systems, or networks and demands you pay a ransom for their return. Ransomware attacks can cause costly disruptions to operations and the loss of critical information and data.</p>
            <p class="lead">
                <a href="https://cyberthreats.ajaykumarvarma.in/ransomware.html" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
            </p>
        </main>
        
        <footer class="mt-auto text-white-50">
            <p>Made By Ajay Kumar Varma</p> 
            
        </footer>
    </div>



</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>