<?php $this->view("beauty-shop/profileHeader",$data)?>
<style>
   td img {
   width: 60px;
}
</style>
   <body class="inner_page tables_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
      <?php $this->view("beauty-shop/sidebar",$data)?>
         <?php if(isset($product_id)): ?>
         show(data['$product_id']);
         <?php endif; ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Tables</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Users</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Username</th>
                                             <th>Email</th>
                                             <th>Password</th>
                                          </tr>
                                       </thead>
                                       <tbody>
			                  <?php foreach ($data['user'] as $key):?>
                                          
                                          <tr>
                                             <td><?=$key->id?></td>
                                             <td><?=$key->username?></td>
                                             <td><?=$key->email?></td>
                                             <td><?=$key->password?></td>
                                          </tr>
                           <?php endforeach; ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- table section -->
                        <!-- <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Hover Table</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>Mary</td>
                                             <td>Moe</td>
                                             <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                             <td>July</td>
                                             <td>Dooley</td>
                                             <td>july@example.com</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Responsive Tables</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Image</th>
                                             <th>Description</th>
                                             <th>Title</th>
                                             <th>Categorie</th>
                                             <th>Date</th>
                                             <th>Price</th>
                                             <th>Edit</th>
                                             <th>Delete</th>
                                             
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <form method="get">
			                              <?php foreach ($data['posts'] as $key2):?>
                                          <tr>
                                             <td><?=$key2->id?></td>
                                             <td> <img src="<?=$key2->image?>" alt="product"></td>
                                             <td><?=$key2->description?></td>
                                             <td><?=$key2->title?></td>
                                             <td><?=$key2->categories?></td>
                                             <td><?=$key2->date?></td>
                                             <td><?=$key2->price?></td>
                                             <td><a class="btn btn-primary" href="<?=ROOT?>update?id=<?=$key2->id?>">Update</a></td>
                                             <td><a class="btn btn-danger" href="<?=ROOT?>delete?id=<?=$key2->id?>"  name="id" >delete</a></td>
                                          </tr>
                                       <?php endforeach; ?>
                                          </form>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
      <?php $this->view("beauty-shop/profilefooter",$data)?>
