<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form` (`name`, `email`, `number`, `data`) 
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'agendamento feito com sucesso!';
    } else {
        $message[] = 'falha ao agendar';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dentista</title>
    <link rel="shortcut icon" type="img/x-icon" href="./img/kalangos.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>

    <!--header section starts-->
    <header class="header fixed-top" id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">dental<span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">sobre</a>
                    <a href="#services">serviços</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contatos</a>
                </nav>
                <a href="#contact" class="link-btn">agende sua consulta</a>
                <div class="fas fa-bars" id="menu-btn"></div>
            </div>
        </div>
    </header>
    <!--header section ends-->

    <!--home section starts-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>seu sorriso com mais brilho</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Saepe, alias? Sapiente excepturi error, amet eveniet
                        corrupti iusto labore modi blanditiis fugiat? A eligendi odio eos.
                    </p>
                    <a href="#contact" class="link-btn">agende sua consulta</a>
                </div>
            </div>
        </div>
    </section>
    <!--home section ends-->

    <!--about section starts-->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="img/about-img.jpg" alt="" class="w-100 mb-4 mb-md-0">
                </div>

                <div class="col-md-6 content">
                    <span>sobre nós</span>
                    <h3>sua família bem cuidada</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Magnam, cupiditate praesentium et nesciunt repudiandae eos
                        minus quaerat, consequuntur temporibus deserunt laudantium
                        cum dolor sint alias repellendus ut voluptas iure necessitatibus.
                    </p>
                    <a href="#contact" class="link-btn">agende sua consulta</a>
                </div>
            </div>
        </div>
    </section>
    <!--about section ends-->

    <!--services section starts-->
    <section class="services" id="services">
        <h1 class="heading">nossos serviços</h1>
        <div class="box-container container">

            <div class="box">
                <img src="img/icon-1.svg" alt="">
                <h3>alinhamento dental</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ullam?
                </p>
            </div>

            <div class="box">
                <img src="img/icon-2.svg" alt="">
                <h3>odontologia estética</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ullam?
                </p>
            </div>

            <div class="box">
                <img src="img/icon-3.svg" alt="">
                <h3>higiene oral</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ullam?
                </p>
            </div>

            <div class="box">
                <img src="img/icon-4.svg" alt="">
                <h3>tratamento de canal</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ullam?
                </p>
            </div>

            <div class="box">
                <img src="img/icon-5.svg" alt="">
                <h3>consultoria dental ao vivo</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ullam?
                </p>
            </div>

            <div class="box">
                <img src="img/icon-6.svg" alt="">
                <h3>análise dental</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, ullam?
                </p>
            </div>

        </div>
    </section>
    <!--services section ends-->

    <!--process section starts-->
    <section class="process">
        <h1 class="heading">processo de trabalho</h1>
        <div class="box-container container">

            <div class="box">
                <img src="img/process-1.png" alt="">
                <h3>Odontologia Estética</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, nam.</p>
            </div>

            <div class="box">
                <img src="img/process-2.png" alt="">
                <h3>Odontologia Pedriática</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, nam.</p>
            </div>

            <div class="box">
                <img src="img/process-3.png" alt="">
                <h3>Implantes Dental</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, nam.</p>
            </div>

        </div>
    </section>
    <!--process section ends-->

    <!--reviews section starts-->
    <section class="reviews" id="reviews">
        <h1 class="heading">clientes satisfeitos</h1>
        <div class="box-container container">
            <div class="box">
                <img src="img/pic-1.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aut, nulla culpa quas quisquam enim rem tempora similique ipsam fuga laboriosam.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>fulano de tal</h3>
                <span>cliente satisfeito</span>
            </div>
            <div class="box">
                <img src="img/pic-2.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aut, nulla culpa quas quisquam enim rem tempora similique ipsam fuga laboriosam.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sicrana de tal</h3>
                <span>cliente satisfeito</span>
            </div>
            <div class="box">
                <img src="img/pic-3.png" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aut, nulla culpa quas quisquam enim rem tempora similique ipsam fuga laboriosam.
                </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>beltrano de tal</h3>
                <span>cliente satisfeito</span>
            </div>
        </div>
    </section>
    <!--reviews section ends-->

    <!--contact section starts-->
    <section class="contact" id="contact">
        <h1 class="heading">agende sua consulta</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <!--<p class="message">testing message box</p>-->
            <span>seu nome</span>
            <input type="text" name="name" id="" placeholder="seu nome" class="box" required>
            <span>seu email</span>
            <input type="email" name="email" id="" placeholder="seu email" class="box" required>
            <span>seu telefone</span>
            <input type="number" name="number" id="" placeholder="seu telefone" class="box" required>
            <span>escolha uma data</span>
            <input type="datetime-local" name="date" class="box">
            <input type="submit" value="marque sua consulta" name="submit" class="link-btn">
        </form>
    </section>
    <!--contact section ends-->
    <!--footer section starts-->
    <section class="footer">
        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>telefone</h3>
                <p>(81) 9 9470 1058</p>
                <p>(83) 9 8600 3492</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>endereço</h3>
                <p>jaboatão guararapes, pernambuco - brasil</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>horário de atendimento</h3>
                <p>07:00hs até 18:00hs</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p style="text-transform: none;">odlimor.sevla@gmail.com</p>
            </div>

        </div>
        <p class="credit">&copy; copyright @ <?php echo date('Y'); ?> <span>romildo jr.</span> | all right reserved</p>
    </section>
    <!--footer section ends-->



    <script src="js/script.js"></script>
</body>

</html>