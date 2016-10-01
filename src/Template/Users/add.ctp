<?= $this->Form->create($user, array('id' => 'animdiv','class' => 'form-inline signin')) ?>
<fieldset>
		<div id="contents1">	
			  <div class="form-group">
				<h2>Sign up</h2>
				
				 <?= $this->Form->input('fullname', array('id' => 'fullname', 'class' => 'form-control','label' => false,'placeholder' => 'fullname')) ?>
			  </div><br>	
			  <div class="form-group">
				
				
				 <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control','label' => false,'placeholder' => 'email')) ?>
			  </div><br>
			  <div class="form-group">
			    
				<?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control','label' => false,'placeholder' => 'password')) ?>
				 <?= $this->Form->hidden('group_id', ['options' => $groups], ['default' => '1']); ?>
			  </div><br>
			  <br>
			  <?= $this->Form->button(__('Submit'), array('id' => 'Login', 'class' => 'btn btn-primary')) ?>
			  <p class="tag">
			  <?= $this->Html->link(__('Sign In'), ['controller' => 'Users', 'action' => 'login'], array('class' => 'uplink')) ?> it's easy</p>
			 </div>
			<!-- 
			<div id="contents2">
				<div class="form-group">
					<h2>Sign Up</h2>
					<label class="sr-only" for="exampleInputEmail3">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
				</div>
			  <br>
			  <p class="tag1" ><a class="uplink1" onclick="magic1()">Sign In</a> </p>
			</div>
			-->
		    
    
</fieldset>
<?= $this->Form->end() ?>
