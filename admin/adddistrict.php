<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Panel</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>


	<header>
		<h1>Admin Panel</h1>
       
    </header>

    <ul>
     <li align="left"><a href="index.html">Back</a></li>
        <!--<li>Enter new category: <input type="text" name=cat value="e.g." ></li>
        <li><input type="submit" value="Add"></li>
        <li>li>
        <li><a href="index.php">Log Out</a></li>
       !-->
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="adddisdemo.php">

            <div class="form-title-row">
                <h1>Enter new district</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>e.g. kottayam </span>
					<input type="text" name="dis">
                </label>
            </div>

            <!--<div class="form-row">
                <label>
                    <span>Password</span>
                    `<input type="text" name="name">                
                </label>
            </div>!-->

          

           
                  <div class="form-row">
                        <button type="submit">Add</button>
             </div>

        </form>
			  
         
			
    </div>


</body>

</html>

