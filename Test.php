<!DOCTYPE html>
<html>
<head>
<style>
  /* สไตล์สำหรับป็อปอัพท์ */
  .calendar-popup {
    display: none;
    position: absolute;
    background-color: white;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  }

  .calendar-popup h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
  }

  .calendar {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .calendar-day {
    width: 14.28%; /* 1/7 ของ 100% */
    text-align: center;
    padding: 10px;
    border: 1px solid #ccc;
    cursor: pointer;
  }

  .calendar-day:hover {
    background-color: #f5f5f5;
  }

  .calendar-day:nth-child(7n), .calendar-day:last-child {
    border-right: none;
  }

  .calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }

  #openPopupButton {
    background-color: #007BFF;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  #openPopupButton:hover {
    background-color: #0056b3;
  }

  /* สไตล์สำหรับวันที่ที่ถูกคลิก */
  .selected-day {
    background-color: #007BFF;
    color: white;
  }
</style>
</head>
<body>

<!-- ปุ่มที่เมื่อคลิกจะเปิดป็อปอัพท์ -->
<button id="openPopupButton">เปิดปฏิทิน</button>

<!-- ป็อปอัพท์ปฏิทิน -->
<div class="calendar-popup" id="calendarPopup">
  <h2 id="currentMonthYear">ปฏิทิน</h2>
  <div class="calendar-header">
    <button id="prevMonthButton">ย้อนกลับ</button>
    <span id="currentMonthYear">เดือน ปี</span>
    <button id="nextMonthButton">ถัดไป</button>
  </div>
  <div class="calendar" id="calendar">
  </div>
</div>

<script>
document.getElementById("openPopupButton").addEventListener("click", function() {
  var popup = document.getElementById("calendarPopup");
  if (popup.style.display === "none") {
    popup.style.display = "block";
  } else {
    popup.style.display = "none";
  }
});

var selectedDate = null;
var selectedCell = null;
var currentYear = 2023;
var currentMonth = 0; // เริ่มต้นที่มกราคม

function generateCalendar(year, month) {
  var table = document.createElement("table");
  table.className = "calendar-table";

  var header = document.createElement("thead");
  var headerRow = document.createElement("tr");

  var daysOfWeek = ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"];
  for (var i = 0; i < 7; i++) {
    var th = document.createElement("th");
    th.textContent = daysOfWeek[i];
    headerRow.appendChild(th);
  }

  header.appendChild(headerRow);
  table.appendChild(header);

  var daysInMonth = new Date(year, month + 1, 0).getDate();
  var firstDayOfMonth = new Date(year, month, 1).getDay();
  var currentDate = 1;

  var tbody = document.createElement("tbody");

  var monthNames = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

  var monthYearHeader = document.getElementById("currentMonthYear");
  monthYearHeader.textContent = `${monthNames[month]} ${year+543}`;

  for (var i = 0; i < 6; i++) {
    var row = document.createElement("tr");
    for (var j = 0; j < 7; j++) {
      var cell = document.createElement("td");
      if (i === 0 && j < firstDayOfMonth) {
        cell.textContent = "";
      } else if (currentDate > daysInMonth) {
        break;
      } else {
        cell.textContent = currentDate;
        cell.addEventListener("click", function() {
          if (selectedCell !== null) {
            selectedCell.classList.remove("selected-day");
          }

          selectedDate = {
            day: this.textContent,
            month: currentMonth + 1,
            year: currentYear + 543
          };
          document.getElementById("openPopupButton").textContent = `${selectedDate.day}/${selectedDate.month}/${selectedDate.year}`;
          
          this.classList.add("selected-day");
          selectedCell = this;
        });
        currentDate++;
      }
      row.appendChild(cell);
    }
    tbody.appendChild(row);
  }

  table.appendChild(tbody);
  document.getElementById("calendar").innerHTML = "";
  document.getElementById("calendar").appendChild(table);
}

document.getElementById("prevMonthButton").addEventListener("click", function() {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  generateCalendar(currentYear, currentMonth);
});

document.getElementById("nextMonthButton").addEventListener("click", function() {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  generateCalendar(currentYear, currentMonth);
});

// รันฟังก์ชันเพื่อแสดงปฏิทินเมื่อเอกสารโหลดเสร็จ
document.addEventListener("DOMContentLoaded", function() {
  generateCalendar(currentYear, currentMonth);
});
</script>

</body>
</html>
