<?php include "includes/admin_header.php" ?>

    <div id="wrapper">
       

        <!-- Navigation -->
 
        <?php include "includes/admin_navigation.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">


            <h1 class="page-header">
                Welcome to admin
                <small>Author</small>
            </h1>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Post Author</th>
                        <th>Post Title</th>
                        <th>Post Category ID</th>
                        <th>Post Image</th>
                        <th>Post Status</th>
                        <th>Post Tags</th>
                        <th>Post Comment</th>
                        <th>Post Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                    $query = "Select * from posts";

                    $select_posts = mysqli_query($connection,$query);

                    while($row=mysqli_fetch_assoc($select_posts)){
                        $post_id = $row['post_id'];
                        $post_author = $row['post_author']; 
                        $post_title = $row['post_title'];
                        $post_category_id = $row['post_category_id'];
                        $post_image = $row['post_image'];
                        $post_status = $row['post_status'];
                        $post_tags = $row['post_tags'];
                        $post_comment_count = $row['post_comment_count'];
                        $post_date = $row['post_date'];
                        
                        echo "<tr>";
                        echo "<td>$post_id </td>";
                        echo "<td>$post_author</td>";
                        echo "<td>$post_title</td>";
                        echo "<td>$post_category_id</td>";
                        echo "<td><img class='img-responsive' width=200px src='../images/$post_image'</td>";
                        echo "<td>$post_status</td>";
                        echo "<td> $post_tags</td>";
                        echo "<td>$post_comment_count</td>";
                        echo "<td> $post_date</td>";
                        echo "</tr>";


                    }


                    ?>
                    
                </tbody>
            </table>
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>
