<?php
require_once("header.php");
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 p-5 shadow bg-white">
            <h2>Add fruit</h2>
            <hr>

            <ul class="sidebar-link">
           <li><a href="manager.php">Add fruit stock</a></li>
           <li><a href="viewfruit.php">view fruit stock</a></li>
           <li><a href="updatefruit.php">update fruit stock</a></li>
            </ul>
        </div>
        
        <div class="col-md-7 ms-5 p-5 shadow bg-white">
         <h2>Add fruit stock (customer Module)</h2>
        </hr>

        <form>
            <div class="form-group mt-2">
           <input type="text" name="fruitname" placeholder="fruit Name" required class="form-control">
            </div>
            
            <div class="form-group mt-2">
            <input type="number" name="qty" placeholder="fruit qty" required class="form-control">    
            </div>

            <div class="from-group mt-2">
                <input type="text" name="price" placeholder="fruit price" required class="form-control">
            </div>

            <div class="form-group mt-2">
              <input type="submit" name="Addfruit" placeholder="add fruit" class="btn btn-dark btn-lg text-white">  
            </div>

        </form>
    </div>
</div>
            </div>