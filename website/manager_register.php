<!DOCTYPE html>
<html>
<head>
   <title>Product Register</title>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
   <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/managerpage.css">
<!--===============================================================================================-->
<link href="htpps://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./css/manage_box.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script src="htpps://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="htpps://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js">
</script>
</head>

<script>
   function check_input () {
      if(!document.manager_register.pname.value){
         alert("Please complete the form!");
         document.manager_register.pname.focus();
         return;
      }

      if(!document.manager_register.price.value){
         alert("Please complete the form!");
         document.manager_register.price.focus();
         return;
      }

      // if(!document.manager_register.size.value){
      //    alert("Please complete the form!");
      //    document.manager_register.size.focus();
      //    return;
      // }

      if(!document.manager_register.quantity.value){
         alert("Please complete the form!");
         document.manager_register.quantity.focus();
         return;
      }

   /*   if(!document.manager_register.category.value){
         alert("Please complete the form!");
         document.manager_register.category.focus();
         return;
      }

      if(!document.manager_register.designer.value){
         alert("Please complete the form!");
         document.manager_register.designer.focus();
         return;
      }

   */
      document.manager_register.submit();
   }

  function order(source){
    checkboxes = document.getElementsByName('order');
    for (var i =0, n=checkboxes.length; i<n; i++) {
     checkboxes[i].checked = source.checked;
    }
  }

   function csorder(source){
    checkboxes = document.getElementsByName('csorder');
    for (var i =0, n=checkboxes.length; i<n; i++) {
     checkboxes[i].checked = source.checked;
    }
  }

$('input[name="dates"]').daterangepicker();
</script>

<body>
<header>
   <?php include "header.php";?>
</header>

<section>
   <form class="form-register" name="manager_register" method="post" action="manager_register_insert.php" enctype="multipart/form-data">
      <div class="container">
          <div class="row clearfix">
              <div class="col-md-12 table-responsive">
               <table class="table table-bordered  table-sortable" id="tab_logic" border="1">
      <tbody>
        <thead> 
            <tr>
                <td class="text-center" colspan="5" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">Product Register
                </td>
             </tr>
        </thead>
<!-- -------------------------------------------------------------------------- -->   

      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center">
         Product Name
         </th>
            <td  data-name="sel" colspan="5">
               <div class="manage-text">
                  <input type="text" class="form-control catagory" width="100"name="pname">
               </div>
            </td>
      </tr>
<!-- -------------------------------------------------------------------------- -->      
      <tr id='addr0' data-id="0" class="hidden">
         <th  class="text-center" >Price</th>
         <td data-name="sel" colspan="5">
            <div class="manage-text">
               <input type="number" placeholder='$'class="form-control form-my" width="100" name="price">
            </div>
         </td>
      </tr>
<!-- -------------------------------------------------------------------------- -->         
      <tr id='addr0' data-id="0" class="hidden">
         <th  class="text-center" >Size</th>
         <td data-name="sel" colspan="5"> 
            <select class="selection-1 catagory form-control" name="size">
                    <option value="">------</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
              </td>
      </tr>
<!-- -------------------------------------------------------------------------- -->   

      <tr id='addr0' data-id="0" class="hidden">
         <th  class="text-center" >
         Quantity
         </th>
         <td colspan="5">
            <div class="manage-text">
               <input type="number" name="quantity" class="form-control form-my" width="100">
            </div>
         </td>
      </tr>   

      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center">Summary</th>
         <td colspan="5">
            <div class="manage-text">
               <input type="text" name="summary"class="form-control form-my" width="100">
            </div>
         </td>
      </tr>
      
      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center">Detatil</th>
         <td data-name="desc" colspan="5">
            <textarea name="desc0" placeholder="Description" class="form-control"></textarea>
         </td>
      </tr>

      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center">Image</th>
         <td colspan="5">
            <div>
               <input type="file" name="upfile" class="form-control form-my">
            </div>
         </td>
      </tr>      
      
      
      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center" rowspan="2"> Category</th>
         <th data-name="name">Clothes</th>
         <th data-name="name">Accessories</th>
         <th data-name="name">Shoes</th>
         <th data-name="name">Bags</th>
      </tr>
      
      <!--
      <tr id='addr0' data-id="0" class="hidden">
         <td data-name="name">
            <div class="custom-control custom-checkbox">
               <input type="checkbox" name="designer" value="alx-mc" class="custom-control-input" id="customCheck1">
               <label class="custom-control-label" for="customCheck1">Alexander Mcqueen</label>
            </div>
            <div class="custom-control custom-checkbox">
               <input type="checkbox" name="designer" value="gucci" class="custom-control-input" id="customCheck2">
               <label class="custom-control-label" for="customCheck2">Gucci</label>
            </div>
            <div class="custom-control custom-checkbox">
               <input type="checkbox" name="designer" value="sain-laur" class="custom-control-input" id="customCheck3">
               <label class="custom-control-label" for="customCheck3">Saint Laurent</label>
            </div>
         </td>   
         -->
         <td data-name="name">
            <div class="custom-control custom-radio">
               <input type="radio" name="clothes" value="top" class="custom-control-input" id="customCheck4">
               <label class="custom-control-label" for="customCheck4">Top</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="clothes" value="bottom" class="custom-control-input" id="customCheck5">
               <label class="custom-control-label" for="customCheck5">Bottom</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="clothes" value="outer" class="custom-control-input" id="customCheck6">
               <label class="custom-control-label" for="customCheck6">Outer</label>
            </div>
         </td>

         <td data-name="name">
            <div class="custom-control custom-radio">
               <input type="radio" name="acc" value="necklace" class="custom-control-input" id="customCheck7">
               <label class="custom-control-label" for="customCheck7">Necklace</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="acc" value="bracelet" class="custom-control-input" id="customCheck8">
               <label class="custom-control-label" for="customCheck8">Bracelet</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="acc" value="earring" class="custom-control-input" id="customCheck9">
               <label class="custom-control-label" for="customCheck9">Earring</label>
            </div>
         </td>

         <td data-name="name">
            <div class="custom-control custom-radio">
               <input type="radio" name="shoes" value="loafers" class="custom-control-input" id="customCheck10">
               <label class="custom-control-label" for="customCheck10">Loafers</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="shoes" value="boots" class="custom-control-input" id="customCheck11">
               <label class="custom-control-label" for="customCheck11">Boots</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="shoes" value="sneakers" class="custom-control-input" id="customCheck12">
               <label class="custom-control-label" for="customCheck12">Sneakers</label>
            </div>
         </td>

         <td data-name="name">
            <div class="custom-control custom-radio">
               <input type="radio" name="bag" value="backpacks" class="custom-control-input" id="customCheck13">
               <label class="custom-control-label" for="customCheck13">Backpacks</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="bag" value="clutch" class="custom-control-input" id="customCheck14">
               <label class="custom-control-label" for="customCheck14">Clutch Bags</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="bag" value="shoulder" class="custom-control-input" id="customCheck15">
               <label class="custom-control-label" for="customCheck15">Shoulder Bags</label>
            </div>
         </td>
      </tr>   

      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center">Designer</th>
         <td  data-name="name" colspan="5">
            <div class="custom-control custom-radio">
               <input type="radio" name="designer" value="gucci" class="custom-control-input" id="customCheck16">
               <label class="custom-control-label" for="customCheck16">GUCCI</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="designer" value="ysl" class="custom-control-input" id="customCheck17">
               <label class="custom-control-label" for="customCheck17">ysl</label>
            </div>
            <div class="custom-control custom-radio">
               <input type="radio" name="designer" value="mcq" class="custom-control-input" id="customCheck18">
               <label class="custom-control-label" for="customCheck18">Alexander Mcqueen</label>
            </div>
         </td>
      </tr>   

      <tr id='addr0' data-id="0" class="hidden">
         <th class="text-center">Product State</th>
         <td  data-name="name" colspan="5">
            <div class="custom-control custom-checkbox">
               <input type="checkbox" name="state" value="new" class="custom-control-input" id="customCheck19">
               <label class="custom-control-label" for="customCheck19">New Product</label>
            </div>
            <div class="custom-control custom-checkbox">
               <input type="checkbox" name="state" value="recomm" class="custom-control-input" id="customCheck20">
               <label class="custom-control-label" for="customCheck20">Recommended Product</label>
            </div>
         </td>
      </tr>
      </div>
   </div>
   </div>
   </form>
   </tbody>
   </table>
   <button type="button" onclick="check_input()">Register</button> 
   <button type="button"><a href="manager_productlist.php">List</a></button>  
</section>

<footer>
   <?php include "footer.php";?>
</footer>
</body>
</html>