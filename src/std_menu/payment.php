<h2>ชำระเงิน</h2>
                <div class="updates">
                    <form action="./src/src/paymentAPI.php" method="post" class="form" enctype="multipart/form-data">
                        <img src="" id="preimg" alt="">
                        <div class="input-data">
                            <input type="file" id="inputimg" name="filepay" required>
                            <div class="underline"></div>
                            <?php $usernames=$_SESSION['extra_c_acc_user'];?>
                        </div>
                        <div class="submis">
                            <button type="submit" class="submi">ชำระเงิน</button>
                        </div>
                    </form>
                </div>
                <script>
                    let inputimg = document.querySelector("#inputimg");
                    let previwe = document.querySelector("#preimg");

                    inputimg.onchange = evt => {
                        const [file] = inputimg.files;
                        if(file){
                            previwe.src=URL.createObjectURL(file);
                        }
                    }
                </script>