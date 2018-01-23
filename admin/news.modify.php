<?php
require_once('../config.php');
require_once('../header.php');
//读取新闻栏目
$sql = "SELECT * FROM newscat";
$pdo_statement = $pdo->query($sql);
$cat = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
/*echo '<pre>';
var_dump($row);*/
$modifyid = $_GET['id'];
//读取新闻
$sql2 = "SELECT * FROM newscont WHERE id=$modifyid";
$pdo_statement2 = $pdo->query($sql2);
$row = $pdo_statement2->fetch(PDO::FETCH_ASSOC);
/*echo '<pre>';
var_dump($row);*/
?>
<div style="margin: 10px auto;display: inline-block; text-align: left;" class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="news.modify.handle.php" method="post">
                <h2>更新新闻</h2>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">新闻栏目</label>
                    <select name="catid" id="" class="form-control">
                        <?php
                        foreach ($cat as $val) {
                            ?>
                            <option value="<?php echo $val['catid'] ?>"  <?php echo ($row['catid'] ==$val['catid']?'selected="selected"':'')?> >
                                <?php echo $val['catname']?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">标题</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']?>">
                    <input type="hidden" value="<?php echo $modifyid?>" name="newsid">
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">来源</label>
                    <input type="text" name="origin" class="form-control" value="<?php echo $row['origin']?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">简介</label>
                    <textarea name="digest" id="" cols="30" rows="2" id="digest" class="form-control">
                        <?php echo $row['digest']?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">新闻内容</label>
                    <textarea name="content" id="" cols="60" rows="15" id="news" class="form-control">
                         <?php echo $row['content']?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">作者</label>
                    <input type="text" name="author" class="form-control" value="<?php echo $row['author']?>">
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-lg btn-primary">更新</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once('../bottom.php');
?>
