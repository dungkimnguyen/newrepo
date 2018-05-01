              <table class="table table-bordered">
            <thead>
              <th>Employee ID</th>
              <th>email</th>
              <th>name</th>
            </thead>
            <tbody>
              @if($employees)
                @foreach($employees as $key => $employee)
                  <tr>
                    <td>{{ $employee->id }} <a href="/employee/edit/{{$employee->id}}">Edit</a> </td>
                    <td>{{ $employee->email }}</td><td>{{ $employee->user->firstName }} , {{ $employee->user->lastName }}</td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="4">There is no data.</td>
                </tr>
              @endif
            </tbody>
          </table>