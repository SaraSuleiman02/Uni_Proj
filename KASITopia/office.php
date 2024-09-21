<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Office Hours</title>

  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" type="text/css" href="CSS/office.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

  <!-------------------- NAVBAR ------------------------>
  <nav>
    <div class="navbar">
      <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
      <div class="logo"><img src="img/KASIT.ico" alt="" style="width:100%; border: 0cm;"></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo_name">KASITopia</span>
          <ion-icon name="close-outline" class="close"></ion-icon>
        </div>
        <ul class="links">
          <li><a href="home.php">Home</a></li>
          <li>
            <a href="#">Services </a>
            <ion-icon name="chevron-down-outline" class="arrow htmlcss-arrow"></ion-icon>
            <ul class="services-sub-menu sub-menu">
              <li><a href="guide.php">Booking a Guide</a></li>
              <li><a href="schedule.php">Recommending a Course Schedule</a></li>
              <li><a href="location.php">Locations</a></li>
              <li><a href="#">Office Hours</a></li>
              <li><a href="calc.php">GPA Calculator</a></li>
              <li><a href="work.php">Career paths</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Websites </a>
            <ion-icon name="chevron-down-outline" class="arrow js-arrow"></ion-icon>
            <ul class="websites-sub-menu sub-menu">
                            <li><a href="https://elearning.ju.edu.jo/moodle10/login/index.php">Elearning</a></li>
                            <li><a href="https://web.facebook.com/KASIT.Official">KASIT Facebook Page</a></li>
                            <li><a href="https://regapp.ju.edu.jo/regapp/">Student Registartion System</a></li>
                            <li><a href="https://juexams.com/moodle/">JUexams</a></li>
                            <li><a href="https://eservices.ju.edu.jo/JUCS/">community Services</a></li>
                            <li><a href="https://eservices.ju.edu.jo/ClinicApp/">Student clinic</a></li>
                        </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!------------------SEARCH BOX---------------->
  <input type="search" id="searchbox" placeholder="&#x1F50D;    search..">

  <!------------------gf table---------------->
  <div>
    <section class="tables">
      <table>
        <thead>
          <h2> <img class="tableimg" src="images/gf.jpg" /> GF doctor's informations:</h2> <br><br>
          <tr>
            <th width="400px">Dr's name </th>
            <th width="400px">&#9993; Dr's email </th>
            <th width="400px">&#9716; Dr's office hours</th>
          </tr>
        </thead>
        <tbody class="inside">
          <tr>
            <td><span><img src="images/GF/dr.saleh.jpg" alt="img"> Dr.Saleh Al-Sharaeh <br>د.صالح الشرايعة <br>(عميد
                الكلية)</span></span></td>
            <td><a href="https://mail.google.com/">&#9993;ssharaeh@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed | 1:30-3:00</td>
          </tr>
          <tr>
            <td><span><img src="images/GF/dr.hamad.jpg" alt="img"> Dr.Hamad Al-Sawalqah<br>د.حمد السوالقة<br>(نائب عميد
                الكلية للشؤون الأكاديمية)</span></td>
            <td><a href="https://mail.google.com/">&#9993;h.sawalqah@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 1:30-2:30<br>Mon, Wed | 2:30-3:30</td>
          </tr>

          <tr>
            <td><span><img src="images/GF/dr.basima.jpg" alt="img">Dr.Basima Shoqurat <br>د.باسمة الشقيرات</span> </td>
            <td><a href="https://mail.google.com/">&#9993;b.shoqurat@ju.edu.jo</a></td>
            <td>&#9716;Tue | 12:30-1:30</td>
          </tr>
          <tr>
            <td><span><img src="images/GF/dr.abdelatif.jpg" alt="img">Dr.AbdeLatif Abu-Dalhoum<br>د.عبداللطيف أبو
                دلهوم</span> </td>
            <td><a href="https://mail.google.com/">&#9993;a.latif@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed | 1:00-2:30<br> 1:00-2:30</td>
          </tr>
          <tr>
            <td><span><img src="images/GF/dr.reem.jpg" alt="img">Dr.Reem Al-Fayez<br>د.ريم علي الفايز</span></td>
            <td><a href="https://mail.google.com/">&#9993;r.alfayez@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 1:30-2:30<br>Mon, Wed | 2:30-3:30</td>
          </tr>
          <tr>
            <td><span><img src="images/GF/dr.Bilal.jpg">Dr.Bilal Abu Salih<br>د.بلال أبو صالح</span></td>
            <td><a href="https://mail.google.com/">&#9993;b.abusalih@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/GF/dr.osama.jpg">Dr.Osama Harfoushi<br>د.أسامة الحرفوشي</span></td>
            <td><a href="https://mail.google.com/">&#9993;o.harfoushi@ju.edu.jo<br>harfoushi18@yahoo.co.uk</a></td>
            <td>&#9716;Sun, Tue, Thu | 12:30-1:30<br>Mon, Wed | 1:30-2:30</td>
          </tr>




        </tbody>
      </table>
    </section>

    <!--floor 1-->
    <section class="tables">
      <table>
        <thead>
          <h2><img class="tableimg" src="images/1st floor.jpg" />1st Floor doctor's informations:</h2>
          <tr>
            <th width="400px">Dr's name </th>
            <th width="400px">&#9993;Dr's email</th>
            <th width="400px">&#9716;Dr's office hours(الساعة المكتبية)</th>
          </tr>
        </thead>
        <tbody class="inside">
          <tr>
            <td><span><img src="images/1st/dr.nabeel.jpg">Dr.Nabeel Al-Assaf<br>د.نبيل العساف <br>مساعد العميد لشؤون
                الخريجين</span></td>
            <td><a href="https://mail.google.com/">&#9993;n.alassaf@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 10:30-11:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.jamal.jpg">Dr.Jamal Alsakran<br>د.جمال السكران</span></td>
            <td><a href="https://mail.google.com/">&#9993;j.alsakran@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 1:30-2:30<br>Mon, Wed | 2:30-3:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.oraib.jpg">Dr.Oraib AbuAlganam<br>د.عريب أبو الغنم <br> مساعد العميد لشؤون
                التعلم الالكتروني</span></td>
            <td><a href="https://mail.google.com/">&#9993;o.abualganam@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 9:30-10:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.lubna.jpg">Dr.Lubna Naser Eddeen<br>د.لبنى ناصر الدين</span></td>
            <td><a href="https://mail.google.com/">&#9993;lubna@ju.edu.jo</a></td>
            <td>&#9716;Sun, Thu | 11:30-12:30<br>Mon | 11:30-1:00</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.saher.jpg">Dr.Saher Manaseer<br>د.ساهر المناصير</span></td>
            <td><a href="https://mail.google.com/">&#9993;saher@ju.edu.jo</a></td>
            <td>&#9716;Wed, Mon | 11:30-1:00</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.wesam.jpg">Dr.Wesam Mobiedeen<br>د.وسام المبيضين</span></td>
            <td><a href="https://mail.google.com/">&#9993;wesam@ju.edu.jo</a></td>
            <td>&#9716;Sun, Thu | 9:30-10:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.hazm.jpg">Dr.Hazem Hiary<br>د.حازم الحياري</span></td>
            <td><a href="https://mail.google.com/">&#9993;lubna@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 12:30-1:30<br>Mon | 10:00 -11:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.basel.jpg">Dr.Basel A.Mahafzah<br>د.باسل محافظة </span></td>
            <td><a href="https://mail.google.com/">&#9993;b.mahafzah@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 12:30-1:30<br>Mon | 10:00 -11:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.iman.jpg">Dr.Iman Almomani<br>د.ايمان المومني </span></td>
            <td><a href="https://mail.google.com/">&#9993;i.momani@ju.edu.jo</a></td>
            <td>&#9716;Sun, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.mohmd.jpg">Dr.Mohammad Qatawneh<br>د.محمد قطاونة </span></td>
            <td><a href="https://mail.google.com/">&#9993;mohd.qat@ju.edu.jo</a></td>
            <td>&#9716;Wed, Mon | 11:30-1:00</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.ansar.jpg">Dr.Ansar Khoury<br>د.انصار الخوري </span></td>
            <td><a href="https://mail.google.com/">&#9993;ansar@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.mohmdA.jpg">Dr.Mohammad Atoum<br>د.محمد العتوم </span></td>
            <td><a href="https://mail.google.com/">&#9993;m.atoum@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.azzam.jpg">Dr.Azzam Sleit <br>د.عزام سليط </span></td>
            <td><a href="https://mail.google.com/">&#9993;azzam.sleit@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 12:30-1:30<br>Mon | 10:00 -11:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.ahmad.jpg">Dr.Ahmad Sharieh<br>د.أحمد الشرايعة </span></td>
            <td><a href="https://mail.google.com/">&#9993;sharieh@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.sami.jpg">Dr.Sami Sarhan <br>د.سامي السرحان </span></td>
            <td><a href="https://mail.google.com/">&#9993;@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.khair.jpg">Dr.Khair Edden Sabri <br>د.خيرالدين صبري </span></td>
            <td><a href="https://mail.google.com/">&#9993;k.sabri@ju.edu.jo</a></td>
            <td>&#9716;Sun, Thu | 11:30-12:30<br>Mon 11:30-1:00</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.sharnaz.jpg">Dr.Sharnaz AL-HajBaddar<br>د.شاريناز الحاج بدار </span></td>
            <td><a href="https://mail.google.com/">&#9993;s.baddar@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.nadeem.jpg">Dr.Nadim Obeid <br>د.نديم عبيد </span></td>
            <td><a href="https://mail.google.com/">&#9993;nadim@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30<br>Mon, Wed | 3:00-4:00</td>
          </tr>
          <tr>
            <td><span><img src="images/1st/dr.mohmdS.jpg">Dr.Mohammad Shraydeh <br>د.محمد الشريدة </span></td>
            <td><a href="https://mail.google.com/">&#9993;m.shraydeh@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed | 3:00-4:00</td>
          </tr>
        </tbody>
      </table>
    </section>
    <!--second floor table-->
    <section class="tables">
      <table>
        <thead>
          <h2> <img class="tableimg" src="images/2nd floor.jpg" /> 2nd Floor doctor's informations:</h2>
          <tr>
            <th width="400px">Dr's name </th>
            <th width="400px">&#9993; Dr's email </th>
            <th width="400px">&#9716; Dr's office hours</th>
          </tr>
        </thead>
        <tbody class="inside">
          <tr>
            <td><span><img src="images/2nd/dr.mohmdAbu.jpg">Dr.Mohammad A.M.Abushariah<br>د.محمد عبدالرحمن أبو
                شريعة</span></td>
            <td><a href="https://mail.google.com/">&#9993;M.Abushariah@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 10:30-11:30<br>Mon, Wed | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/no.jpg" alt="img"> Dr.Hiba Mohammad <br>د.هبةعلي محمد </span></td>
            <td><a href="https://mail.google.com/">&#9993;-----@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed | 3:00-4:00</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/no.jpg" alt="img">Dr.Tamara <br>د.تمارا مراعبة</span></td>
            <td><a href="https://mail.google.com/">&#9993;------@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30<br>Mon, Wed | 1:00-2:00</td>
          </tr>

          <tr>
            <td><span><img src="images/2nd/dr.rana.jpg" alt="img">Dr.Rana Yousef<br>د.رنا يوسف</span> </td>
            <td><a href="https://mail.google.com/">&#9993;rana.yousef@ju.edu.jo</a></td>
            <td>&#9716;Tue | 12:30-1:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.mousa.jpg" alt="img"> Dr.Mousa Al-Akhras<br>د.موسى الأخرس</span> </td>
            <td><a href="https://mail.google.com/">&#9993;mousa.akhras@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 12:30-1:30<br>Sun | 2:30-3:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.ammar.jpg" alt="img">Dr.Ammar Huneiti<br>د.عمار الحنيطي </span></td>
            <td><a href="https://mail.google.com/">&#9993;a.huneiti@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 1:30-2:30<br>Mon, Wed | 2:30-3:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.bassam.jpg">Dr.Bassam Hammo<br>د.بسام حمو</span></td>
            <td><a href="https://mail.google.com/">&#9993;b.hammo@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 9:30-10:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.loai.jpg">Dr.Loai Alnemer<br>د.لؤي النمر</span></td>
            <td><a href="https://mail.google.com/">&#9993;nemer@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 8:30-9:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.thaer.jpg">Dr.Thair Hamtini<br>د.ثائر حمتيني</span></td>
            <td><a href="https://mail.google.com/">&#9993;thamtini@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed | 11:30-1:00</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.huda.jpg">Dr.Huda Karajeh<br>د.هدى كراجة</span></td>
            <td><a href="https://mail.google.com/">&#9993;h.karajeh@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/2nd/dr.amjad.jpg">Dr.Amjad Hudaib<br>د.أمجد هديب</span></td>
            <td><a href="https://mail.google.com/">&#9993;ahudaib@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 11:30-12:30 <br>Mon | 12:00-1:00 </td>
          </tr>

        </tbody>
      </table>
    </section>

    <!--third floor table-->

    <section class="tables">
      <table>

        <thead>
          <h2> <img class="tableimg" src="images/3rd floor.jpg" /> 3rd Floor doctor's informations:</h2>
          <tr>
            <th width="400px">Dr's name </th>
            <th width="400px">&#9993; Dr's email </th>
            <th width="400px">&#9716; Dr's office hours</th>
          </tr>
        </thead>
        <tbody class="inside">
          <tr>
            <td><span><img src="images/3rd/dr.heba.jpg" alt="img"> Dr.Heba Saadeh <br>د.هبة سعادة </span></td>
            <td><a href="https://mail.google.com/">&#9993;heba.saadeh@ju.edu.jo</a></td>
            <td>&#9716;Tue | 10:30-11:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.marwan.jpg" alt="img">Dr.Marwan Al-Tawil <br>د.مروان الطويل</span></td>
            <td><a href="https://mail.google.com/">&#9993;m.altawil@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00<br>Wed 1:00-2:00</td>
          </tr>

          <tr>
            <td><span><img src="images/3rd/dr.hamad.jpg" alt="img">Dr.Hamad Sawalqah<br>د.حمد سوالقة </span> </td>
            <td><a href="https://mail.google.com/">&#9993;h.sawalqah@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.mariam.jpg" alt="img"> Dr.Mariam <br>د.مريم إطريق </span> </td>
            <td><a href="https://mail.google.com/">&#9993;m.itriq@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.ahmad.jpg" alt="img">Dr.Ahmad Al Hwaitat<br>د.أحمد الحويطات </span></td>
            <td><a href="https://mail.google.com/">&#9993;a.hwaitat@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 11:30-12:30 <br>Mon, Wed | 12:00-1:00</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.mohmdB.jpg">Dr.Mohammad Belal Al-Zoubi<br>د.محمد الزعبي</span></td>
            <td><a href="https://mail.google.com/">&#9993;mba@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue | 1:30-2:30<br>Mon Wed 1:00-2:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.mohmdO.jpg">Dr.Mohammad Obeidat<br>د.محمد عبيدات</span></td>
            <td><a href="https://mail.google.com/">&#9993;mohammad.obeidat@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 12:30-1:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/no.jpg">Dr.Ali Rodan<br>د.علي رضوان</span></td>
            <td><a href="https://mail.google.com/">&#9993;Alirodan@gmail.com</a></td>
            <td>&#9716;Sun, Tue, Thu | 11:30-12:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.menem.jpg">Dr.Mon'em Zamzeer<br>د.منعم زمزير</span></td>
            <td><a href="https://mail.google.com/">&#9993;mzamzeer@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00<br>Wed 1:00-2:00</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.hossam.jpg">Dr.Hossam Faris<br>د.حسام فارس</span></td>
            <td><a href="https://mail.google.com/">&#9993;Hossam.faris@ju.edu.jo</a></td>
            <td>&#9716;Sun, Tue, Thu | 10:30-11:30</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.bashar.jpg">Dr.Bashar Shboul<br>د.بشار الشبول</span></td>
            <td><a href="https://mail.google.com/">&#9993;bashar.shboul@gmail.com</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00<br>Wed 1:00-2:00</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.hamed.jpg">Dr.Hamed Al-Bdour<br>د.حامد البدور</span></td>
            <td><a href="https://mail.google.com/">&#9993;h.bdour@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed 1:00-2:00 </td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.yazan.jpg">Dr.Yazan Al-Shamaileh <br>د.يزن الشمايلة</span></td>
            <td><a href="https://mail.google.com/">&#9993;y.shamaileh@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00<br>Wed 1:00-2:00 </td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.ruba.jpg">Dr.Ruba Obiedat<br>د.ربي عبيدات</span></td>
            <td><a href="https://mail.google.com/">&#9993;r.obiedat@ju.edu.jo</a></td>
            <td>&#9716;Mon, Wed 1:00-2:00</td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.ibrahim.jpg">Dr.Ibrahim Al-Jarah<br>د.ابراهيم الجراح </span></td>
            <td><a href="https://mail.google.com/">&#9993;i.aljarah@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00 </td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.malak.jpg">Dr.Malak Al-Hassan<br>د.ملاك الحسن</span></td>
            <td><a href="https://mail.google.com/">&#9993;M_Alhassan@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00<br>Wed 1:00-2:00 </td>
          </tr>
          <tr>
            <td><span><img src="images/3rd/dr.dana.jpg">Dr.Dana <br>د.دانة القضاة</span></td>
            <td><a href="https://mail.google.com/">&#9993;d.qudah@ju.edu.jo</a></td>
            <td>&#9716;Tue, Thu | 9:00-10:00 </td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Next and previous buttons -->
    <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next1" onclick="plusSlides(1)">&#10095;</a>
  </div>


  <script src="javaScript/navbar.js"></script>
  <script src="javaScript/officeJS.js"></script>

  <!-- Link to ionic framework -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>