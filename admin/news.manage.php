<?php
require_once('../config.php');
require_once('../header.php');


//读取所有新闻条目
$sql = "SELECT * FROM newscont";
$pdo_statement = $pdo->query($sql);
$lists = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
/*echo '<pre>';
var_dump($row);*/
?>
<div style="margin: 10px auto;display: inline-block; text-align: left;" class="container">
    <a href="news.add.php"><button class="btn btn-info btn-lg" style="margin-bottom: 30px;">添加文章</button></a>
    <table class="table table-striped">
        <?php
        foreach ($lists as $new) {
            ?>
            <tr>
                <td>
                    <?php echo $new['title'] ?>
                    <a href="<?php echo 'news.delete.php?id='.$new['id']?>">
                        <button class="btn btn-danger pull-right">删除</button>
                    </a>
                    <a href="<?php echo 'news.modify.php?id='.$new['id']?>">
                        <button class="btn btn-info pull-right"  style="margin-right: 10px;">编辑</button>
                    </a>

                </td>
            </tr>

            <?php
        }
        ?>
    </table>
</div>
<?php
require_once('../bottom.php');
?>
