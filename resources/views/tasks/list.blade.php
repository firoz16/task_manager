
 
      @if(isset($tasks) && count($tasks) >  0)
      @foreach($tasks as $task)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{@$task->title}}</td>
        <td>{{@$task->status == 1 ? 'Done': ''}}</td>
        <td>
            @if($task->status == 0)
            <a href="javascript:void()" onclick="updateTask({{$task->id}})" data-mdb-tooltip-init title="Done"><i
                class="fas fa-square-check fa-lg text-success me-3"></i></a>
                @endif
            <a href="javascript:void()" onclick="deleteTask({{$task->id}})" data-mdb-tooltip-init title="Remove"><i
                class="fas fa-xmark fa-lg text-danger"></i></a>
        </td>
      </tr>
      
      @endforeach
      @else
      <tr>
      <td colspan="3" > No records Found</td>
      </tr>
      @endif
   