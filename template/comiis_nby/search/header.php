<?PHP exit('Access Denied');?>
<!--{subtemplate common/header_common}-->
</head>
<body id="nv_search" onkeydown="if(event.keyCode==27) return false;">
	<div id="append_parent"></div><div id="ajaxwaitid"></div>
	<div id="toptb" class="cl">
		<div class="z">
			<a href="./" id="navs" class="showmenu xi2" onmouseover="showMenu(this.id)">{lang return_homepage}</a>
		</div>
		<div class="y">
			<!--{if $_G['uid']}-->
				<strong><a href="home.php?mod=space" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a></strong>
				<a href="javascript:;" id="myspace" class="showmenu xi2" onmouseover="showMenu(this.id);">{lang my_nav}</a>
				<!--{hook/global_usernav_extra1}-->
				<a href="home.php?mod=spacecp">{lang setup}</a>
				<!--{if $_G['uid'] && ($_G['group']['radminid'] == 1 || getstatus($_G['member']['allowadmincp'], 1))}--><a href="admin.php" target="_blank">{lang admincp}</a><!--{/if}-->
				<!--{hook/global_usernav_extra2}-->
				<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
			<!--{elseif !empty($_G['cookie']['loginuser'])}-->
				<strong><a id="loginuser">$_G['cookie']['loginuser']</a></strong>
				<a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
				<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
			<!--{else}-->
				<a href="member.php?mod={$_G[setting][regname]}">$_G['setting']['reglinkname']</a>
				<a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang login}</a>
			<!--{/if}-->
		</div>
	</div>
	<!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
		<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
		<!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
		     <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
		     <li>$module[url]</li>
		     <!--{/if}-->
		<!--{/loop}-->
		</ul>
	<!--{/if}-->
	$_G[setting][menunavs]
	<!--{if $_G['setting']['navs']}-->
		<ul class="p_pop h_pop" id="navs_menu" style="display: none">
		<!--{loop $_G['setting']['navs'] $nav}-->
			<!--{eval $nav_showmenu = strpos($nav['nav'], 'onmouseover="showMenu(');}-->
		    <!--{eval $nav_navshow = strpos($nav['nav'], 'onmouseover="navShow(')}-->
		    <!--{if $nav_hidden !== false || $nav_navshow !== false}-->
			<!--{eval $nav['nav'] = preg_replace("/onmouseover\=\"(.*?)\"/i", '',$nav['nav'])}-->
		    <!--{/if}-->
			<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}--><li $nav[nav]></li><!--{/if}-->
		<!--{/loop}-->
		</ul>
	<!--{/if}-->
	<ul id="myspace_menu" class="p_pop" style="display:none;">
		<!--{loop $_G['setting']['mynavs'] $nav}-->
			<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
				<li>$nav[code]</li>
			<!--{/if}-->
		<!--{/loop}-->
	</ul>