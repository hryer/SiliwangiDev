 <?php if(!isset($data_project)){
      redirect(base_url() . "AdminProject");
  } ?>

  <div class="col-md-8">
              <h1 class="page-header text-primary"><i class="glyphicon    glyphicon-file"></i> Edit Projects</h1> 
              <hr>
            
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>adminMain">Dashboard</a></li>
              <li><a href="<?php echo base_url(); ?>adminProject">Projects</a></li>
              <li class="active">Edit Projects</li>

            </ol>

            <fieldset>
              <legend><h2>Form Edit Project</h2></legend>
              
              
               <form action="<?php echo base_url(); ?>AdminProject/editProjectSingleSubmit" method="post" enctype="multipart/form-data">
              

                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $data_project->id;?>" />
              
                  <label>Project Title </label>
                  <input type="text" class="form-control" value="<?php echo $data_project->title; ?>" name="title">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category">
                    <option value="Web Design">Web Design</option>
                    <option value="Web Programming">Web Programming</option>
                    <option value="Fullstack">Fullstack</option>
                   <option value="SEO">SEO</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Project Author</label>
                  <input type="text" class="form-control" value="<?php echo $data_project->author; ?>" name="author">
                </div>


                <div class="form-group">
                  <label>Project Description</label>
                  <textarea class="form-control" name="description"> <?php echo $data_project->description; ?></textarea>
                </div>
                <input type="hidden" value="<?php echo $data_project->image; ?>" name="gambar_old">
                <div class="form-group">
                  <label for="project_image">Project Image </label>
                  <input type="file" name="gambar" id="project_image" required>
                  <p class="text-muted">Max Size: 3MB</p>
                </div>

                <div class="form-group">
                  <label>Link to Project</label>
                  <input type="text" class="form-control" value="<?php echo $data_project->link; ?> " name="link">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Submit</button>

               </form>
              
              
            </fieldset> <br>
