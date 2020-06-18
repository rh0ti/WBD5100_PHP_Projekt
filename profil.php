<?php
session_start();
?>

<?php
$_SESSION['username'] = "Ad";
?>




<?php
                if(isset($_SESSION['username'])){

                
                 echo '<div class="gallery-upload">
                        <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data" style="width: 400px; border: solid 1px black; position: relative; right: -30%" class="p-3 m-3">
                            <div class="form-group">
                            <input type="text" class="form-control" name="filename" placeholder="File name...">
                            <input type="text" class="form-control" name="filetitle" placeholder="Your name...">
                            <textarea class="form-control" rows="3" name="filedesc" placeholder="Bio description.."></textarea>
                            <input type="file" name="file" class="form-control-file">
                            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                        </div>';
                    }
                        ?>