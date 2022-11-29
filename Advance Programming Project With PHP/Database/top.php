<html>
<head>
<link rel="stylesheet"href="css/bootstrap.min.css">
<link rel="stylesheet"href="css/bootstrap-theme.min.css">
<link rel="stylesheet"href="css/style.css">
<link rel="stylesheet" type="text/css" href="cal/calendar-blue2.css"> 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript"src="cal/calendar.js"></script>
<script type="text/javascript"src="cal/calendar-en.js"></script>
<script type="text/javascript"src="cal/calendar-setup.js"></script>
<script src="js/bootstrap-theme.min.js"></script>
<script src=""></script>
<script src="js/jquery.js"></script>
</head>
<body>
<section class="container">
	<section id="banner"class="row"></section>
	<section id="menu"class="row">
		<nav class="navbar navbar-default navbar-inverse navbar" role="navigation">
            <section class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </section>
            <section class="c ollapse navbar-collapse" id="collapse">
            	<ul class="nav navbar-nav" id="nav-top">
                	<li><a href="home.php">Home</a></li>
                	<li class="dropdown"><a href="#" data-toggle="dropdown">Employee<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="employee_add.php">Register New</a></li>
							<li><a href="contract_add.php">New Contract</a></li>
                            <li><a href="employee_list.php">Employee List</a></li>
                            <li><a href="employee_attendance.php">Attendance</a></li>
                            <li><a href="employee_overtime.php">Overtime</a></li>
                        </ul>                    
                    </li>
					
					<li class="dropdown"><a href="#" data-toggle="dropdown">Customer<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="customer_add.php">Register New</a></li>
							<li><a href="customer_info.php">Customer Information</a></li>
                            <li><a href="employee_list.php">Customer Invoice</a></li>
                            <li><a href="customer_list.php">Customer List</a></li>
                            <li><a href="customer_balance.php">Customer Balance</a></li>
                        </ul>                    
                    </li>
					
					<li class="dropdown"><a href="#" data-toggle="dropdown">Finance<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="employee_add.php">Salary Payment</a></li>
							<li><a href="employee_attendance.php">New Income</a></li>
							<li><a href="employee_attendance.php">Income Report</a></li>
                            <li><a href="employee_list.php">Add New Expense</a></li>
                            <li><a href="employee_attendance.php">Expense Report</a></li>
                        </ul>                    
                    </li>
					<li class="dropdown"><a href="#" data-toggle="dropdown">Settings<span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="employee_add.php">Province Management</a></li>
							<li><a href="employee_attendance.php">Bank Management</a></li>
							<li><a href="employee_attendance.php">Account Management</a></li>
                            <li><a href="employee_list.php">Change Password</a></li>
                        </ul>                    
                    </li>
                    <li><a href="logout.php">Logout</a></li>  
                </ul>
			</span>
            </section>  
        </nav>
	</section>
	<section id="body"class="row">
		<section id="nav-bar"class="col-lg-3 col-md-3 col-ms-4 col-xs-12">
		</section>
		
		<section  id="content"class="col-lg-9 col-md-9 col-ms-8 col-xs-12">

