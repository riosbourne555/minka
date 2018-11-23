<?php
    $site_url = elgg_get_site_url();
?>
<ons-page id='index'  style="background-color: #f9f9f9;" >
<ons-tabbar>
	<ons-tabbar-item page="home" label="Home" icon="ion-home" active="true" no-reload="true" persistent="true"></ons-tabbar-item>
  <ons-tabbar-item page='groups' label="Groups" icon="ion-ios-people" no-reload="true" persistent="true"></ons-tabbar-item>
  <ons-tabbar-item page='members' label="Members" icon="ion-person" no-reload="true" persistent="true"></ons-tabbar-item>
  <ons-tabbar-item page='more' label="More" icon="ion-android-more-vertical" no-reload="true" persistent="true"></ons-tabbar-item>
</ons-tabbar>

<ons-template id="home">
  <ons-page id='home-page'  style="background-color: #f9f9f9;" >
    <ons-toolbar>
        <div class="left" onclick="sidebar();">
            <ons-icon icon="ion-navicon-round"></ons-icon>
        </div>
		<div class="center" >&nbsp;&nbsp;{{site_name}}</div>

    </ons-toolbar>
	<thewire></thewire>
   <newsfeed limit='11'></newsfeed>
	<sidebar>
		<ons-list class="menu-list">
			<div style="width:100%;height:70px;background-color:#3E3D54;">
				<ons-icon icon="ion-edit" style="float:right;padding:3px;" onclick='load_page("editprofile")'></ons-icon>
				<div style="width:90%;padding-top:10px;">
					<div class="list-item-left" style="padding:5px;">
						<img src="{{avatar_path}}" class="avator" style="border-radius:20px;" onclick="load_page('myprofile')">
					</div>
					<div class="list-item-content" onclick="load_page('myprofile')">
						<div class="name">{{profile.name}}
							<span class="lucent">@{{profile.name}}</span>
						</div>

						<div class="desc" style="overflow:hidden;text-overflow:ellipsis;">{{profile.email}}</div>
						<div class="desc">{{profile.phone}}</div>
					</div>
				</div>
			</div>

		<ons-list-item class="list__item list__item--inset" onclick='reset_page("index");'>
			<ons-icon icon="ion-home"></ons-icon>
			Home
		</ons-list-item>

		<ons-list-item class="list__item list__item--inset" onclick='load_page("myprofile");'>
			<ons-icon icon="ion-star"></ons-icon>
			Profile
		</ons-list-item>
		</ons-list>

		<ons-list-header>More Options</ons-list-header>
		<ons-list class="bottom-menu-list">
			<ons-list-item class="bottom-list__item list__item--inset" style="border-bottom: 1px solid #3e3d54;" onclick='load_page("sharepage")'>
				<ons-icon icon="ion-ios-cog"></ons-icon>
				Rate This
			</ons-list-item>

			<div id="pikes_logout" style="display:none;">
				<ons-list-item class="bottom-list__item list__item--inset" onclick="load_page(&quot;login.html&quot;)">
				SignUp
				</ons-list-item>

				<ons-list-item class="bottom-list__item list__item--inset" onclick="load_page(&quot;register.html&quot;)">
				SignIn
				</ons-list-item>
			</div>

			<div id="pikes_login" style="display:none;">
				<ons-list-item class="bottom-list__item list__item--inset" onclick="logout_user()">
				<ons-icon icon="ion-log-out"></ons-icon>
				&nbsp;Logout
				</ons-list-item>
			</div>
		</ons-list>
	</sidebar>
</ons-page>

</ons-template>
</ons-page>
