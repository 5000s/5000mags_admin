

		 {!! Form::open(array('url'=>'member', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Member</legend>
				{!! Form::hidden('id', $row['id']) !!}
									  <div class="form-group row  " >
										<label for="New Status" class=" control-label col-md-4 text-left"> New Status </label>
										<div class="col-md-6">
										  <select name='new_status' rows='5' id='new_status' class='select2 '   ></select>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="เลขที่สมาชิก" class=" control-label col-md-4 text-left"> เลขที่สมาชิก </label>
										<div class="col-md-6">
										  <input  type='text' name='member_number' id='member_number' value='{{ $row['member_number'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="ประเภทสมาชิก" class=" control-label col-md-4 text-left"> ประเภทสมาชิก </label>
										<div class="col-md-6">
										  
					<?php $member_type = explode(',',$row['member_type']);
					$member_type_opt = array( 'บุคคล' => 'บุคคล' ,  'นิติบุคคล' => 'นิติบุคคล' , ); ?>
					<select name='member_type' rows='5'   class='select2 '  > 
						<?php
						foreach($member_type_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['member_type'] == $key ? " selected='selected' " : '' ).">$val</option>";
						}
						?></select>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="คำนำหน้า" class=" control-label col-md-4 text-left"> คำนำหน้า </label>
										<div class="col-md-6">
										  <input  type='text' name='pre_name' id='pre_name' value='{{ $row['pre_name'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="ชื่อ - นามสกุล" class=" control-label col-md-4 text-left"> ชื่อ - นามสกุล </label>
										<div class="col-md-6">
										  <input  type='text' name='first_last_name' id='first_last_name' value='{{ $row['first_last_name'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Tel" class=" control-label col-md-4 text-left"> Tel </label>
										<div class="col-md-6">
										  <input  type='text' name='tel_1' id='tel_1' value='{{ $row['tel_1'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Tel 2" class=" control-label col-md-4 text-left"> Tel 2 </label>
										<div class="col-md-6">
										  <input  type='text' name='tel_2' id='tel_2' value='{{ $row['tel_2'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="ที่อยู่" class=" control-label col-md-4 text-left"> ที่อยู่ </label>
										<div class="col-md-6">
										  <input  type='text' name='address' id='address' value='{{ $row['address'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('subdistrict', $row['subdistrict']) !!}
									  <div class="form-group row  " >
										<label for="แขวง/ตำบล เขต/อำเภอ" class=" control-label col-md-4 text-left"> แขวง/ตำบล เขต/อำเภอ </label>
										<div class="col-md-6">
										  <input  type='text' name='district' id='district' value='{{ $row['district'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="จังหวัด" class=" control-label col-md-4 text-left"> จังหวัด </label>
										<div class="col-md-6">
										  <input  type='text' name='province' id='province' value='{{ $row['province'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="รหัสไปรษณีย์" class=" control-label col-md-4 text-left"> รหัสไปรษณีย์ </label>
										<div class="col-md-6">
										  <input  type='text' name='postal' id='postal' value='{{ $row['postal'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Zone" class=" control-label col-md-4 text-left"> Zone </label>
										<div class="col-md-6">
										  <input  type='text' name='zone' id='zone' value='{{ $row['zone'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Magazine Type" class=" control-label col-md-4 text-left"> Magazine Type </label>
										<div class="col-md-6">
										  <input  type='text' name='magazine_type' id='magazine_type' value='{{ $row['magazine_type'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="จำนวนเล่ม" class=" control-label col-md-4 text-left"> จำนวนเล่ม </label>
										<div class="col-md-6">
										  <input  type='text' name='amount_of_book' id='amount_of_book' value='{{ $row['amount_of_book'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Facebook" class=" control-label col-md-4 text-left"> Facebook </label>
										<div class="col-md-6">
										  <input  type='text' name='facebook' id='facebook' value='{{ $row['facebook'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="รูปแบบจัดส่ง" class=" control-label col-md-4 text-left"> รูปแบบจัดส่ง </label>
										<div class="col-md-6">
										  
					<?php $delivery_method = explode(',',$row['delivery_method']);
					$delivery_method_opt = array( 'ไปรษณีย์ลงทะเบียน' => 'ไปรษณีย์ลงทะเบียน' ,  'ไปรษณีย์ธรรมดา' => 'ไปรษณีย์ธรรมดา' ,  'รับเอง' => 'รับเอง' , ); ?>
					<select name='delivery_method' rows='5'   class='select2 '  > 
						<?php
						foreach($delivery_method_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['delivery_method'] == $key ? " selected='selected' " : '' ).">$val</option>";
						}
						?></select>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="ช่องทางสมัตร" class=" control-label col-md-4 text-left"> ช่องทางสมัตร </label>
										<div class="col-md-6">
										  <input  type='text' name='register_method' id='register_method' value='{{ $row['register_method'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Start Date" class=" control-label col-md-4 text-left"> Start Date </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('start_date', $row['start_date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="End Date" class=" control-label col-md-4 text-left"> End Date </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('end_date', $row['end_date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="ฉบับแรก" class=" control-label col-md-4 text-left"> ฉบับแรก </label>
										<div class="col-md-6">
										  <input  type='text' name='first_book_number' id='first_book_number' value='{{ $row['first_book_number'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="ฉบับสุดท้าย" class=" control-label col-md-4 text-left"> ฉบับสุดท้าย </label>
										<div class="col-md-6">
										  <input  type='text' name='last_book_number' id='last_book_number' value='{{ $row['last_book_number'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Ref Payment" class=" control-label col-md-4 text-left"> Ref Payment </label>
										<div class="col-md-6">
										  <input  type='text' name='ref_payment' id='ref_payment' value='{{ $row['ref_payment'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="จำนวนเงิน" class=" control-label col-md-4 text-left"> จำนวนเงิน </label>
										<div class="col-md-6">
										  <input  type='text' name='amount_payment' id='amount_payment' value='{{ $row['amount_payment'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('datetime_payment', $row['datetime_payment']) !!}
									  <div class="form-group row  " >
										<label for="หมายเหตุการชำระเงิน" class=" control-label col-md-4 text-left"> หมายเหตุการชำระเงิน </label>
										<div class="col-md-6">
										  <textarea name='note' rows='5' id='note' class='form-control form-control-sm '
				           >{{ $row['note'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="วันที่โอน" class=" control-label col-md-4 text-left"> วันที่โอน </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('payment_date', $row['payment_date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="เวลาโอน" class=" control-label col-md-4 text-left"> เวลาโอน </label>
										<div class="col-md-6">
										  <input  type='text' name='payment_at' id='payment_at' value='{{ $row['payment_at'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Pro" class=" control-label col-md-4 text-left"> Pro </label>
										<div class="col-md-6">
										  <input  type='text' name='pro' id='pro' value='{{ $row['pro'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Pro Done" class=" control-label col-md-4 text-left"> Pro Done </label>
										<div class="col-md-6">
										  <input  type='text' name='pro_done' id='pro_done' value='{{ $row['pro_done'] }}'
						     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Remark" class=" control-label col-md-4 text-left"> Remark </label>
										<div class="col-md-6">
										  <textarea name='remark' rows='5' id='remark' class='form-control form-control-sm '
				           >{{ $row['remark'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Save At" class=" control-label col-md-4 text-left"> Save At </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('save_at', $row['save_at'],array('class'=>'form-control form-control-sm datetime')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>
				
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}
									  <div class="form-group row  " >
										<label for="Tel 1 Search" class=" control-label col-md-4 text-left"> Tel 1 Search </label>
										<div class="col-md-6">
										  <textarea name='tel_1_search' rows='5' id='tel_1_search' class='form-control form-control-sm '
				           >{{ $row['tel_1_search'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('deleted_at', $row['deleted_at']) !!}
									  <div class="form-group row  " >
										<label for="Tel 2 Search" class=" control-label col-md-4 text-left"> Tel 2 Search </label>
										<div class="col-md-6">
										  <textarea name='tel_2_search' rows='5' id='tel_2_search' class='form-control form-control-sm '
				           >{{ $row['tel_2_search'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
									  <div class="form-group row  " >
										<label for="Line Id" class=" control-label col-md-4 text-left"> Line Id </label>
										<div class="col-md-6">
										  <textarea name='line_id' rows='5' id='line_id' class='form-control form-control-sm '
				           >{{ $row['line_id'] }}</textarea>
										 </div>
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#new_status").jCombo("{!! url('member/comboselect?filter=status:name:name') !!}",
		{  selected_value : '{{ $row["new_status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
