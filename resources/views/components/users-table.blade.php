@props(['users'])
<div>
 <h1>Users table</h1>
 <table class="table m-2">
     <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Age</th>
         <th>Job</th>
     </tr>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user['id'] }}</td>
             <td>{{ $user['name'] }}</td>
             <td>{{ $user['age'] }}</td>
             <td>{{ $user['job'] }}</td>
         </tr>
     @endforeach
 </table>
</div>