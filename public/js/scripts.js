$('.taskForm').submit(function(event){
    event.preventDefault();
    
    var title = $('#title').val();
        if(!title){
            alert('please add task');
            return;
        }
        $.ajax({
            url :"/tasks",
            method : 'POST',
            data : {
                title : title,
                _token : $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                $('.error-task').text('');
                $('#task_success_message').text(response.message);
                //  $("#task_success_message").delay(5000).slideUp(300);
                $('#title').val('');
                getTaskDetail('create');
            },
            error : function(response){
                console.log(response);
                $('#task_success_message').text('');
                $('.error-task').text(response.responseJSON.message);
            //    $('.error-task').delay(100).slideUp(300);;
                
            }
        });
});

function getTaskDetail(type){
    $.ajax({
        type: 'GET',
        url: '/fetch-task-list',
        dataType: 'json',
        data:{
            type : type
        },
        success: function(response) {
            $('#task-list').html(response.html);
            
        }

    })
}

function updateTask(task_id){

    $.ajax({
        type: 'PUT',
        url: '/tasks/'+task_id,
        data : {
            _token : $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            getTaskDetail('update');
        }

    })
}

function deleteTask(task_id){
    if (confirm('Are you sure to delete this task?')) {
       
    
        $.ajax({
            type: 'DELETE',
            url: '/tasks/'+task_id,
            data : {
                _token : $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                getTaskDetail('delete');
            }
    
        });
    }
    }

    $('.allTask').on('click',function(){
        $.ajax({
            type: 'GET',
            url: '/all-tasks/',
            data : {
                _token : $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                getTaskDetail('all');
            }
    
        });
    })
