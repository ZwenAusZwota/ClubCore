{include 'header.tpl'}
<div id="2025-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content"></div>
	</div>
</div>
<header>
	<h1>{$title}</h1>
</header>

<nav class="top-nav">
    {if $validLogin}
      <a class="nav-link" href="{$mainURL}/profile">{$i18n->get('SYS_MY_PROFILE')}</a>
      <a class="nav-link" href="{$mainURL}/logout">{$i18n->get('SYS_LOGOUT')}</a>
    {else}
		<a class="nav-link" href="#" id="login-button">{$i18n->get('SYS_LOGIN')}</a>
    {/if}
</nav>

<div class="layout">
    <aside class="sidebar">
		{if $validLogin}
      <ul>
		{foreach $menu as $entry}
		{strip}
			{if $entry->parent == ''}
			 <li class="level_0"><a href="{$entry->path}">{$entry->title}</a></li>
			 {foreach $menu as $sub}
				{if $sub->parent != ''}
				  {if $sub->parent == $entry->name}
					<ul>
						<li class="level_1"><a href="{$sub->path}">{$sub->title}</a></li>
					</ul>
				{/if}{/if}
			 {/foreach}
			{/if}
		{/strip}
		{/foreach}
      </ul>
	  {/if}
    </aside>

    <main class="content">
      <h2>{$headline}</h2>
	  {$content}
    </main>
	
</div>

{include 'footer.tpl'}