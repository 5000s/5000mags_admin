<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('New Status', (isset($fields['new_status']['language'])? $fields['new_status']['language'] : array())) }}</td>
						<td>{{ $row->new_status}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Member Number', (isset($fields['member_number']['language'])? $fields['member_number']['language'] : array())) }}</td>
						<td>{{ $row->member_number}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Member Type', (isset($fields['member_type']['language'])? $fields['member_type']['language'] : array())) }}</td>
						<td>{{ $row->member_type}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pre Name', (isset($fields['pre_name']['language'])? $fields['pre_name']['language'] : array())) }}</td>
						<td>{{ $row->pre_name}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('First Last Name', (isset($fields['first_last_name']['language'])? $fields['first_last_name']['language'] : array())) }}</td>
						<td>{{ $row->first_last_name}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel 1', (isset($fields['tel_1']['language'])? $fields['tel_1']['language'] : array())) }}</td>
						<td>{{ $row->tel_1}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel 2', (isset($fields['tel_2']['language'])? $fields['tel_2']['language'] : array())) }}</td>
						<td>{{ $row->tel_2}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Address', (isset($fields['address']['language'])? $fields['address']['language'] : array())) }}</td>
						<td>{{ $row->address}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Subdistrict', (isset($fields['subdistrict']['language'])? $fields['subdistrict']['language'] : array())) }}</td>
						<td>{{ $row->subdistrict}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('District', (isset($fields['district']['language'])? $fields['district']['language'] : array())) }}</td>
						<td>{{ $row->district}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Province', (isset($fields['province']['language'])? $fields['province']['language'] : array())) }}</td>
						<td>{{ $row->province}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Postal', (isset($fields['postal']['language'])? $fields['postal']['language'] : array())) }}</td>
						<td>{{ $row->postal}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Zone', (isset($fields['zone']['language'])? $fields['zone']['language'] : array())) }}</td>
						<td>{{ $row->zone}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Magazine Type', (isset($fields['magazine_type']['language'])? $fields['magazine_type']['language'] : array())) }}</td>
						<td>{{ $row->magazine_type}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Amount Of Book', (isset($fields['amount_of_book']['language'])? $fields['amount_of_book']['language'] : array())) }}</td>
						<td>{{ $row->amount_of_book}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Facebook', (isset($fields['facebook']['language'])? $fields['facebook']['language'] : array())) }}</td>
						<td>{{ $row->facebook}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Delivery Method', (isset($fields['delivery_method']['language'])? $fields['delivery_method']['language'] : array())) }}</td>
						<td>{{ $row->delivery_method}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Register Method', (isset($fields['register_method']['language'])? $fields['register_method']['language'] : array())) }}</td>
						<td>{{ $row->register_method}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Start Date', (isset($fields['start_date']['language'])? $fields['start_date']['language'] : array())) }}</td>
						<td>{{ $row->start_date}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('End Date', (isset($fields['end_date']['language'])? $fields['end_date']['language'] : array())) }}</td>
						<td>{{ $row->end_date}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('First Book Number', (isset($fields['first_book_number']['language'])? $fields['first_book_number']['language'] : array())) }}</td>
						<td>{{ $row->first_book_number}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Book Number', (isset($fields['last_book_number']['language'])? $fields['last_book_number']['language'] : array())) }}</td>
						<td>{{ $row->last_book_number}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ref Payment', (isset($fields['ref_payment']['language'])? $fields['ref_payment']['language'] : array())) }}</td>
						<td>{{ $row->ref_payment}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Amount Payment', (isset($fields['amount_payment']['language'])? $fields['amount_payment']['language'] : array())) }}</td>
						<td>{{ $row->amount_payment}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Datetime Payment', (isset($fields['datetime_payment']['language'])? $fields['datetime_payment']['language'] : array())) }}</td>
						<td>{{ $row->datetime_payment}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Note', (isset($fields['note']['language'])? $fields['note']['language'] : array())) }}</td>
						<td>{{ $row->note}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Payment Date', (isset($fields['payment_date']['language'])? $fields['payment_date']['language'] : array())) }}</td>
						<td>{{ $row->payment_date}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pro', (isset($fields['pro']['language'])? $fields['pro']['language'] : array())) }}</td>
						<td>{{ $row->pro}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Payment At', (isset($fields['payment_at']['language'])? $fields['payment_at']['language'] : array())) }}</td>
						<td>{{ $row->payment_at}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pro Done', (isset($fields['pro_done']['language'])? $fields['pro_done']['language'] : array())) }}</td>
						<td>{{ $row->pro_done}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Remark', (isset($fields['remark']['language'])? $fields['remark']['language'] : array())) }}</td>
						<td>{{ $row->remark}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Save At', (isset($fields['save_at']['language'])? $fields['save_at']['language'] : array())) }}</td>
						<td>{{ $row->save_at}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel 1 Search', (isset($fields['tel_1_search']['language'])? $fields['tel_1_search']['language'] : array())) }}</td>
						<td>{{ $row->tel_1_search}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Deleted At', (isset($fields['deleted_at']['language'])? $fields['deleted_at']['language'] : array())) }}</td>
						<td>{{ $row->deleted_at}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel 2 Search', (isset($fields['tel_2_search']['language'])? $fields['tel_2_search']['language'] : array())) }}</td>
						<td>{{ $row->tel_2_search}} </td>

					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Line Id', (isset($fields['line_id']['language'])? $fields['line_id']['language'] : array())) }}</td>
						<td>{{ $row->line_id}} </td>

					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	