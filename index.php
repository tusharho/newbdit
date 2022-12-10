<?php
    include('./inc/db_sql_query.php');
    $messege = '';

    if(isset($_POST['submit'])){
        //header('Content-Type: text/html; charset=utf-8');
        //echo mysqli_real_escape_string ($conn, $_POST['course']);
        //return;
        $form_data=array(
            'name' => $_POST['name'],
            'email' => $_POST['mail'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'course' => mysqli_real_escape_string($conn, $_POST['course']),
            'created_at' => date('Y-m-d H:i:s')
        );
         $result= DBInsert('users', $form_data, $conn);
         if($result){
            $messege = 'Success';
            
         }else{
            $messege = 'Faild';
         }
    }
    include('./layouts/header.php');
?>
    
    <!-- Body Part Start -->
             <!-- ক্যারিয়ার -->
        <div class="bodyfunction">
            <div class="left-side">
                <h1>ক্যারিয়ার শুরু হোক <br> <span >দক্ষতার আত্মবিশ্বাসে</h1></span> 
                    <p class="text">অভিজ্ঞ মেন্টর আর আপডেটেড কারিকুলাম নিয়ে নিউ বিডি আইটি ইনস্টিটিউট প্রস্তুত আপনার ক্যারিয়ার গড়ার অগ্রযাত্রায়। আমাদের ৩ টি কোর্স থেকে আজই বেছে নিন আপনার পছন্দের কোর্স।</p> <br>
                    <a href="#">জয়েন ফ্রি সেমিনার</a> <br><br>        
                    <div class="iso">
                        <img src="assets/image/iso.png" alt="bd it">
                        <p class="iso2"> <br> দেশের অন্যতম ISO সার্টিফাইড আইটি ট্রেনিং ইনস্টিটিউট</p> <br>
                    </div>
            </div>
            <div class="right-side">
                <img src="assets/image/pana.png" alt="bd it">
            </div>
        </div>
             <!-- কোর্সসমূহ -->
            <div class="course">
                <h1 class="cour">জনপ্রিয় কোর্সসমূহ</h1>
                <p class="ptext">দেশ ও দেশের বাইরে বর্তমানে যে স্কিলগুলোর চাহিদা সবচেয়ে বেশি, সেসব দিয়েই <br> সাজানো হয়েছে আমাদের কোর্স লিস্ট। এখান থেকে আপনার সুবিধামত অনলাইন <br> বা অফলাইন কোর্সে এনরোল করতে পারবেন যেকোনো সময়।</p> <br>
                
                <!-- course design -->
                <div class="design">
                    <div class="desing1">
                        <img src="assets/image/clipart.png" alt="bd it">
                        <p class="des">প্রফেশনাল গ্রাফিক ডিজাইন <br> কোর্স ‍ফি ৪০,০০০/=</p>
                    </div>
                    <div class="desing2">
                        <img src="assets/image/web-design.png" alt="bd it">
                        <p class="des">ওয়েব ডিজাইন <br> কোর্স ‍ফি ৫০,০০০/=</p>
                    </div>
                    <div class="desin3">
                        <img src="assets/image/web-development.png" alt="bd it">
                        <p class="des">ওয়েব ডেভেলপমেন্ট <br> কোর্স ‍ফি ৮০,০০০/=</p>
                    </div>
                </div> <br><br>
                <!-- সফলতা -->
                <div class="sofolota">
                    <div class="sofolota1">
                        <h1 class="sofo">৮৭%</h1>
                    <h2>সফলতার হার</h2>
                    <p class="sofo2">কর্মক্ষেত্রে সফল হওয়ার জন্য প্রয়োজন বাস্তব কাজের অভিজ্ঞতা। তাই আমরা জোর দেই প্রজেক্ট বা হাতে-কলমে শিক্ষায়। আমাদের যেকোনো কোর্সের শুরু থেকে বিভিন্ন মার্কেটপ্লেসে কাজ করার কৌশল শিখানো হয় একজন শিক্ষার্থীকে। এজন্য লোকাল আর গ্লোবাল মার্কেটপ্লেসে আমাদের শিক্ষার্থীদের সফলতার হার তুলনামূলক বেশি।</p>                        
                    </div>
                    <div class="sofolota2">
                        <h1 class="sofo1">৮০০০+</h1>
                        <h2>শিক্ষার্থী সফল ভাবে মার্কেটপ্লেসে ফ্রিল্যান্সিং করছেন</h2>
                        <p class="sofo3">নিউ বিডি আইটিতে কোর্স শেষ করে এবং কোর্স চলাকালীন সময়ে কাজ পেয়েছেন আমাদের অনেক শিক্ষার্থী। মার্কেটপ্লেসের বিভিন্ন সেক্টরে তারা সফলতার সাথে কাজ করে যাচ্ছেন প্রতিদিন। ডলারে আয় করে নিজেরা স্বাবলম্বী হওয়ার পাশাপাশি ফ্রিল্যান্সিং করে তারা দেশকে এগিয়ে নিচ্ছেন সমৃদ্ধির পথে। </p>
                    </div>      
                    <div class="sofolota3">
                        <h1 class="sofo5">৬০০০+</h1>
                        <h2>ক্যারিয়ার প্লেসমেন্ট ক্রিয়েটিভ আইটির সেরা অর্জন</h2>
                        <p class="sofo4">নিউ বিডি আইটি-র জব প্লেসমেন্ট ডিপার্টমেন্ট দক্ষ শিক্ষার্থীদের কাজ খুঁজে দিতে কাজ করে থাকে। এরই ধারাবাহিকতায়, কোর্স চলাকালীন বা কোর্স শেষ করে স্বনামধন্য বিভিন্ন প্রতিষ্ঠানে কাজের সুযোগ পেয়েছেন প্রায় ৬৬ শতাংশ ছাত্র/ছাত্রী। তাই নিউ বিডি আইটির শিক্ষার্থীদের ক্যারিয়ার যাত্রা এখন আরও সহজ।</p>
                    </div>                 
                </div>

                <!-- বিশেষ সেবা -->

                    <div class="shaba">
                      <div class="bdit">
                          <h1>নিউ বিডি আইটির বিশেষ সেবা</h1>
                          <p class="shabap">কেবল ক্লাস নয়, নিউ বিডি আইটি সবসময় প্রস্তুত শিক্ষার্থীদের যেকোনো দরকারে, <br> যেকোনো সময়। তাই উন্নতমানের কোর্সের সাথে আপনি পাচ্ছেন কিছু বোনাস <br> সুবিধা, যা শুধুমাত্র আমরাই দিয়ে থাকি।</p>
                      </div>
                        <div class="shaba1">
                          <img src="assets/image/shaba1.png" alt="bd it">      
                          <h2>লাইফটাইম সাপোর্ট</h2>
                          <p>ট্রেনিং শেষ হলেও আপনার সঙ্গে সম্পর্ক কিন্তু এখানেই শেষ নয়।। নিউ বিডি আইটির শিক্ষার্থী হিসেবে আপনি পাচ্ছেন লাইফ-টাইম সাপোর্ট। অনলাইনে ২৪/৭ সাপোর্ট পাচ্ছেন যেকোনো সময়। আমাদের বিষয় ভিত্তিক অভিজ্ঞ টিম অফলাইন বা অনলাইনে এই সাপোর্ট নিশ্চিত করে থাকেন।</p>
                        </div>
                            <div class="shaba2">
                                <img src="assets/image/shaba2.png" alt="bd it"> 
                                <h2>ক্যারিয়ার প্লেসমেন্ট সাপোর্ট</h2>
                               <p>শিক্ষার্থীদের যোগ্যতা অনুযায়ী সঠিক জায়গায় সিভি পৌছাতে কাজ করে থাকে ক্যারিয়ার প্লেসমেন্ট ডিপার্টমেন্ট। এখান থেকে আপনি পাবেন কোর্স পরবর্তী গ্রুপিং এবং ক্যারিয়ার গাইডলাইন বিষয়ক বিভিন্ন সেমিনার। যা ক্যারিয়ার দৌড়ে অন্য যে কারও থেকে আপনাকে এগিয়ে রাখবে অনেকখানি।</p>
                            </div>      
                            <div class="shaba3">
                                <img src="assets/image/shaba13.png" alt="bd it"> 
                                <h2>ক্লাস ভিডিও</h2>
                                <p>অনেক সময় শিক্ষার্থীরা ক্লাসে কিছু টপিক বুঝতে পারেন না,তাদের জন্য রয়েছে ক্লাস ভিডিও এর সুবিধা। তাই এখন শিক্ষার্থীরা ক্লাস করতে পারেন নিশ্চিন্তে।যেকোন অসুবিধায় ভিডিও দেখে আপনি নিজেই যেকোন সমস্যার সমাধান করতে পারবেন।</p>
                            </div>                 
                    </div>

                    <!-- course admission -->
                    
            <div class="admission">
                <h1 class="adm">সকল কোর্সে ভর্তি চলছে</h1>
                <p class="adm1">অনলাইন এবং অফলাইন যেকোনো কোর্সে আপনার সুবিধামতো সময়ে ভর্তি হতে পারেন এখনই।</p>
            </div>
            <br>

            <!-- admission form start -->
            <div class="form">     
                <?php
                if($messege == ''){
                ?>       
                <form action="index.php" method="post" accept-charset="utf-8">
                    <fieldset class="field">
                        <legend class="vorti"> ভর্তি ফরম </legend>
                        <label for="name">আপনার নাম:</label>
                        <input type="text" name="name" id="name" placeholder="নাম" required><br><br>
                        <label for="mail">আপনার ই-মেইল:</label>
                        <input type="email" name="mail" id="mail" placeholder="ই-মেইল" required><br><br>
                        <label for="phone">আপনার ফোন নাম্বার:</label>
                        <input type="text" name="phone" id="phone" placeholder="ফোন নাম্বার" required><br><br>                        
                        <label for="" name="list">কোর্স সিলেক্ট করুন:</label>
                        
                        <select id="list" name="course">
                            <option value="গ্রাফিক ডিজাইন">গ্রাফিক ডিজাইন</option>
                            <option value="ওয়েব ডিজাইন">ওয়েব ডিজাইন</option>
                            <option value="ওয়েব ডেভেলপমেন্ট">ওয়েব ডেভেলপমেন্ট</option>
                        </select>
                        <br><br>
                        <label for="text">আপনার ঠিকানা:</label><br>
                        <textarea name="address"  id="text" cols="80" rows="5" placeholder="আপনার ঠিকানা" required></textarea><br><br>
                        <button class="submit" type="submit" name="submit">
                            সাবমিট
                        </button>                   
                    </fieldset>
                </form>
                <?php
                }
                else{
                    echo $messege;
                }
                ?> 
            </div> 
            <!-- admission form ends --><br><br>                
        </div><br><br>


    
        <!-- Body Part ends -->
        <!-- payment start -->
        <br><br>
        <div class="box">
            <div class="payment">
                <img src="assets/image/ppp.JPG" alt="bd it">
            </div>
        </div><br>

        <!-- payment ends -->
<?php
    include('./layouts/footer.php');
?>