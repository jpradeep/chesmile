<?= $this->Form->create('', array('id' => 'animdiv','class' => 'form-inline signin')) ?>
<fieldset>
		<div id="contents1">	
			  <div class="form-group">
				<h2>Sign in</h2>
				
				 <?= $this->Form->input('email', array('id' => 'email', 'class' => 'form-control','label' => false,'placeholder' => 'email')) ?>
			  </div><br>
			  <div class="form-group">
			    
				<?= $this->Form->input('password',array('id' => 'password', 'class' => 'form-control','label' => false,'placeholder' => 'password')) ?>
			  </div><br>
			  <br>
			  <?= $this->Form->submit(__('Login'), array('id' => 'Login', 'class' => 'btn btn-primary')) ?>
			  <p class="tag" >not yet a user ? 
			  <?= $this->Html->link(__('Sign Up'), ['controller' => 'Users', 'action' => 'add'], array('class' => 'uplink')) ?> it's easy</p>
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




 
		