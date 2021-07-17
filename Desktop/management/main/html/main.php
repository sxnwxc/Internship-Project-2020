<?php
$fullcalendar_path = "../fullcalendar-4.4.2/packages/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--required meta tags-->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Main</title>

  <!--calendar-->
  <link href="<?= $fullcalendar_path ?>/core/main.css" rel="stylesheet" />
  <link href="<?= $fullcalendar_path ?>/daygrid/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
  <!--   ส่วนที่เพิ่มเข้ามาใหม่-->
  <link href="<?= $fullcalendar_path ?>/timegrid/main.css" rel="stylesheet" />
  <link href="<?= $fullcalendar_path ?>/list/main.css" rel="stylesheet" />

  <script src="<?= $fullcalendar_path ?>/core/main.js"></script>
  <script src="<?= $fullcalendar_path ?>/daygrid/main.js"></script>
  <!--   ส่วนที่เพิ่มเข้ามาใหม่-->
  <script src="<?= $fullcalendar_path ?>/core/locales/th.js"></script>
  <script src="<?= $fullcalendar_path ?>/timegrid/main.js"></script>
  <script src="<?= $fullcalendar_path ?>/interaction/main.js"></script>
  <script src="<?= $fullcalendar_path ?>/list/main.js"></script>

  <!--ma CSS-->
  <!--โค้ด css ทั้งหน้า ถ้าจะแก้พวกรูปแบบของหน้า Home ทั้งหมด ไฟล์ข้างล่างนี้-->
  <link rel="stylesheet" href="../css/style-main.css" />
  <!--โค้ด reponsive ถ้าจะแก้พวกขนาดเวลาอยู่บนอุปกรณ์อื่นแก้-เพิ่มข้างล่างนี้-->
  <link rel="stylesheet" href="../responsive/res-main.css" />

  <!--module font google สามารถเรียกใช้ได้ทุกตัวอักษรของ google-->
  <!--font style google-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />

  <!--module css ของ bootstrap-->
  <!--bootstrap CSS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body onload="startTime()">
  <!--start bg-img-->
  <div class="bg-img">
    <!--โค้ดส่วนของพื้นหลัง ประกาศคลาส bg-img ไว้เป็นคลาสของพื้นหลังทั้งหน้า เปลี่ยนรูปได้ที่คลาสนี้-->

    <!--โค้ดส่วนของ navbar มีชื่อระบบ หน้าแรก ออกจากระบบ ถ้าจะแก้ส่วนหัวแก้เฉพาะที่คอมเม้นคั่นไว้-->
    <!--start header-->
    <div class="container">
      <header>
        <nav>

          <div class="nav-grid">
            <div class="logo">
              <!--logo left side-->
              <h1>
                <img src="../../images/logo_blue.png" alt="DOP" />ระบบติดตามโครงการสำหรับผู้บริหาร
              </h1>
            </div>
          </div>

        </nav>
      </header>
    </div>
    <!--end header-->
    <!--จบโค้ดส่วนของ navbar มีชื่อระบบ หน้าแรก ออกจากระบบ-->

    <!--โค้ดส่วนของ content มีคำทักทาย โปรไฟล์ ปุ่ม-->
    <!--start content-->
    <section class="content">
      <div class="container">
        <!--โค้ดส่วนปฏิทิน-->
        <!--start head content-->
        <div class="content-heading">
          <div class="content-heading-grid">
            <div id='calendar'></div>
          </div>
        </div>
        <!--end head content-->
        <!--จบโค้ดส่วนปฏิทิน-->
        <!--โค้ดส่วนของปุ่ม 2 ปุ่ม-->
        <!--start button content-->
        <div class="content-services">
          <div class="content-services-grid">
            <!--start button home-->
            <div class="content-services-item">
              <a href="../html/main.php">หน้าแรก</a>
            </div>

            <div class="content-services-item">
              <a href="../html/login.html">เข้าสู่ระบบ</a>
            </div>
            <!--end button home-->
          </div>
        </div>
        <!--end button content-->
        <!--จบโค้ดส่วนของปุ่ม 2 ปุ่ม-->
      </div>
    </section>
    <!--end content-->
    <!--จบโค้ดส่วนของ content มีคำทักทาย โปรไฟล์ ปุ่ม-->
  </div>
  <!--end bg-img-->

  <!-- JavaScript Calendar -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var calendar; // สร้างตัวแปรไว้ด้านนอก เพื่อให้สามารถอ้างอิงแบบ global ได้
    $(function() {
      // กำหนด element ที่จะแสดงปฏิทิน
      var calendarEl = $("#calendar")[0];

      // กำหนดการตั้งค่า
      calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ["interaction", "dayGrid", "timeGrid", "list"], // plugin ที่เราจะใช้งาน
        defaultView: "dayGridMonth", // ค้าเริ่มร้นเมื่อโหลดแสดงปฏิทิน
        header: {
          left: "prev,next today",
          center: "title",
          right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
        },
        events: {
          // เรียกใช้งาน event จาก json ไฟล์ ที่สร้างด้วย php
          url: "load.php",
          error: function() {},
        },

        eventLimit: true, // allow "more" link when too many events
        locale: "th", // กำหนดให้แสดงภาษาไทย
        firstDay: 0, // กำหนดวันแรกในปฏิทินเป็นวันอาทิตย์ 0 เป็นวันจันทร์ 1
        showNonCurrentDates: false, // แสดงที่ของเดือนอื่นหรือไม่
        eventTimeFormat: {
          // รูปแบบการแสดงของเวลา เช่น '14:30'
          hour: "2-digit",
          minute: "2-digit",
          meridiem: false,
        },
      });

      // แสดงปฏิทิน
      calendar.render();
    });
  </script>
  <script type="text/javascript">
    // ส่งค่า id ไปในฟังก์ชั่น
    function viewdetail(id) {
      // ก่อนที่ modal จะแสดง
      $("#calendarmodal").on("show.bs.modal", function(e) {
        var event = calendar.getEventById(id); // ดึงข้อมูล ผ่าน api
        $("#calendarmodal-project_name").html(event.project_name);
        $("#calendarmodal-detail").html(event.extendedProps.detail); // ข้อมูลเพิ่มเติมจะเรียกผ่าน extendedProps
      });
      $("#calendarmodal").modal();
      $row["url"] = "javascript:viewdetail('{$row['id']}');";
    }
  </script>
</body>

</html>