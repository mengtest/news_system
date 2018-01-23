<?php
require_once('./config.php');
require_once('./header.php');

$newid = $_GET['id'];
//读取对应新闻
$sql6 = "SELECT * FROM newscont WHERE id=$newid";
$pdo_statement6 = $pdo->query($sql6);
$cat = $pdo_statement6->fetch(PDO::FETCH_ASSOC);
/*echo '<pre>';
var_dump($cat);*/
?>

<div style="margin: 10px auto;display: inline-block; text-align: left;" class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table table-border table-hover">
                <caption>
                    <?php echo $cat['digest'] ?>

                </caption>
                <thead>
                    <tr>
                        <th><?php echo $cat['title'] ?></th>
                    </tr>

                </thead>

                <tbody>
                <tr>
                    <td>
                        <?php echo $cat['author'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $cat['origin'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $cat['content'] ?>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php
require_once('./bottom.php');
?>
