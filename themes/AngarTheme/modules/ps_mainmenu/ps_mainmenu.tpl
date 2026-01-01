{* AngarTheme *}

{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
	  <!-- MOBILE -->
	  <!-- MOBILE -->
	  <!-- MOBILE -->
      <ul class="top-menu container top-menu-mobile" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}">
		{if $depth == 0}
		<div class="top-menu-mobile-settings">
			<div>
				{widget name="ps_languageselector"}
			 </div>
			<i id="close-menu-icon" class="fa-sharp-duotone fa-solid fa-xmark close-rwd-menu-icon"></i>
		</div>

			<li class="home_icon"><a href="{$urls.base_url}"><i class="icon-home"></i><span class="sr-only">{l s='Home' d='Shop.Theme.Global'}</span></a></li>
		{/if}

	    {if $nodes|count}
			{foreach from=$nodes item=node}
				<li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
				{assign var=_counter value=$_counter+1}
				  <a
					class="{if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if}{if $node.children|count} sf-with-ul{/if}"
					href="{$node.url}" data-depth="{$depth}"
					{if $node.open_in_new_window} target="_blank" {/if}
				  >
					{if $node.children|count}
					  {* Cannot use page identifier as we can have the same page several times *}
					  {assign var=_expand_id value=10|mt_rand:100000}
					  <span class="float-xs-right hidden-md-up">
						<span data-target="#top_sub_menu_{$_expand_id}" data-toggle="collapse" class="navbar-toggler collapse-icons">
						  <i class="material-icons add">&#xE313;</i>
						  <i class="material-icons remove">&#xE316;</i>
						</span>
					  </span>
					{/if}
					{$node.label}
				  </a>
				  {if $node.children|count}
				  <div {if $depth === 0} class="popover sub-menu js-sub-menu collapse"{else} class="collapse"{/if} id="top_sub_menu_{$_expand_id}">
					{menu nodes=$node.children depth=$node.depth parent=$node}
					{if $depth === 0}
						{if $node.type == 'category'}
							{if $node.image_urls|count}
								<div class="menu-images-container">
									{foreach from=$node.image_urls item=image_url}
										<img src="{$image_url}">
									{/foreach}
									<div class="clearfix"></div>
								</div>
							{/if}
						{/if}
					{/if}
				  </div>
				  {/if}
				</li>
			{/foreach}
		
	
		
		{/if}

      </ul>
	  	{if $depth == 0}
			<div class="profile-container hidden-md-up">
				<div class="username-container">
					<i class="fa-regular fa-user user-icon"></i>
					{widget name="ps_customersignin"}
				</div>

				{* Quick account links for mobile menu *}
				{if $customer.is_logged}
					<ul class="mobile-account-links">
						<li><a id="identity-link-mobile" href="{$urls.pages.identity}">
							<i class="material-icons">&#xE853;</i>
							{l s='Your personal information' d='Shop.Theme.Customeraccount'}
						</a></li>

						{if $customer.addresses|count}
							<li><a id="addresses-link-mobile" href="{$urls.pages.addresses}">
								<i class="material-icons">&#xE56A;</i>
								{l s='Addresses' d='Shop.Theme.Customeraccount'}
							</a></li>
						{else}
							<li><a id="address-link-mobile" href="{$urls.pages.address}">
								<i class="material-icons">&#xE567;</i>
								{l s='Add first address' d='Shop.Theme.Customeraccount'}
							</a></li>
						{/if}

						{if !$configuration.is_catalog}
							<li><a id="history-link-mobile" href="{$urls.pages.history}">
								<i class="material-icons">&#xE916;</i>
								{l s='Order history and details' d='Shop.Theme.Customeraccount'}
							</a></li>
						{/if}

						{if !$configuration.is_catalog}
							<li><a id="order-slips-link-mobile" href="{$urls.pages.order_slip}">
								<i class="material-icons">&#xE8B0;</i>
								{l s='Credit slips' d='Shop.Theme.Customeraccount'}
							</a></li>
						{/if}

						{if $configuration.voucher_enabled && !$configuration.is_catalog}
							<li><a id="discounts-link-mobile" href="{$urls.pages.discount}">
								<i class="material-icons">&#xE54E;</i>
								{l s='Vouchers' d='Shop.Theme.Customeraccount'}
							</a></li>
						{/if}

						{if $configuration.return_enabled && !$configuration.is_catalog}
							<li><a id="returns-link-mobile" href="{$urls.pages.order_follow}">
								<i class="material-icons">&#xE860;</i>
								{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}
							</a></li>
						{/if}
					</ul>
				{/if}
			</div>
		{/if}

	  <!-- DESKTOP -->
	  <!-- DESKTOP -->
	  <!-- DESKTOP -->

      <ul class="top-menu container top-menu-desktop" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}">
		{if $depth == 0}
			<li class="home_icon"><a href="{$urls.base_url}"><i class="icon-home"></i><span class="sr-only">{l s='Home' d='Shop.Theme.Global'}</span></a></li>
		{/if}

	    {if $nodes|count}
			{foreach from=$nodes item=node}
				{if $depth === 0}
					<li class="menu-story-item {$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
						<a href="{$node.url}" class="menu-story-link" {if $node.open_in_new_window} target="_blank" {/if}>
							<div class="menu-story-thumbnail">
								{if $node.image_urls[0]}
									<img src="{$node.image_urls[0]}" alt="{$node.label}">
								{else}
									<div class="menu-story-placeholder">{$node.label|truncate:1:''}</div>
								{/if}
							</div>
							<span class="menu-story-label">{$node.label}</span>
						</a>
						{if $node.children|count}
							{assign var=_expand_id value=10|mt_rand:100000}
							<div class="popover sub-menu js-sub-menu collapse" id="top_sub_menu_{$_expand_id}">
								{menu nodes=$node.children depth=$node.depth parent=$node}
							</div>
						{/if}
					</li>
				{else}
					<li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
					{assign var=_counter value=$_counter+1}
					  <a
						class="{if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if}{if $node.children|count} sf-with-ul{/if}"
						href="{$node.url}" data-depth="{$depth}"
						{if $node.open_in_new_window} target="_blank" {/if}
					  >
						{if $node.children|count}
						  {* Cannot use page identifier as we can have the same page several times *}
						  {assign var=_expand_id value=10|mt_rand:100000}
						  <span class="float-xs-right hidden-md-up">
							<span data-target="#top_sub_menu_{$_expand_id}" data-toggle="collapse" class="navbar-toggler collapse-icons">
							  <i class="material-icons add">&#xE313;</i>
							  <i class="material-icons remove">&#xE316;</i>
							</span>
						  </span>
						{/if}
						{$node.label}
					  </a>
					  {if $node.children|count}
					  <div {if $depth === 0} class="popover sub-menu js-sub-menu collapse"{else} class="collapse"{/if} id="top_sub_menu_{$_expand_id}">
						{menu nodes=$node.children depth=$node.depth parent=$node}
						{if $depth === 0}
							{if $node.type == 'category'}
								{if $node.image_urls|count}
									<div class="menu-images-container">
										{foreach from=$node.image_urls item=image_url}
											<img src="{$image_url}">
										{/foreach}
										<div class="clearfix"></div>
									</div>
								{/if}
							{/if}
						{/if}
					  </div>
					  {/if}
					</li>
				{/if}
			{/foreach}

		{/if}

      </ul>

{/function}

<div class="menu js-top-menu position-static hidden-sm-down" id="_desktop_top_menu" aria-label="{l s='Main menu' d='Modules.Mainmenu.Admin'}">
	{menu nodes=$menu.children}
    <div class="clearfix"></div>
</div>

<div class="menu js-top-menu position-static hidden-md-up" id="_mobile_top_menu" aria-label="{l s='Main menu' d='Modules.Mainmenu.Admin'}">
	<ul class="top-menu container top-menu-desktop">
		<li class="home_icon"><a href="{$urls.base_url}"><i class="icon-home"></i><span class="sr-only">{l s='Home' d='Shop.Theme.Global'}</span></a></li>
		{foreach from=$menu.children item=node}
			<li class="menu-story-item {$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}_mobile">
				<a href="{$node.url}" class="menu-story-link" {if $node.open_in_new_window} target="_blank" {/if}>
					<div class="menu-story-thumbnail">
						{if $node.image_urls[0]}
							<img src="{$node.image_urls[0]}" alt="{$node.label}">
						{else}
							<div class="menu-story-placeholder">{$node.label|truncate:1:''}</div>
						{/if}
					</div>
					<span class="menu-story-label">{$node.label}</span>
				</a>
			</li>
		{/foreach}
	</ul>
    <div class="clearfix"></div>
</div>

