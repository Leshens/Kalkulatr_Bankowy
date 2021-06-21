<?php
$kwota1 = $_POST['kwota1'];
$kwota2 =$_POST['kwota'];
$oprocentowanie = $_POST['oprocentowane'];
$oprocentowanie1 = $_POST['oprocentowane1'];
$okres = $_POST['okres'];
$okres1 = $_POST['okres1'];
$liczbaRatWRoku = $_POST['rok'];
$wynikLokaty=$kwota2*($oprocentowanie/100)*($okres/12);
$wartośćLokaty=$kwota2+$wynikLokaty;
$oprocentowanieWskali=$oprocentowanie1*0.1;
$podatekBelki = $wynikLokaty*0.19;
$zyskLokaty=$wynikLokaty-$podatekBelki;
$rataKredytu=round($kwota1*$oprocentowanieWskali/($liczbaRatWRoku*(1-($liczbaRatWRoku/($liczbaRatWRoku+$oprocentowanieWskali))**$okres1)),2);
?>
<!doctype html>
<html lang="pl">
    <head>
        <title>Kalkulator Bankowy</title>
        <meta charset="UTF-8">
        <meta name="description" content="Kalulator bankowy">
        <meta name="keywords" content="kalkulator, bankowy , lokata, oproscenowanie, RRSO">
        <meta name="author" content="Kacper Kamm">

    </head>

    <style>
        body
        {
            background-color: #ffffff;
            color: #000000;
            width: auto;
            height: auto;
            font-family: "Tahoma";
        }
        main
        {
            width: auto;
            height: auto;
            scroll-behavior: smooth;
            padding: 10px;
        }
        header
        {
            background-color: #235ba8;
            text-align: center;
            padding: 5px;
        }
        nav{
            background-color: #cfd6e0;
            float: left;
            width: 10%;
            height: available ;
            margin-top: 20px;
            position: fixed;

        }
        article{
            float: left;
            width: auto;
            height: auto;
            padding: 20px;
            align-content: center;
            margin-left:  20%;
            margin-right: 20%;
        }
        footer{
            background-color: 	#235ba8;
            clear: both;
            padding: 0px;
            bottom:0;
            width:100%;
            height:26px;
            margin-left: fill;
            margin-right: fill;
        }
        h1.logo{
            color: #ffffff;
            font-size: 44px;
            font-weight: bold;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        h1.foot{
            color: #ffffff;
            font-size: 20px;
            font-weight: lighter;
            text-align: left;
            text-transform: lowercase;
        }
        .menu{
            list-style: none;
            text-align: left;
            margin: 2%;
            padding: 10px;
        }
        .menu a{
            color: 	#235ba8;
            text-decoration: none;
        }
        .menu a:hover{
            color: Blue;

        }
        .kalkulator{
            background-color: #cfd6e0;
            margin: 10%;
            text-align: center;
            width: 400px;
            padding: 10px;
        }
        .forma{
            margin-left: 10px;
            text-align: start;
        }
        .output{
            background-color: white;
            height: 21px;
            width: 177px;
            color: black;

        }
    </style>



<body>
    <form id="top" action="index.php" method="post">
        <header>
            <h1 class="logo">Kalkualtor Bankowy</h1>
        </header>
        <main>

            <nav>
                <ul class="menu">
                    <li><a href="#top">Kalkulator Kredytowy</a> </li>
                    <li><a href="#down">Kalkulator Lokat</a> </li>
                </ul>
            </nav>

            <article>
                <section>
                    <div  class="kalkulator">
                        <h1 >Kalkulator Kredytowy</h1>
                        <div class="forma">
                            <p>Kwota Kredytu (zł)</p><p><input type="number" value="<?php if (isset($_POST['kwota1'])) echo $_POST['kwota1']?>" name="kwota1" placeholder="Podaj wilkość kwoty"> </p>
                            <p>Oprocentowanie w  skali roku (%)</p><p><input type="number" step="0.1" value="<?php if (isset($_POST['oprocentowane1'])) echo $_POST['oprocentowane1']?>" name="oprocentowane1" placeholder="Podaj oprocentowanie"> </p>
                            <p>Okres Kredytowania (miesiące)</p><p><input type="number" value="<?php if (isset($_POST['okres1'])) echo $_POST['okres1']?>" name="okres1" placeholder="Podaj okres"> </p>
                            <p>Liczba Rat w Skali Roku</p><p><input type="number" value="<?php if (isset($_POST['rok'])) echo $_POST['rok']?>" name="rok" placeholder="Podaj liczba rat w skali roku"> </p>
                            <p><input type="submit" value="Oblicz" name="button1" ></p>
                            <p>Wyskokość Raty</p><p><div class="output"><?php echo $rataKredytu;?></div></p>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="kalkulator">
                        <h1>Kalkulator Lokat</h1>
                        <div id="down" class="forma">
                            <p>Kwota lokaty (zł)</p><p><input type="number" value="<?php if (isset($_POST['kwota'])) echo $_POST['kwota']?>" name="kwota" placeholder="Podaj wilkość kwoty"> </p>
                            <p>Oprocentowanie (%)</p><p><input type="number" step="0.1" value="<?php if (isset($_POST['oprocentowane'])) echo $_POST['oprocentowane']?>" name="oprocentowane" placeholder="Podaj oprocentowanie"> </p>
                            <p>Okres lokaty (miesiące)</p><p><input type="number" value="<?php if (isset($_POST['okres'])) echo $_POST['okres']?>" name="okres" placeholder="Podaj okres"> </p>
                            <p><input type="submit" value="Oblicz" name="button2" ></p>
                            <p>Wartość Lokaty</p><p><div class="output"><?php echo $wartośćLokaty;?></div></p>
                            <p>Podatek Belki (19%)</p><p><div class="output"><?php echo $podatekBelki;?></div></p>
                            <p>Zysk</p><p><div class="output"><?php echo $zyskLokaty;?></div></p>
                        </div>
                    </div>
                </section>
            </article>
        </main>
        <footer>
            <h1 class="foot">&copy; Made by Kacper Kamm</h1>
        </footer>
    </form>
</body>
</html>
