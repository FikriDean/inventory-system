<div>
				<h1>Change Email</h1>
				<div class="input-group mb-3">
								<span class="input-group-text" id="basic-addon1">@</span>
								<input type="text" class="form-control" placeholder="email" wire:model='email' wire:keydown.enter="changeEmail">
				</div>

				{{ $email }}

				<div wire:loading wire:target="changeEmail">
								<div class="spinner-border" role="status">
												<span class="visually-hidden">Loading...</span>
								</div>
				</div>

				@if (session()->has('emailUpdated'))
								<div class="alert alert-success">
												{{ session('emailUpdated') }}
								</div>
				@endif
</div>
