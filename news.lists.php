<?php
require_once('./config.php');
require_once('./header.php');
?>
<div style="margin: 10px auto;display: inline-block; text-align: left;" class="container">
    <a href="admin/news.manage.php">
        <button class="btn btn-info btn-lg" style="margin-bottom: 30px;">进入管理员界面</button>
    </a>
        <?php
        //读取新闻分类
        $sql = "SELECT * FROM newscat";
        $pdo_statement = $pdo->query($sql);
        $cat = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($cat as $item) {
            ?>
            <h2><?php echo $item['catname']?></h2>
    <table class="table table-striped">
        <?php
        //读取此分类新闻条目
        $sql2 = "SELECT * FROM newscont WHERE catid=$item[catid]";
        $pdo_statement2 = $pdo->query($sql2);
        $lists = $pdo_statement2->fetchAll(PDO::FETCH_ASSOC);
        foreach ($lists as $anew){?>
            <tr>
                <td>
                    <a href="<?php echo("news.detail.php?id=$anew[id]"); ?>">
                        <div class="col-md-2">
                            <?php echo $anew['title'] ?>
                        </div>
                        <div class="col-md-4">
                            <?php echo $anew['digest'] ?>
                        </div>
                        <div class="col-md-4">
                            <?php echo $anew['author'] ?>
                        </div>
                </td>
                </a>
            </tr>
            <?php} ?>
    </table>
            <?php} ?>
</div>
<?php
require_once('./bottom.php');
?>
