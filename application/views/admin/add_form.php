<fieldset>
              <legend><h2>Form Adding Project</h2></legend>

               <form action="<?php echo base_url(); ?>AdminProject/addProjectSubmit" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>Project Title</label>
                  <input type="text" class="form-control" placeholder=" Your Project name" name="title">
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
                  <input type="text" class="form-control" placeholder="Your Project author" name="author">
                </div>


                <div class="form-group">
                  <label>Project Description</label>
                  <textarea class="form-control" placeholder="Description" name="description"></textarea>
                </div>

                <div class="form-group">
                  <label for="project_image">Project Image </label>
                  <input type="file" name="gambar" id="project_image" required>
                  <p class="text-muted">Max Size: 3MB</p>
                </div>

                <div class="form-group">
                  <label>Link to Project</label>
                  <input type="text" class="form-control" placeholder="Copy your URL project here" name="link">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
               </form>
              
              
              

            </fieldset> <br>