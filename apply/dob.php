

        <div class="form-group" style="width: 20%;margin-right:10px;">
                  <select style="box-shadow:0px  3px 3px #eee;"  name="dday" id="" class="form-control" required>
                   <option value="">Day</option>
                      
                     <?php
                        for($i = 1; $i<=31; $i++) { 
                            echo" <option value='$i'>$i</option>";
                     }?>
                  </select>
                </div>
                
                 <div class="form-group" style="width:20%;margin-right:10px;">
                  <select style="box-shadow:0px  3px 3px #eee;"  name="dmonth" id="dday" class="form-control" required>
                   <option value="">Month</option>
                   <option value="1">Jan</option>
                   <option value="2">Feb</option>
                   <option value="3">Mar</option>
                   <option value="4">Apr</option>
                   <option value="5">May</option>
                   <option value="6">Jun</option>
                   <option value="7">Jul</option>
                   <option value="8">Aug</option>
                   <option value="9">Sep</option>
                   <option value="10">Oct</option>
                   <option value="11">Nov</option>
                   <option value="12">Dec</option>
                     
                  </select>
                </div>
                
                <div class="form-group" style="width: 28%">
                  <select style="box-shadow:0px  3px 3px #eee;"  name="dyear" id="dyear" class="form-control" required>
                       <option value="">Year</option>
                     <?php
                        for($i = 1940; $i<=2030; $i++) { 
                            echo" <option value='$i'>$i</option>";
                     }?>
                  </select>
                </div>


