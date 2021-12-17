<div class="container">
  <h1>Dropdown Menu</h1>

  <form >
    {{-- <div>
      <label>Deparment</label>
      <select wire:model="Deparment">
        <option value="">Select Deparment</option>
        @foreach ($departments as  $department)
          <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
      </select>
    </div> --}}
    {{-- @if (!is_null($teachers))
    <div>
      <label>Teacher</label>
      <select>
        <option>Select Teacher</option>
        @foreach ($teachers as  $tech)
          <option value="{{ $tech->id }}">{{ $tech->name }}</option>
        @endforeach
      </select>
    </div>
  @endif --}}


  <div>
    <label>Teacher</label>
    <select wire:model="Deparment">
      <option value="">Select Teacher</option>
      @foreach ($teacher->departments as  $tc)
        <option value="{{ $tc->id }}">{{ $tc->name }}</option>
      @endforeach
    </select>
  </div>
  </form>

</div>
