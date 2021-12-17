


  <div class="container">
    <div class="row" style="padding:30px 0;">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
          <div class="row">
            <div class="col-md-6">
              Add New
            </div>

            <div class="col-md-6">
             <a href="" class="btn btn-success pull-right">All</a>
            </div>
          </div>
         </div>
         <div class="panel-body">
             <form class="horizontal" wire:submit.prevent="save"  method="post" enctype="multipart/form-data">
                @if (Session::has('success'))
                  <span style="color:green">{{ session::get('success') }}</span>
                @endif
                <div class="form-group">
                  <label class="col-md-4 control-label">Name</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" placeholder="input your name" wire:model="name">
                    @error('name') <span class="error" style="color:red">{{ $message }}</span> @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Email</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" placeholder="input your email" wire:model="email">
                    @error('email') <span class="error" style="color:red">{{ $message }}</span> @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Photo</label>
                  <div class="col-md-4">
                    @if ($image)
                         Photo Preview:
                         @foreach ($image as  $images)
                         <img src="{{ $images->temporaryUrl() }}" width="200">
                         @endforeach
                     @endif
                    <input class="form-control" type="file"  wire:model="image" multiple>
                    @error('image') <span class="error" style="color:red">{{ $message }}</span> @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4">
                    <input type="submit" value="Add" class="btn btn-primary">
                  </div>
                </div>
             </form>
         </div>
        </div>
      </div>
    </div>
  </div>
