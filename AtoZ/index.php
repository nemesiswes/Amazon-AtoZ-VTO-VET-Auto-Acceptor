<?php

$file_path = getcwd()."\atoz.txt";

if(isset($_GET['username']) && isset($_GET['password']))
{
    $username = htmlspecialchars($_GET["username"]);
    $password = htmlspecialchars($_GET["password"]);

    //MUST CHANGE USERNAME AND PASSWORD
    if($username == "ENTER USERNAME" && $password == "ENTER PASSWORD")
    {
        if(isset($_GET['is_on']))
        {        
            $is_on = htmlspecialchars($_GET["is_on"]);
            if($is_on == "true")
            {
                echo "Creating AtoZ File";
                //create file or overwrite if it exists
                file_put_contents($file_path, "true");
            }
            else
            {
                echo "Deleting AtoZ File";
                //delete file if it exists
                if(file_exists($file_path))
                {
                    unlink($file_path);
                }
            }
        }
        else
        {
            //Check if file exists
            $file_exists = file_exists($file_path);
            
            if($file_exists)
            {
                echo "true";
            }
            else
            {
                echo "false";
            }
        }
    }
    else
    {
        echo 'Running!';
    }
}
else
{
    echo 'Running!';
}


?>
