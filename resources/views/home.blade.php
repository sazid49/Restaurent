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
                  All Data
                </div>
                <div class="col-md-6">
                  <a href="{{'add'}}" class="btn btn-primary">Add</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table">
                   <thead>
                     <tr>
                       <td>Id</td>
                       <td>Name</td>
                       <td>Email</td>
                       <td>Action</td>
                     </tr>
                   </thead>
                   <tbody>
                  @foreach ($students as  $student)
                    <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->email }}</td>
                      <td>
                        <a href="edit/{{ $student->id }}" >Edit</a> | <a href="delete/{{ $student->id }}">Delete</a>
                       </td>
                    </tr>
                  @endforeach
                   </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
