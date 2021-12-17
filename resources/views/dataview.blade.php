
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="padding:30px 0;">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-6">
                Single Vide
                </div>
                <div class="col-md-6">
                  <a href="{{'eshad'}}" class="btn btn-primary">All Data</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" action="/update/{{$students->id}}" method="post" enctype="multipart/form-data">
                 @csrf
                   @if (Session::has('success'))
                     <span style="color:green">{{ session::get('success') }}</span>
                   @endif
                   <div class="form-group">
                     <label class="col-md-4 control-label">Name</label>
                     <div class="col-md-4">
                       <input class="form-control" type="text" placeholder="input your name" name="name" value="{{ $students->name }}">
                       @error('name') <span class="error" style="color:red">{{ $message }}</span> @enderror
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-md-4 control-label">Email</label>
                     <div class="col-md-4">
                       <input class="form-control" type="text" placeholder="input your email" name="email" value="{{ $students->email }}">
                       @error('email') <span class="error" style="color:red">{{ $message }}</span> @enderror
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-md-4 control-label">Photo</label>
                     <div class="col-md-4">
                       <input class="form-control" type="file"  name="image" value="{{ $students->image }}">
                       @error('image') <span class="error" style="color:red">{{ $message }}</span> @enderror
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="col-md-4 control-label"></label>
                     <div class="col-md-4">
                       <input type="submit" value="Update" class="btn btn-primary">
                     </div>
                   </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
