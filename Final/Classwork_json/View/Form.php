
    <?php
    include "../Controller/FormValidation.php";
    echo "<h1> PHP Form Validation Example</h1>";
    
    ?>


<!DOCTYPE html>
<html>
    <head>
        <title> Form </title>
        <script>
            function collect_data()
            {
                let name = document.getElementById("name").value.trim();
                let email = document.getElementById("email").value.trim();
                let gender = document.querySelector('input[name="gender"]:checked');
                let valid = true;
                let message="";
                if(name.length <5)
                {
                    message+="Name Should be 5 Character\n";
                    valid = false;
                }
                if(email == "")
                {
                    message+="Email must be filled\n";
                    valid = false;
                }
                if(gender == null)
                {
                    message+="Gender required\n";
                    valid = false;
                }
                if(!valid)
                {
                    alert(message);
                }
                return valid;

            }
        </script>
    </head>
    <body>

    
       <form method="post" action="" onsubmit="return collect_data()"> 
        <table>


             <tr>
                <td colspan="2">
                 <h5 style="color: red; display: inline;">* required field</h5>
                </td>
                
            </tr>
            
               
            <tr>
                <td colspan="2"> <label for="name"> Name: </label>
                <input type="text" id="name" name="name"> <h2 style="color: red; display: inline;">*</h2>
                <?php echo $name ?>
            </td>
            </tr>

            <tr>
                <td colspan="2"> <label for="email"> E-mail: </label>
                 <input type="text" id="email" name="email"> <h3 style="color: red; display: inline;">*</h3>
                <?php echo $email ?>
            </td>
            </tr>


            <tr>
                <td colspan="2"> <label for="website"> Website: </label>
                 <input type="text" id="website" name="website">
            </td>
            </tr>



            <tr>
            <td colspan="2"><label for="comment">Comment:</label>           
                <textarea id="comment" name="comment" rows="5" cols="40" Style= "resize:none"></textarea>
                
            </td>
            </tr>


            <tr>

                <td colspan="2"><label for="gender"> Gender: </label>
            
                    <input type="radio" id="Female" name="gender" value="Female">
                    <label for="Female">Female</label>
                    <input type="radio" id="Male" name="gender" value="Male">
                    <label for="Male">Male</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label> <h4 style="color: red; display: inline;">*</h4>
                </td>
            </tr>


            <tr>
               
            <td colspan="2"> 
                <input type="checkbox" id="remember" name="remember" value="1" <?php echo $remember ? 'checked' : '' ; ?>>
                <label for="remember"> Remember Me </label>

            </td>
            </tr>


            <tr>
                <td colspan="2">
                    <input type="submit" id="submit" value="Submit">
                </td>
            </tr>
        </table>
       </form>
    </body>
</html>