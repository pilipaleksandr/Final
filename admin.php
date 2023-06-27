<?php 
include './temp/header.php' ;


if (!isset($_SESSION['id'])) {
    header('Location: ./login.php');
}




?>
<div class="table-admin">
    <table>
        <tr>
            <td>ID</td>
            <td>Phone</td>
            <td>Message</td>
        </tr>
        <?php
                        $news = mysqli_query($connect, "SELECT * FROM `application`");
                        $news = mysqli_fetch_all($news);
                        foreach ($news as $new) {
                          
                                echo '
                                <tr>
                                <td>'.$new[0].'</td>
                                <td>'.$new[1].'</td>
                                <td>'.$new[2].'</td>
                                </tr>';
                        }?>
    </table>
</div>
</div>

<?php 
include './temp/footer.php' ;
?>