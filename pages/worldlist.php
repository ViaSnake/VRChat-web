            <div class="container">
                <h1>VRChat 最新ワールド一覧</h1>
                <div class="row">
                    <?php foreach($listworldsobj as $listworldsvalue) { ?>
                    <div class="col-md-3">
                        <div class="card box-shadow" style="width: 18rem;">
                            <img class="card-img-top" src="<?php echo $listworldsvalue->thumbnailImageUrl; ?>" alt="thmbnailImg">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo mb_strimwidth($listworldsvalue->name,0,24,"..."); ?></h5>
                                <p class="card-text">作者：<?php echo $listworldsvalue->authorName; ?></br>ユーザ人数：<?php echo $listworldsvalue->occupants; ?></br>ステータス：<?php echo $listworldsvalue->releaseStatus; ?></p>
                                <a href="vrchat://launch?id=<?php echo $listworldsvalue->id; ?>" class="btn btn-primary">アクセスする</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
