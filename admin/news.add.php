<?php
require_once('../config.php');
require_once('../header.php');
//读取新闻栏目
$sql = "SELECT * FROM newscat";
$pdo_statement = $pdo->query($sql);
$cat = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
/*echo '<pre>';
var_dump($row);*/
?>
<div style="margin: 10px auto;display: inline-block; text-align: left;" class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="news.add.handle.php" method="post">
                <h2>发布新闻</h2>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">新闻栏目</label>
                    <select name="catid" id="" class="form-control">
                        <?php
                        foreach ($cat as $val) {
                            ?>
                            <option value="<?php echo $val['catid'] ?>"><?php echo $val['catname']?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">标题</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">来源</label>
                    <input type="text" name="origin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">简介</label>
                    <textarea name="digest" id="" cols="30" rows="2" id="digest" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">新闻内容</label>
                    <textarea name="content" id="" cols="60" rows="15" id="news" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-md-3">作者</label>
                    <input type="text" name="author" class="form-control">
                </div>
                <!--<input type="hidden" value="<?php /*echo time(); */?>" name="inserttime">-->
                <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-lg btn-primary">发布</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once('../bottom.php');
?>
