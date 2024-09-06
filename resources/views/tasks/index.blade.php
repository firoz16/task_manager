<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
        <section class="vh-100" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                  <div class="card rounded-3">
                    <div class="card-body p-4">
          
                      <h4 class="text-center my-3 pb-3">To Do App</h4>
          
                      <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2 taskForm">
                        <div class="col-12">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Enter Task" required />
                            <label class="form-label error-task text-danger" for="form1"></label>
                          </div>
                        </div>
          
                        <div class="col-12">
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary mb-4">Save</button>
                        </div>
          
                        
                      </form>
                      <div class="">
                          <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-info mb-3" onclick="getTaskDetail('all')">Show All tasks</button>
                        </div>
                      <div id="task_success_message text-success"> </div>
                      <table class="table mb-4">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody id="task-list">
                    @include('tasks.list')
                </tbody>
            </table>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
