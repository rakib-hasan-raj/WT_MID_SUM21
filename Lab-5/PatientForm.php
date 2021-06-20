<?php

        $date="";
        $err_date="";

        $month="";
        $err_month="";

        $year="";
        $err_year="";
		
?>



<html>
	<head></head>
	<body>
		<form>
		<fieldset>
			<table>			
				<p><b> Patient Form </b> </p>
				<tr>
					<tr>
					<td> ID</td>
					<td>: <input type="text"> </td>
				</tr>
							
				<tr>
					<td>Name</td>
					<td>: <input type="text"> </td>
				</tr>
				
			
				<tr>
					<td>Password</td>
					<td>: <input type="password" >  </td>
				</tr>				
				
				<tr>
					<td>FatherName</td>
					<td>: <input type="text"> </td>
				</tr>
				
				<tr>
				<td>E-mail</td>
					<td>: <input type="text"> </td>
				</tr>
				
				<tr>
				<td>Phone</td>
					<td>: <input type="text"> </td>
				</tr>
				<tr>
					<td>Address</td>
					<td>: <textarea></textarea>
					</td>
				</tr>
				
				<tr>
				<td>Age</td>
					<td>: <input type="text"> </td>
			
				</tr>
				<td><span><b>Birth Date</b></span></td>
                        <td>:<select name ="date">
                        <option disabled selected>Date</option>
                        <?php         for($date = 1; $date <= 31; $date++) echo"<option value = '".$date."'>".$date."</option>";     ?>
                        </select>

                        <select name ="month">
                        <option disabled selected>Month</option>
						<option>Jan</option>
							<option>Feb</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Nov</option>
							<option>Dec</option>
						</select>
                 
                        <select name ="year">
                        <option disabled selected>Year</option>
                        <?php         for($year = 1960; $year <= 2021; $year++)echo"<option value = '".$year."'>".$year."</option>";     ?>
                        </select>

                        <span><?php echo $err_date;?></span>
                        <span><?php echo $err_month;?></span>
                        <span><?php echo $err_year;?></span></td>
                    </tr>
						</select>
					</td>
				
                <td>Blood group</td>
                <td>: <select>
                <option>A+</option>
                <option>B+</option>
                <option>O+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                <option>O-</option>
                <option>AB-</option>
                </select>
                </td>
                </tr>
				
				<tr>
					<td rowspan="2" align ="center"> 
					 <input type="button" value = "SUBMIT" >
					 </td>
				</tr>
				
				</tr>
				</table>
		</fieldset>
		</form>
	</body>
</html>
