

<?php

$students =[
   0=> [
  'name' => 'Purnima Adhikari',
  'department' => 'Computer',
  'address' => 'shantinagar',
  'email' => 'nima@gmail.com',
  'contact' => 9860563921,
  ],
  1 => [
  'name' => 'Nirja Bahety',
  'department' => 'IT',
  'address' => 'anamnagar',
  'email' => 'nirju@gmail.com',
  'contact' => 9850543921,
  ],
  2 => [
  'name' => 'Kamana Sharma',
  'department' => 'Computer',
  'address' => 'kalanki',
  'email' => 'kamana01@gmail.com',

  'contact' => 9810568901,
  ],
  3 => [
  'name' => 'Bandana shrestha',
  'department' => 'BCA',
  'address' => 'balkumari',
  'email' => 'bandu@gmail.com',

  'contact' => 9760963921,
  ],
];
    if(isset($_GET['student_id'])){
        $student_id = $_GET['student_id'];
        if(isset($students[$student_id])){
            $student = $students[$student_id];
        ?>
        <ul>
            <li>Name: <?php echo $student['name'];?> </li>
            <li>Department: <?php echo $student['department'];?> </li>
            <li>Address: <?php echo $student['address'];?> </li>
            <li>Email: <?php echo $student['email'];?> </li>
            <li>Contact: <?php echo $student['contact'];?> </li>
        </ul>



        <form action="student_table.php" mrthod='POST'>
            <label>
                User Name: <input type="text" name="user_name" value="<?php echo $student['name'];?>">
            </label>
            <label>
                Department: <input type="text" name="department" value="<?php echo $student['department'];?>">
            </label>
            <label>
                Address: <input type="text" name="address" value="<?php echo $student['address'];?>">
            </label>
            <label>
                Email: <input type="email" name="email" value="<?php echo $student['email'];?>">
            </label>
            <label>
                Contact: <input type="text" name="contact" value="<?php echo $student['contact'];?>">
            </label>

            <input type="submit" value="submit">
            </form>
            <?php
        }
        else{
            echo 'undefined student record';exit;
        }
    }
    else{


          ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>STUDENT NAME</th>
                        <th>STUDENT DEPARTMENT</th>
                        <th>STUDENT ADDRESS</th>
                        <th>STUDENT EMAIL</th>
                        <th>STUDENT CONTACT</th>
                        <th>STUDENT UPDATE</th>
                    </tr>
                </thead>
                <tbody>
                    
                  <?php
                    foreach($students as $key => $student){
                    ?>
                        <tr>
                            <td> <?php echo $student['name']?></td>
                            <td> <?php echo $student['department']?></td>
                            <td> <?php echo $student['address']?></td>
                            <td> <?php echo $student['email']?></td>
                            <td> <?php echo $student['contact']?></td>
                            <td> <a href="student_table.php/?student_id=<?php echo $key; ?>">Edit</a> / <a href="">Delete</a></td>
                        </tr>
                      <?php
                    }
                    ?>
            
                </tbody>
            </table>
            <?php
    }
    ?>
            
                  
                
                  
                  
