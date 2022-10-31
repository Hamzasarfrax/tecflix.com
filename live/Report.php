<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Reports</title>
  <?php
require_once("user_content/header.php")
?>
  <?php
require_once("user_content/css.php")
?>

<style>

</style>
  </head>
  <body>

  <main>
  <section class="login_page">
  <?php
require_once("user_content/sidebar.php")
?>
 
 <section class="manage_order_section">
  <div class="container container_wrapper">
    <div class="row">
      <div class="w-100">
        <div class="table_section smal_device_margin_padding">
          <table class="table">
            <thead>
              <tr class="nav_table_row">
              <div class="to_nav_table">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">active order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">completed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">cancelled</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">all order</a>
                  </li>
                
                </ul>
              </div>
              </tr>
              <tr>
                <th scope="col" class="main_heading_top">due date</th>
                <th scope="col" class="main_heading_top">deliver date</th>
                <th scope="col" class="main_heading_top">order id</th>
                <th scope="col" class="main_heading_top">products</th>
                <th scope="col" class="main_heading_top">order amount</th>
              </tr>
            </thead>
            <tbody>
           
              <tr>
                <th scope="row">10/26/2022</th>
                <td>10/26/2022</td>
                <td>25389</td>
                <td class="width_mange_order">
                  <img
                    src="https://dummyimage.com/150x100/000/dcdce0&text=table_img"
                    alt=""
                    class="w-25"
                  />
                  Lorem ipsum dolor sit.
                </td>
                <td><span class="order_class">
                  $530
                </span></td>
                <td>
                  <button class="btn btn_reorder">re-order</button>
                </td>
              </tr>
              <tr>
                <th scope="row">10/26/2022</th>
                <td>10/26/2022</td>
                <td>25389</td>
                <td class="width_mange_order">
                  <img
                  src="https://dummyimage.com/150x100/000/dcdce0&text=table_img"
                  alt=""
                  class="w-25"
                />
                  Lorem ipsum dolor sit.
                </td>
                <td><span class="order_class">
                  $530
                </span></td>
                <td>
                  <button class="btn btn_reorder">re-order</button>
                </td>
              </tr>

              <tr>
                <th scope="row">10/26/2022</th>
                <td>10/26/2022</td>
                <td>25389</td>
                <td class="width_mange_order">
                  <img
                    src="https://dummyimage.com/150x100/000/dcdce0&text=table_img"
                    alt=""
                    class="w-25"
                  />
                  Lorem ipsum dolor sit.
                </td>
                <td><span class="order_class">
                  $530
                </span></td>
                <td>
                  <button class="btn btn_reorder">re-order</button>
                </td>
              </tr>

              <tr>
                <th scope="row">10/26/2022</th>
                <td>10/26/2022</td>
                <td>25389</td>
                <td class="width_mange_order">
                  <img
                    src="https://dummyimage.com/150x100/000/dcdce0&text=table_img"
                    alt=""
                    class="w-25"
                  />
                  Lorem ipsum dolor sit.
                </td>
                <td><span class="order_class">
                  $530
                </span></td>
                <td>
                  <button class="btn btn_reorder">re-order</button>
                </td>
              </tr>
              <tr>
                <th scope="row">10/26/2022</th>
                <td>10/26/2022</td>
                <td>25389</td>
                <td class="width_mange_order">
                  <img
                    src="https://dummyimage.com/150x100/000/dcdce0&text=table_img"
                    alt=""
                    class="w-25"
                  />
                  Lorem ipsum dolor sit.
                </td>
                <td><span class="order_class">
                  $530
                </span></td>
                <td>
                  <button class="btn btn_reorder">re-order</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>  
</section> 
    </section>

    
</main>


        <?php
require_once("user_content/footer.php")
?>
  </body>

<?php
require_once("user_content/js.php")
?>
 

 
</html>
