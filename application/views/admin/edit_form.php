<fieldset>
              <legend><h2>Form Adding Project</h2></legend>

               <form action="#" method="post" enctype="#">
                
                <div class="form-group">
                  <label>Project Title</label>
                  <input type="text" class="form-control" placeholder=" Your Project name">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control">
                    <option value="1">Category One</option>
                    <option value="2">Category Two</option>
                    <option value="3">Category Three</option>
                   <option value="4">Category Four</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Project Author</label>
                  <input type="text" class="form-control" placeholder="Your Project author">
                </div>


                <div class="form-group">
                  <label>Project Description</label>
                  <textarea class="form-control" placeholder="  Description"></textarea>
                </div>

                <div class="form-group">
                  <label for="project_image">Project Image </label>
                  <input type="FILE" name="project_image" id="project_image" value="Choose File" required>
                  <p class="text-muted">Max Size: 3MB</p>
                </div>


               </form>
              
              
              <button type="submit" class="btn btn-primary">Submit</button>

            </fieldset> <br>