<div class="container news">
    <div class="flex">
        <?php foreach($this->data['news'] as $key => $value): ?>
        <div class="item">
            <div class="image">
                <img src="<?= HOST ?>assets/uploads/<?=$value['image'] ?>">
            </div>
            <div class="news-content">
                <?php 
                    $time = strtotime($value['publish_date']);
                    $date = date("M d, Y", $time)
                ?>
                <p class="publish-date"><?= $date ?></p>

                <a class="title" href="#"><?= $value['title'] ?></a>

                <h4 class="short-text"><?= $value['short_text'] ?></h4>
            </div>
        </div>
            <?php endforeach; ?>
    </div>
</div>