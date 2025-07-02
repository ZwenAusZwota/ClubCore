<div class="widget-container">
    {foreach $widgets as $widget}
	<div class="widget">
		<div class="widget-header">{$widget->title}</div>
		<div class="widget-content">
		  <p>{$widget->content}</p>
		</div>
	</div>
	{/foreach}
</div>
