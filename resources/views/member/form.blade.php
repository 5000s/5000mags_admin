@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'member?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">

			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm   "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm "  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button>
				</div>
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn   btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
		</div>
	</div>


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Member</legend>
				{!! Form::hidden('id', $row['id']) !!}
									  <div class="form-group row  " >
										<label for="สถานะสมาชิก" class=" control-label col-md-4 text-left"> สถานะสมาชิก </label>
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
										<label for="ฉบับแรก" class=" control-label col-md-4 text-left"> ฉบับแรก </label>
										<div class="col-md-6">
										  <select name='first_book_number' rows='5' id='first_book_number' class='select2 '   ></select>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="ฉบับสุดท้าย" class=" control-label col-md-4 text-left"> ฉบับสุดท้าย </label>
										<div class="col-md-6">
										  <select name='last_book_number' rows='5' id='last_book_number' class='select2 '   ></select>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="วันที่รับฉบับแรก" class=" control-label col-md-4 text-left"> วันที่รับฉบับแรก </label>
										<div class="col-md-6">

				<div class="input-group input-group-sm m-b" style="width:250px !important;">
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
										<label for="วันที่รับฉบับสุดท้าย" class=" control-label col-md-4 text-left"> วันที่รับฉบับสุดท้าย </label>
										<div class="col-md-6">

				<div class="input-group input-group-sm m-b" style="width:250px !important;">
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
									  </div>
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

				<div class="input-group input-group-sm m-b" style="width:250px !important;">
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
										<label for="Pro" class=" control-label col-md-4 text-left"> Pro </label>
										<div class="col-md-6">
										  <input  type='text' name='pro' id='pro' value='{{ $row['pro'] }}'
						     class='form-control form-control-sm ' />
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

				<div class="input-group input-group-sm m-b" style="width:250px !important;">
					{!! Form::text('save_at', $row['save_at'],array('class'=>'form-control form-control-sm datetime')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div>

										 </div>
										 <div class="col-md-2">

										 </div>
									  </div> </fieldset></div>

		</div>

		<input type="hidden" name="action_task" value="save" />

		</div>
	</div>
	{!! Form::close() !!}

   <script type="text/javascript">
	$(document).ready(function() {



		$("#new_status").jCombo("{!! url('member/comboselect?filter=status:name:name') !!}",
		{  selected_value : '{{ $row["new_status"] }}' });

		$("#first_book_number").jCombo("{!! url('member/comboselect?filter=issue:number:number') !!}",
		{  selected_value : '{{ $row["first_book_number"] }}' });

		$("#last_book_number").jCombo("{!! url('member/comboselect?filter=issue:number:number') !!}",
		{  selected_value : '{{ $row["last_book_number"] }}' });



		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("member/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();
			return false;
		});

	});
	</script>
@stop
