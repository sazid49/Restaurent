<div class="container">
  <h1>Search</h1>
  <form >
      <input type="text" name="search" wire:model="search_Data">
      <button type="submit" class="btn btn-outline-primary btn-sm" >Search</button>
  </form>

  {{ $name }}
  {{ $data }}
  <input type="text" name="" value="" wire:model.lazy="data">
  <table class="table table-bordered  pt-5 table-hover" >
     <thead>
       <tr>
         <th>#</th>
         <th>Name</th>
         <th>Email</th>
         <th>Action</th>
       </tr>
       @foreach ($students as  $key=>$std)
         <tr>
           <td>{{ $key+1 }}</td>
           <td>{{ $std->name }}</td>
           <td>{{ $std->email }}</td>
           <td>
             <a class="m-2" href="" style="text-decoration:none" >Edit</a>|<a class="m-2" style="text-decoration:none" href="#">delete</a>
           </td>
         </tr>
       @endforeach
     </thead>
  </table>
</div>
