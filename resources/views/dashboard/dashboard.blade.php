<div class="ad-v2-hom-info">
    <div class="ad-v2-hom-info-inn">
        <ul>

            <li>
                <div class="ad-hom-box ad-hom-box-3">
                    <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                    <div class="ad-hom-view-com">
                    <p><i class="fa  fa-arrow-up up"></i> Users</p>
                    <?php $Users = App\Models\User::all() ?>
                    <h3><?php echo count($Users) ?></h3>
                    </div>
                </div>
            </li>

            <li>
                <div class="ad-hom-box ad-hom-box-1">
                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-podcast"></i></span>
                    <div class="ad-hom-view-com">
                    <p><i class="fa  fa-arrow-up up"></i> Podcasts</p>
                    <?php $Message = App\Models\Podcast::all() ?>
                    <h3><?php echo count($Message) ?></h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="ad-hom-box ad-hom-box-2">
                    <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-video-camera"></i></span>
                    <div class="ad-hom-view-com">
                    <p><i class="fa  fa-arrow-up up"></i> Videos</p>
                    <?php $Message = App\Models\Video::all() ?>
                    <h3><?php echo count($Message) ?></h3>
                    </div>
                </div>
            </li>
            <li>
                <div class="ad-hom-box ad-hom-box-5">
                    <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-fa-newspaper-o"></i></span>
                    <div class="ad-hom-view-com">
                    <p><i class="fa  fa-arrow-up up"></i> Articles</p>
                    <?php $Message = App\Models\Blog::all() ?>
                    <h3><?php echo count($Message) ?></h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
