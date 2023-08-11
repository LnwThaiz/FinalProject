<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Test.css">
</head>
<body>

<!-- ปุ่มแรกเปิดปฏิทิน -->
<button id="openPopupButton1">เปิดปฏิทิน 1</button>

<!-- ปุ่มที่สองเปิดปฏิทิน -->
<button id="openPopupButton2">เปิดปฏิทิน 2</button>

<!-- ป็อปอัพท์ปฏิทิน 1 -->
<div class="calendar-popup" id="calendarPopup1">
  <h2 id="currentMonthYear1">ปฏิทิน 1</h2>
  <div class="calendar-header">
    <button id="prevMonthButton1">ย้อนกลับ</button>
    <span id="currentMonthYear1">เดือน ปี</span>
    <button id="nextMonthButton1">ถัดไป</button>
  </div>
  <div class="calendar" id="calendar1">
  </div>
</div>

<!-- ป็อปอัพท์ปฏิทิน 2 -->
<div class="calendar-popup" id="calendarPopup2">
  <h2 id="currentMonthYear2">ปฏิทิน 2</h2>
  <div class="calendar-header">
    <button id="prevMonthButton2">ย้อนกลับ</button>
    <span id="currentMonthYear2">เดือน ปี</span>
    <button id="nextMonthButton2">ถัดไป</button>
  </div>
  <div class="calendar" id="calendar2">
  </div>
</div>

<script src ="popUpd.js"></script>
</body>
</html>