<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

?>
<div class="btn-group">
	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	Radius Control Panel <span class="caret"></span>
	</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="/users/index" class='iframe'><img src="/resources/custom/images/silk/icons/user.png"></img><?=__('Users')?></a></li>
			<li><a href="/groups/index" class='iframe'><img src="/resources/custom/images/silk/icons/group.png"></img><?=__('Groups')?></a></li>
			<li><a href="/realms/index" class='iframe'><img src="/resources/custom/images/silk/icons/world.png"></img><?=__('Realms')?></a></li>
			<li><a href="/clients/index" class='iframe'><img src="/resources/custom/images/silk/icons/server.png"></img><?=__('Clients')?></a></li>
		</ul>
</div>
<div class="btn-group">
	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
	WiSP Control Panel <span class="caret"></span>
	</button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="/users/index" class='iframe'><img src="/resources/custom/images/silk/icons/user.png" class="img-rounded"></img>Users</a></li>
			<li><a href="/locations/index" class='iframe'><img src="/resources/custom/images/silk/icons/map.png" class="img-rounded"></img>Locations</a></li>
		</ul>
</div>

<script type="text/javascript">

$(document).ready(function(){
	$(".iframe").colorbox({iframe:true, width:"60%", height:"75%"});
});

</script>			