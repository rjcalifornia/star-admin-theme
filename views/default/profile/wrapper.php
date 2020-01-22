<?php
/**
 * Profile info box
 */
$user = elgg_get_page_owner_entity();
?>

<?php /* We add mrn here because we're doing stupid things with the grid system. Remove this hack */ ?>

<style>
    
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -12.5px;
    margin-left: -12.5px;
}
.col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.card {
    -webkit-box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
    box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
    border: solid 1px #dde4eb;
    border-radius: 0px;
}
    .profile-page .profile-header {
    width: 100%;
    background: url("https://cdn.pixabay.com/photo/2016/01/19/17/19/starry-night-1149644_960_720.jpg") no-repeat center center;
    background-size: cover;
    padding: 60px 0;
    border-radius: 5px;
}
.ml-4, .mx-4 {
    margin-left: 1.5rem !important;
}
.mr-4, .mx-4 {
    margin-right: 1.5rem !important;
}
@media (min-width: 768px)
.justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
}

@media (min-width: 576px)
.mr-sm-3, .mx-sm-3 {
    margin-right: 1rem !important;
}

.rounded-circle[class*='img'], .settings-panel .color-tiles .tiles[class*='img'] {
    position: relative;
    overflow: hidden;
}
.img-lg {
    width: 92px;
    min-width: 92px;
    height: 92px;
}
@media (min-width: 576px)
.mb-sm-0, .my-sm-0 {
    margin-bottom: 0 !important;
}

.profile-page .profile-header .profile-info .profile-user-name {
    margin-bottom: 0;
    font-family: "roboto", sans-serif;
    font-weight: 600;
    color: #fff;
}
@media (min-width: 576px)
.text-sm-left {
    text-align: left !important;
}

.profile-page .profile-header .profile-info .profile-user-designation {
    margin-bottom: 0;
    font-family: "roboto", sans-serif;
    color: #fff;
}


.profile-page .profile-header .profile-info .profile-user-designation {
    margin-bottom: 0;
    font-family: "roboto", sans-serif;
    color: #fff;
}

p, a:not([href]):not([tabindex]) {
    color: #f5f6f5;
    font-size: 0.875rem;
}

.details {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.details .detail-col {
    border-right: 1px solid rgba(222, 226, 230, 0.3);
}
.pr-3, .px-3 {
    padding-right: 1rem !important;
}



.profile-page .profile-header .details .detail-col p:first-child {
    font-weight: 700;
}
.profile-page .profile-header .details .detail-col p {
    margin-bottom: 0;
    font-weight: 400;
    color: #fff;
}



.profile-page .profile-header .details .detail-col:last-child {
    border-right: none;
    margin-right: 0;
}

.profile-page .profile-body {
    padding-top: 50px;
}
.profile-page .profile-body .tab-switch .nav-item .nav-link.active {
    color: #000;
    border-bottom: 3px solid #2196f3;
}
.profile-page .profile-body .tab-switch .nav-item .nav-link {
    color: #6c757d;
    font-size: 1rem;
    padding-bottom: 1.2rem;
    font-weight: 600;
    border-bottom: 3px solid #ffffff;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    -webkit-transition-property: color, border-color;
    transition-property: color, border-color;
}

.profile-page .profile-body .tab-switch {
    border-bottom: 1px solid #dee2e6;
}

.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -12.5px;
    margin-left: -12.5px;
}

@media (min-width: 768px)
.col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
}

.profile-page .profile-body .tab-body {
    border: none;
    padding: 10px 0;
}
.tab-content {
    font-family: "roboto", sans-serif;
    font-size: 0.875rem;
    line-height: 1.71;
}


.tab-content > .active {
    display: block;
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.table.table-borderless, .jsgrid .table-borderless.jsgrid-table {
    border: none;
}

.pb-4, .py-4 {
    padding-bottom: 1.5rem !important;
}
.mt-5, .my-5 {
    margin-top: 3rem !important;
}

@media (min-width: 768px)
.col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}


.pb-3, .py-3, .card-revenue-table .revenue-item {
    padding-bottom: 1rem !important;
}


img {
    vertical-align: middle;
    border-style: none;
}


.pl-4, .px-4 {
    padding-left: 1.5rem !important;
}


.font-weight-bold {
    font-weight: 700 !important;
}


small, .text-small {
    font-size: 12px;
}

p, a:not([href]):not([tabindex]) {
    color: #212529;
    font-size: 0.875rem;
}

.mt-5, .my-5 {
    margin-top: 3rem !important;
}

.mb-5, .my-5 {
    margin-bottom: 3rem !important;
}

.pl-4, .px-4 {
    padding-left: 1.5rem !important;
}

.profile-page .profile-body .tab-body .stages {
    position: relative;
}

.profile-page .profile-body .tab-body .stages .stage-badge {
    position: absolute;
    top: 0;
    left: -20px;
}

.mb-2, .my-2 {
    margin-bottom: 0.5rem !important;
}

p {
    font-size: 0.875rem;
}
.horizontal-timeline .time-frame .event:nth-child(3n+2):before {
    background: #19d895;
}
.horizontal-timeline .time-frame .event:before {
    content: "";
    position: absolute;
    top: 0;
    left: -5px;
    height: 10px;
    width: 10px;
    border-radius: 100%;
}

.horizontal-timeline .time-frame {
    border-bottom: 1px solid #dee2e6;
    padding-top: 20px;
}


.horizontal-timeline .time-frame .section-time-frame {
    margin-bottom: 30px;
}

.horizontal-timeline .time-frame .event {
    border-left: 1px solid #dee2e6;
    padding-left: 2rem;
    padding-bottom: 30px;
    position: relative;
}
.horizontal-timeline .time-frame .event .event-text {
    line-height: 1;
    font-weight: 400;
    margin-bottom: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    max-width: 100%;
    white-space: nowrap;
}
p {
    font-size: 0.875rem;
}
p, a:not([href]):not([tabindex]) {
    color: #212529;
    font-size: 0.875rem;
}
.horizontal-timeline .time-frame .event .event-alert {
    margin-top: 1rem;
    padding: 11px 25px;
    background: rgba(33, 150, 243, 0.2);
    width: 80%;
    font-family: "roboto", sans-serif;
    font-size: 13px;
    font-weight: 300;
    border-radius: 4px;
}

.horizontal-timeline .time-frame .event .event-info {
    margin-top: 0.8rem;
    font-family: "roboto", sans-serif;
    font-size: 12px;
    font-weight: 400;
    color: #6c757d;
}

.horizontal-timeline .time-frame .event {
    border-left: 1px solid #dee2e6;
    padding-left: 2rem;
    padding-bottom: 30px;
    position: relative;
}

.horizontal-timeline .time-frame .event:nth-child(3n+3):before {
    background: #2196f3;
}
.horizontal-timeline .time-frame .event:last-child {
    border-left: none;
}

@media (min-width: 768px)
.col-md-3, .lightGallery .image-tile {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}

.mb-4, .user-profile .side-left .card .overview .about-user, .my-4 {
    margin-bottom: 1.5rem !important;
}
.new-accounts {
    overflow: hidden;
    position: relative;
}

.new-accounts ul.chats {
    height: 100%;
    padding: 0;
    margin-bottom: 0;
    overflow-x: hidden;
}

.new-accounts ul.chats li.chat-persons {
    padding: 15px 0;
    display: block;
    border-bottom: 1px solid #dee2e6;
}

.new-accounts ul.chats li.chat-persons span.image {
    text-decoration: none;
}

.new-accounts ul.chats li.chat-persons span.image span.pro-pic {
    
    padding: 0;
    width: 20%;
    max-width: 40px;
}

.new-accounts ul.chats li.chat-persons span.image div.user {
    width: 60%;
    padding: 5px 10px 0 15px;
}

.new-accounts ul.chats li.chat-persons span.image div.user p.u-name {
    margin: 0;
    color: #212529;
}
.new-accounts ul.chats li.chat-persons span.image div.user p.u-designation {
    margin: 0;
    color: #212529;
    font-size: 12px;
}

.new-accounts ul.chats li.chat-persons span.image span.pro-pic img {
    max-width: 100%;
    width: 100%;
    border-radius: 100%;
}

.new-accounts ul.chats li.chat-persons a span.pro-pic {
   
    padding: 0;
    width: 10%;
    max-width: 20px;
}

.new-accounts ul.chats li.chat-persons span.image span.pro-pic img {
    max-width: 20%;
    width: 20%;
    border-radius: 100%;
    
}

    </style>
<div class="row profile-page">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <?php echo elgg_view('profile/star_profile_cover'); ?>
                    <div class="profile-body">
                      <ul class="nav tab-switch" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="user-profile-info-tab" data-toggle="pill" href="#user-profile-info" role="tab" aria-controls="user-profile-info" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="user-profile-activity-tab" data-toggle="pill" href="#user-profile-activity" role="tab" aria-controls="user-profile-activity" aria-selected="false">Activity</a>
                        </li>
                      </ul>
                      <div class="row">
                        <div class="col-md-9">
                          <div class="tab-content tab-body" id="profile-log-switch">
                            <div class="tab-pane fade show active pr-3" id="user-profile-info" role="tabpanel" aria-labelledby="user-profile-info-tab">
                              <?php echo elgg_view('profile/star_profile_details'); ?>
                                </br>
                                <div class="col-12">
                                <strong>About me:</strong> </br><?php echo $user->description; ?>
                                </div>
                                </br>
                              <div class="row mt-5 pb-4 border-bottom">
                                <div class="col-md-6">
                                    <?php
                                    //echo $user->guid;
                                    $content = elgg_get_entities_from_relationship([
                                                'type' => 'group',
                                                'relationship' => 'member',
                                                'relationship_guid' => $user->guid,
                                                'limit' => 3,
                                                'pagination' => false,
                                                ]);
                                   // echo print_r($content);
                                    //echo "</br>";
                                    //echo "</br>";
                                    foreach ($content as $k) {
                                        
                                        //echo $k->id;
                                        ?>
                                    <div class="d-flex align-items-start pb-3 border-bottom">
                                        <a href="<?php echo $k->getURL(); ?>">
                                            <img src="<?php echo $k->getIconUrl('medium');?>" alt="brand logo">
                                        </a>
                                    <div class="wrapper pl-4">
                                        <a href="<?php echo $k->getURL(); ?>">
                                            <p class="font-weight-bold mb-0">
                                                <?php echo $k->name; ?>
                                            </p>
                                        </a>
                                      <small><?php echo $k->briefdescription; ?></small>
                                      </br>
                                      <small>
                                          <b>Owner</b>: 
                                          <?php 
                                                $owner = get_user($k->owner_guid);
                                                echo $owner->name;
                                          ?>
                                      </small>
                                    </div>
                                  </div>
                                    </br>
                                    <?php
                                        
                                        
                                        
                                    }
                                   ?>
                                  
                                </div>
                                 
                              </div>
                              
                            </div>
                            <div class="tab-pane fade" id="user-profile-activity" role="tabpanel" aria-labelledby="user-profile-activity-tab">
                              
                                      <?php echo elgg_view('profile/star_profile_activity'); ?>
                                 
                                   
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <h5 class="my-4">Who to follow</h5>
                          <div class="new-accounts">
                            <ul class="chats ps">
                                
                                <?php
                                $options = array(
	'owner_guids' => $user->guid,
	'types' => array('object'),
	'subtypes' => array('plugin_project'),
	'limit' => $number,
	'offset' => 0,
	'order_by' => 'e.last_action DESC',
	'pagination' => false,
);
                                $_options = elgg_get_entities($options);
                                
                                //echo print_r($_options);
                                foreach ($_options as $t) {
                              //      echo $t->title;
                                }
                                ?>
                              <li class="chat-persons">
                                <span class="image">
                                  <span class="pro-pic">
                                      <center>
                                    <img src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/faces/face3.jpg" alt="profile image"></center> </span>
                                  <div class="user">
                                    <p class="u-name">Marina Michel</p>
                                    <p class="u-designation">Business Development</p>
                                  </div>
                                </span>
                              </li>
                              <li class="chat-persons">
                                <a href="#">
                                  <span class="pro-pic">
                                    <img src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/faces/face3.jpg" alt="profile image"> </span>
                                  <div class="user">
                                    <p class="u-name">Stella Johnson</p>
                                    <p class="u-designation">SEO Expert</p>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-persons">
                                <span class="image">
                                  <span class="pro-pic">
                                    <img src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/faces/face3.jpg" alt="profile image"> </span>
                                  <div class="user">
                                    <p class="u-name">Peter Joo</p>
                                    <p class="u-designation">UI/UX designer</p>
                                  </div>
                                </span>
                              </li>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                          </div>
                          <h5 class="my-4">Pending</h5>
                          <div class="new-accounts">
                            <ul class="chats">
                              <li class="chat-persons">
                                <a href="#">
                                  <span class="pro-pic">
                                    <img src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/faces/face3.jpg" alt="profile image"> </span>
                                  <div class="user">
                                    <p class="u-name">Marina Michel</p>
                                    <p class="u-designation">Business Development</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                    </span>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-persons">
                                <a href="#">
                                  <span class="pro-pic">
                                    <img src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/faces/face3.jpg" alt="profile image"> </span>
                                  <div class="user">
                                    <p class="u-name">Stella Johnson</p>
                                    <p class="u-designation">SEO Expert</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                    </span>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-persons">
                                <a href="#">
                                  <span class="pro-pic">
                                    <img src="https://www.bootstrapdash.com/demo/star-admin-pro/src/assets/images/faces/face3.jpg" alt="profile image"> </span>
                                  <div class="user">
                                    <p class="u-name">Peter Joo</p>
                                    <p class="u-designation">UI/UX designer</p>
                                    <span class="d-flex align-items-center mt-2">
                                      <span class="btn btn-xs btn-rounded btn-outline-light mr-2">Buyer</span>
                                      <span class="btn btn-xs btn-rounded btn-outline-primary">Lead</span>
                                    </span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<div class="profile elgg-col-2of3 mrn">
	<div class="elgg-inner clearfix h-card vcard">
		<?php //echo elgg_view('profile/owner_block'); ?>
		<?php// echo elgg_view('profile/details'); ?>
	</div>
</div>