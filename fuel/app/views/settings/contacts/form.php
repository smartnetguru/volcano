<?php

Lang::load('countries', true);
$countries = __('countries');

$first_name = $last_name = $company_name = $address = $address2 = $city = $state = $zip = $email = $phone = $fax = null;
$country = 'US';

if (!empty($contact)) {
	$first_name   = $contact->first_name;
	$last_name    = $contact->last_name;
	$company_name = $contact->company_name;
	$address      = $contact->address;
	$address2     = $contact->address2;
	$city         = $contact->city;
	$state        = $contact->state;
	$zip          = $contact->zip;
	$country      = $contact->country;
	$email        = $contact->email;
	$phone        = $contact->phone;
	$fax          = $contact->fax;
}
?>

<?php echo Form::open(array('class' => 'form-horizontal form-validate')) ?>
	<div class="control-group<?php if (!empty($errors['company_name'])) echo ' error' ?>">
		<?php echo Form::label('Company Name', 'company_name', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('company_name', Input::post('company_name', $company_name), array('class' => 'required')) ?>
			<?php if (!empty($errors['company_name'])) echo $errors['company_name'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['address'])) echo ' error' ?>">
		<?php echo Form::label('Address', 'address', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('address', Input::post('address', $address)) ?>
			<?php if (!empty($errors['address'])) echo $errors['address'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['address2'])) echo ' error' ?>">
		<?php echo Form::label('Address 2', 'address2', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('address2', Input::post('address2', $address2)) ?>
			<?php if (!empty($errors['address2'])) echo $errors['address2'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['city'])) echo ' error' ?>">
		<?php echo Form::label('City', 'city', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('city', Input::post('city', $city)) ?>
			<?php if (!empty($errors['city'])) echo $errors['city'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['state'])) echo ' error' ?>">
		<?php echo Form::label('State', 'state', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('state', Input::post('state', $state)) ?>
			<?php if (!empty($errors['state'])) echo $errors['state'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['zip'])) echo ' error' ?>">
		<?php echo Form::label('Zip', 'zip', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('zip', Input::post('zip', $zip)) ?>
			<?php if (!empty($errors['zip'])) echo $errors['zip'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['country'])) echo ' error' ?>">
		<?php echo Form::label('Country', 'country', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::select('country', Input::post('country', $country), $countries) ?>
			<?php if (!empty($errors['country'])) echo $errors['country'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['email'])) echo ' error' ?>">
		<?php echo Form::label('Email', 'email', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('email', Input::post('email', $email), array('class' => 'required')) ?>
			<?php if (!empty($errors['email'])) echo $errors['email'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['phone'])) echo ' error' ?>">
		<?php echo Form::label('Phone', 'phone', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('phone', Input::post('phone', $phone)) ?>
			<?php if (!empty($errors['phone'])) echo $errors['phone'] ?>
		</div>
	</div>
	
	<div class="control-group<?php if (!empty($errors['fax'])) echo ' error' ?>">
		<?php echo Form::label('Fax', 'fax', array('class' => 'control-label')) ?>
		<div class="controls">
			<?php echo Form::input('fax', Input::post('fax', $fax)) ?>
			<?php if (!empty($errors['fax'])) echo $errors['fax'] ?>
		</div>
	</div>
	
	<div class="form-actions">
		<?php echo Html::anchor('settings/contacts', __('form.cancel.label'), array('class' => 'btn')) ?>
		<?php echo Form::button('submit', __('form.submit.label'), array('class' => 'btn btn-primary')) ?>
	</div>
<?php echo Form::close() ?>
