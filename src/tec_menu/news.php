<h2>เพิ่มข่าวสาร</h2>
                <div class="updates">
                    <form  action="src/src/newsAPI.php" method="post" class="form" enctype="multipart/form-data">

                    <h2><b>รูปภาพ</b></h2>
                    <div class="containers">
                        <div class="wrapper">
                            <div class="image">
                            <img id="imgfix" src="" alt="">
                            </div>
                            <div class="content">
                            <div class="icon">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text">
                                No file chosen, yet!
                            </div>
                            </div>
                            <div id="cancel-btn">
                            <i class="fas fa-times"></i>
                            </div>
                            <div class="file-name">
                                File name here
                            </div>
                        </div>
                        <button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
                        <input id="default-btn" type="file" name="fileToUpload" hidden>
                    </div>

                 

                        <div class="input-data"style="margin-top: 300px;">
                            <input type="text" name="section" required>
                            <div class="underline"></div>
                            <label>หัวข้อ</label>
                        </div>
                        <div class="input-data">
                            <input type="text" name="content" required>
                            <div class="underline"></div>
                            <label>เนื้อหา</label>
                        </div> 
                        <input type="hidden" name="status" value="insert">
                        <div class="submis">
                            <button type="submit" class="submi">ตกลง</button>
                        </div>
                        
                    </form>
                </div>
            <script>
         const wrapper = document.querySelector(".wrapper");
         const fileName = document.querySelector(".file-name");
         const defaultBtn = document.querySelector("#default-btn");
         const customBtn = document.querySelector("#custom-btn");
         const cancelBtn = document.querySelector("#cancel-btn i");
         const img = document.querySelector("#imgfix");
         let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
         function defaultBtnActive(){
           defaultBtn.click();
         }
         defaultBtn.addEventListener("change", function(){
           const file = this.files[0];
           if(file){
             const reader = new FileReader();
             reader.onload = function(){
               const result = reader.result;
               img.src = result;
               wrapper.classList.add("active");
             }
             cancelBtn.addEventListener("click", function(){
               img.src = "";
               wrapper.classList.remove("active");
             })
             reader.readAsDataURL(file);
            
           }
           if(this.value){
             let valueStore = this.value.match(regExp);
             fileName.textContent = valueStore;
           }
        

           
         });
      </script>
                    
                        
                    </form>
                </div>