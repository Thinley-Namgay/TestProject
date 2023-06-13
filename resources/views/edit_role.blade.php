<!DOCTYPE html>
<html>
<head>
  <title>Edit Role</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      padding: 40px;
      width: 400px;
      max-width: 100%;
      text-align: center;
    }

    .container h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    .container button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    .container button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Edit role</h1>
    <form action="/update_role" method="post">
      @csrf
      <label for="">Role Name</label>
      <input type="text" placeholder="Role Name" id="role_name" name="role_name" value="{{$data->name}}">
      <input type="hidden" id="record_id" name="record_id" value="{{$data->id}}">
      <input type="hidden" id="status_id" name="status_id" value="{{$data->status}}">

      <label for="">Status</label>
      <input type="radio" placeholder="Status" id="status1" name="status" value="Active">
      <label for="">Active</label>
      <input type="radio" placeholder="Status" id="status2" name="status" value="Inactive">
      <label for="">Inactive</label>

      <script>
        let status_value=document.getElementById('status_id').value;
        //alert(status_value);

        if(status_value=='Active'){
          document.getElementById('status1').checked = true;
        }
        else{
          document.getElementById('status2').checked = true;
        }
      </script>

      <br><br>
      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
