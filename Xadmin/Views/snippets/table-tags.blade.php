<table class="table table-striped table-vcenter">
    <thead>
        <tr>
        	<th>
        		<label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox" ><span></span> 
                </label>
        	</th>
            <th>Name</th>
            <th >Description</th>
            <th class="text-right" style="padding-right: 35px;">Action</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
            <td>
        		<label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox"><span></span> 
                </label>
        	</td>
        	<td>asdasd</td>
            <td>
                asdasd
            </td>
            <td class="text-right action-buttons">
                <a href="#" class="btn btn-success push-5-r push-10" type="button"><i class="fa fa-edit"></i></a>
                {{-- {!! Form::model($post, ['route' => ['admin.pages.destroy', $post->id], 'method' => 'DELETE', 'class' => 'delete-form']) !!}
                    <button type="submit" class="btn btn-danger push-5-r push-10" type="button"><i class="fa fa-trash-o"></i></button>
                {!! Form::close() !!} --}}
            </td>
        </tr>
    </tbody>
</table>