
<section id="header">
                <a href="#" ><img src="../imagens/logo.png"class="logo" alt="" ></a>
                <div >
                    <ul id="navbar">
                        <li><a href="../site.html">Início</a></li>
                        <li><a href="../nutricao.html">Nutrição</a></li>
                        <li><a href="../metodologia.html">Exercício Físico</a></li>
                        
                        
                        <li><a  class="active" href="../loja/index.php">Loja</a></li>
                        <!--<li><a href="shop.html"><img src="imagens/menu.png"class="menu-btn" alt=""></a></li> -->
                        <li><a href="../contactos.html">Contactos</a></li>

                        <li><a  href="./cart.php"><i class="fas fa-shopping-basket"></i>
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                        </a></li>
                        <a href="#" id="close"><i class ="fas fa-outdent"></i></a>
                        
                    </ul>
                     
                </div>

               
            </section>