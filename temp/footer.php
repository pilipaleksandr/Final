<footer>
            <div class="wrap-footer">
                <div class="footer__contact">
                    <h2>Contacts</h2>
                    <div class="wrap-link">
                        <a href="">
                            <img src="./assets/img/phone.svg" alt="">
                            <span>+380 99 111 11 11</span>
                        </a>
                        <a href="">
                            <img src="./assets/img/mailto.svg" alt="">
                            <span>support@lifegym.com</span>
                        </a>
                        <a href="">
                            <img src="./assets/img/location.svg" alt="">
                            <span>Politekhnichna St, Kyiv, 02000</span>
                        </a>
                    </div>
                </div>
                <div class="footer__form">
                   <form action="./back/application.php" class="form" method="POST">
                    <h2>Questions remain</h2>
                    <input type="text" placeholder="Phone" name="phone" required>
                    <textarea name="message" placeholder="Message" id="" cols="30" rows="10"></textarea>
                    <button>Send</button>
                   </form>
                </div>
            </div>
        </footer>
    </div>

    <div class="burger-menu">
        <div class="menu">
            <a href="#" id="close">Close</a>
            <a href="./index.php">Головна</a>
            <?php
            if (isset($_SESSION['id'])) {
               echo '
               <a href="./admin.php">Admin-ka</a>
               <a href="./exit.php">Exit</a>
               ';
            }else{
                echo '<a href="./login.php">Log in</a>';
            }
            ?>
           
            <a href="#">Menu - 4</a>
            <a href="#">Menu - 5</a>
            <a href="#">Menu - 6</a>
        </div>
    </div>

    <script src="./assets/js/index.js"></script>
</body>

</html>