<?php 



    define('TITLE',"Dashboard - Eternity Service");
    include 'includes/header2.php';

    
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="projects.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
<title>Search</title>
</head>

<body>
	<!--top half fixed logo, name and search-->
		<div class="Topfix"> 
		<a href="Dash.php" alt="dash"><img src="../Images/logo ES.png" alt="logo"></a>
       
	</div>
	<!--bottom half -->
	<div class="bHalf">
		<!--top half fixed Naveigation-->
		<div class="lFix">
			
            <div class="llFix">
            <button id="profile" title="profile">
                <a href="profile.php" alt="profile">
                <img style="border-radius: 50%;"  src=<?php echo "./uploads/".$_SESSION['userImg']; ?> alt="profile img">
                </a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Profile</p></span>
            </button>
            </div>
                             
            
            
                        
			<button id="home" title="dashboard / home">
                <a href="Dash.php" alt="dash">
                <img src="../Images/home button.png" alt=" home img"><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Dash</p></span>
                </a>
            </button>
            
			<button id="upload" title="upload"><a href="projects.php"><img src="../Images/upload button.png" alt="upload img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Upload</p></span></button>
            
			<button id="help" title="help"><a href="help.php"><img src="../Images/help button.png" alt="help img"></a><span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Help</p></span></button>
            
              
            <button id="logout" title="logout">
                <a href="includes/logout.inc.php" class="button login"><img src="../Images/logOut.png" alt="logOut"></a>
            <span><p style="color: white; padding-bottom: 5px; margin-top: -5px; ">Logout</p></span>
            </button>
            
		</div>
		<!--Dashboard half and displayed content-->
		<div class="rhlaf" style="background-image: url('../Images/pans6.jpg');  background-size: 30%; background-repeat: no-repeat; background-position:90% 82%;">
			<div class="content">
                
				<table >
                    <tr>
                        <td><h1 id="title"
                                style="text-decoration: underline; margin-bottom: 20px;">Search For Documents</h1></td>
                    </tr>
                    

                    <tr>
                        <td><button id="Drawings" onClick="location.href ='search_drawing_documents.php'">Drawings</button></td>
                        <td><button id="Contracts" onClick="location.href ='search_contract_documents.php'">Contract docs</button></td>
                        <td><button id="Manuals" onClick="location.href ='search_project_manuals.php'">Project Manuals</button></td>
                    </tr>
                    <tr>
                        <td><button id="Construction" onClick="location.href ='search_construction_documents.php'">Construction docs</button></td>
                        <td><button id="Submittals" onClick="location.href ='search_submittal_documents.php'">Submittals</button></td>
                        <td></td>
                    </tr>
                    
                </table>
			</div>
		</div>
	</div>
</body>
</html>
