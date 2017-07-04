@extends('Admin::layouts.layout')

@section('content')
 <section class="content-header">
  <h1>
    Photo
    <!-- <small>Optional description</small> -->
  </h1>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol> -->
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
	            <div class="box-header">
	              <div class="pull-right">
	              	<a href="{!!route('admin.photo.create')!!}" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-plus"></i> Add New</a>
		               <button class="btn btn-danger btn-xs" id="btn-count">Remove data selected</button>
	              </div>
	            </div>
	            <!-- /.box-header -->
	            @if($photo->count() != 0)
				<div class="box-body">

				  <table id="table-post" class="table table-bordered table-striped">
				    <thead>
					    <tr>
							<th>ID</th>
							<th data-width="20%">Image</th>
							<th>Album</th>
							<th>Action</th>
						</tr>
				    </thead>
				    <tbody>
					    @foreach($photo as $item)
						<tr>
							<td >{!!$item->id!!}</td>
							<td><img src="{!!$item->img_url!!}" width="200" alt=""></td>
							<td>{!!count($item->albums) > 0 ? $item->albums->title : ''!!} </td>
							<td>
							<a href="{!!route('admin.photo.edit', array($item->id) )!!}" class="btn btn-info btn-xs"> Edit </a>
							{!!Form::open(array('route'=>array('admin.photo.destroy',$item->id),'method'=>'DELETE', 'class' => 'inline'))!!}
							<button class="btn  btn-danger btn-xs remove-btn" type="button" attrid="{!!$item->id!!}" onclick="confirm_remove(this);"   > Remove </button>
							{!!Form::close()!!}
							</td>
						</tr>
						@endforeach
				    </tbody>
				    <tfoot>

				    </tfoot>

				  </table>
				</div>
				@else
					<h2 class="text-center">No Data</h2>
				@endif
            <!-- /.box-body -->
			</div>
			</div>	<!-- end ajax-table-->

		</div>
	</div>
</section>
@stop

@section('script')
	<!-- SCRIPT -->
	{!!Html::style(asset('public/assets/backend').'/js/DataTables/datatables.min.css')!!}
	{!!Html::script(asset('public/assets/backend').'/js/DataTables/datatables.min.js')!!}


	<script type="text/javascript">
		$(document).ready(function(){
			{!! Notification::showSuccess('alertify.success(":message");') !!}
			{!! Notification::showError('alertify.error(":message");') !!}

			var table = $('#table-post').DataTable({
				'ordering': false,
				"bLengthChange": false,
				"bFilter" : false,
                "searching": true
			});

            $('input[type="search"]').on('keyup', function(){
              table.columns(2).search(this.value).draw();
            })
			/*SELECT ROW*/
			$('#table-post tbody').on('click','tr',function(){
				$(this).toggleClass('selected');
			});

			/*REMOVE SELECTED*/
			$('#btn-count').click( function () {
				var data = [];
				table.rows('.selected').data().each(function(index, e){
					// console.log(index)[0];
					data.push(index[0]);
				});
				alertify.confirm('You can not undo this action. Are you sure ?', function(e){
					if(e){
						$.ajax({
							'url':"{!!route('admin.photo.deleteall')!!}",
							'data' : {arr: data,_token:$('meta[name="csrf-token"]').attr('content')},
							'type': "POST",
							'success':function(result){
								if(result.msg = 'ok'){
									table.rows('.selected').remove();
									table.draw();
									alertify.success('The data is removed!');
								}
							}
						});
					}
				})
		    });
		})

		function confirm_remove(a){
			alertify.confirm('You can not undo this action. Are you sure ?', function(e){
				if(e){
					a.parentElement.submit();
				}
			});
		}
	</script>
@stop
