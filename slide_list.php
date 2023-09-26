<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
       <!-- All header -->
       <div class="header">
       <span class="abbrlogo">QDB<p class="logoname">Quickal Database</p></span>
    </div>
    <div class="list">
       <span><a href="/Quickal/backend/Users/userlist.php" style="text-decoration:none"><H2>Users List</H2></a></span>

       <span><a href="/Quickal/backend/Users/locations.php" style="text-decoration:none"><H2>Available Countries</H2></a></span>

       <span><a href="/Quickal/backend/Brands/products_brand.php" style="text-decoration:none"><H2> Brand Products</H2></a></span>

       <span><a href="/Quickal/backend/topdeals/top_deals.php" style="text-decoration:none"><H2>Top Deals</H2></a></span>

       <span><a href="/Quickal/backend/flashsales/flashsales.php" style="text-decoration:none"><H2>Flash Sales</H2></a></span>

       <span><a href="/Quickal/backend/menu/menu_list.php" style="text-decoration:none"><H2>Menu List</H2></a></span>

       <span><a href="/Quickal/backend/slideshow/slide_list.php" style="text-decoration:none"><H2>Slideshow</H2></a></span>

       <span><a href="/Quickal/backend/advert/advert_table.php" style="text-decoration:none"><H2>advert beside slideshow</H2></a></span>
    </div>
    <a href="/Quickal/backend/slideshow/addsliderecord.php" class="add">ADD  RECORD</a>
    <?php 
   
    //connecting to mysql server
    $dbconnect = mysqli_connect("localhost","root","","quickal");
    //preparing sql query to retrieve data from database
    $sql = "SELECT * FROM slideshow";
    $recordset = mysqli_query($dbconnect,$sql);
    $numofrows = mysqli_num_rows($recordset);
    ?>
     <span class="numofrows"><?php echo $numofrows; ?></span> 
    
     <div class="tab">
    <table border="1">
        <thead>
        <tr>
                <th colspan="2">MENU</th>
                <th colspan="2">Actions</th>
            </tr>
            <tr>
                <td>SLIDE ID</td>
                <td>SLIDE IMAGES</td>
                <td>UPDATE IMAGES</td>
                <td>TIMER</td>
            </tr>
        </thead>
        <tbody>
            <?php 
             

            if($recordset){
                //fetching data from database and displaying the data in a table rows dynamically.
               while($rows = mysqli_fetch_assoc($recordset))
               {
                    echo '
                    <tr>
                        <td class="id1">'.$rows["slide_id"].'</td>
                        <td>'.$rows["slide_image"].'</td>
                        <td>
                          <form action="/Quickal/backend/slideshow/uploadslideimageimage.php" method="post" enctype="multipart/form-data">
                           <input type="hidden"  value="'.$rows["slide_id"].'" name="ido">
                           <input type="file" name="picture" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit">
                          </form>
                        </td>
                    </tr>';
               }
            }
            ?>
           
        </tbody>
    </table>
        </div>
         <div class="slide">
            <form action="" method="post">
                     <input type="number" name="ntime" placeholder="
                        <?php
                           $connection = mysqli_connect("localhost","root","","quickal");
                           $sql = "SELECT * FROM slideshow_timer";
                           $r = mysqli_query($connection,$sql);
                           while($rows = mysqli_fetch_assoc($r)){
                            echo $rows["time_in_sec"]."s";
                           }
                           ?>
                     " style="width: 70%;position:relative">
                     <input type="hidden"  value=" " name="idt">
                        <button>Enter</button>
            </form>
         </div>

</body>
</html>