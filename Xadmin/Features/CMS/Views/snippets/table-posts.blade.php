<table class="table table-striped table-vcenter">
    <thead>
        <tr>
        	<td>
        		<label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox" checked=""><span></span> 
                </label>
        	</td>
            <th>Title</th>
            <th style="width: 15%;">Status</th>
            <th class="text-center" style="width: 100px;">Date</th>
        </tr>
    </thead>
    <tbody>
    	@foreach ($posts as $key => $post)
    		<tr>
	            <td>
	        		<label class="css-input css-checkbox css-checkbox-default">
	                    <input type="checkbox" checked=""><span></span> 
	                </label>
	        	</td>
	        	<td class="font-w600">The Importance of Social Media</td>
	            <td>
	                <span class="label label-danger">Published</span>
	            </td>
	             <td class="text-center">
	                8/13/2015 5:00 PM
	            </td>
	        </tr>
		@endforeach
    </tbody>
</table>