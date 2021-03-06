<div>


    <input wire:model="search" type="text" class="form-control" placeholder="Search users...">

    <table wire:loading.remove class="table mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>

        @if(count($users)<1)
        <tr>
            <td colspan="3" style="text-align: center;"><strong>No User Found</strong></td>
          </tr>
        @endif

        @php
        $i=1;
        @endphp
        @foreach($users as $user)
          <tr>
          <th scope="row">{{$i}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          </tr>
          @php
          $i++;
          @endphp
        @endforeach

        </tbody>
      </table>



      <div wire:loading>
        <div class="d-flex justify-content-center mt-5">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
    </div>
</div>
