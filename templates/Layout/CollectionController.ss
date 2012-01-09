<div class="typography">
		<div id="Content">
			
		<h2>$Title</h2>
	
		$Form
	
		<% if SearchFormCollection %>
		<h3><% _t('SEARCH','Search') %></h3>
		$SearchFormCollection
		<% end_if %>
	
		<% include CollectionController_Results %>
		
		<% if canCurrentUserCreate %>
		<h3>Add</h3>
		<a href="$Link/add"><% _t('ADDNEWRECORD','Add new record') %></a>
		<% end_if %>

		</div>
</div>