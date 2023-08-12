document.getElementById("openPopupButton1").addEventListener("click", function() {
    var popup = document.getElementById("calendarPopup1");
    if (popup.style.display === "none") {
        popup.style.display = "block";
    } else {
        popup.style.display = "none";
    }
});

document.getElementById("openPopupButton2").addEventListener("click", function() {
    var popup = document.getElementById("calendarPopup2");
    if (popup.style.display === "none") {
        popup.style.display = "block";
    } else {
        popup.style.display = "none";
    }
});

var selectedDate1 = null;
var selectedCell1 = null;
var currentYear1 = 2023;
var currentMonth1 = 0; // เริ่มต้นที่มกราคม

var selectedDate2 = null;
var selectedCell2 = null;
var currentYear2 = 2023;
var currentMonth2 = 0; // เริ่มต้นที่มกราคม

//สร้างตารางวันที่ และเดือน
function generateCalendar1(year, month) {
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

    var monthYearHeader = document.getElementById("currentMonthYear1");
    monthYearHeader.textContent = `${monthNames[month]} ${year+543}`;
    //เมื่อมีการคลิกที่วัน
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
                    if (selectedCell1 !== null) {
                        selectedCell1.classList.remove("selected-day");
                    }

                    selectedDate1 = {
                        day: this.textContent,
                        month: currentMonth1 + 1,
                        year: currentYear1 + 543
                    };
                    document.getElementById("openPopupButton1").textContent = `${selectedDate1.day}/${selectedDate1.month}/${selectedDate1.year}`;

                    this.classList.add("selected-day");
                    selectedCell1 = this;
                });
                currentDate++;
            }
            row.appendChild(cell);
        }
        tbody.appendChild(row);
    }

    table.appendChild(tbody);
    document.getElementById("calendar1").innerHTML = "";
    document.getElementById("calendar1").appendChild(table);
}

function generateCalendar2(year, month) {
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

    var monthYearHeader = document.getElementById("currentMonthYear2");
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
                    if (selectedCell2 !== null) {
                        selectedCell2.classList.remove("selected-day");
                    }

                    selectedDate2 = {
                        day: this.textContent,
                        month: currentMonth2 + 1,
                        year: currentYear2 + 543
                    };
                    document.getElementById("openPopupButton2").textContent = `${selectedDate2.day}/${selectedDate2.month}/${selectedDate2.year}`;

                    this.classList.add("selected-day");
                    selectedCell2 = this;
                });
                currentDate++;
            }
            row.appendChild(cell);
        }
        tbody.appendChild(row);
    }

    table.appendChild(tbody);
    document.getElementById("calendar2").innerHTML = "";
    document.getElementById("calendar2").appendChild(table);
}
//คำสั่งเดือนก่อนหน้า
document.getElementById("prevMonthButton1").addEventListener("click", function() {
    currentMonth1--;
    if (currentMonth1 < 0) {
        currentMonth1 = 11;
        currentYear1--;
    }
    generateCalendar1(currentYear1, currentMonth1);
});
//คำสั่งเดือนถัดไป
document.getElementById("nextMonthButton1").addEventListener("click", function() {
    currentMonth1++;
    if (currentMonth1 > 11) {
        currentMonth1 = 0;
        currentYear1++;
    }
    generateCalendar1(currentYear1, currentMonth1);
});

document.getElementById("prevMonthButton2").addEventListener("click", function() {
    currentMonth2--;
    if (currentMonth2 < 0) {
        currentMonth2 = 11;
        currentYear2--;
    }
    generateCalendar2(currentYear2, currentMonth2);
});

document.getElementById("nextMonthButton2").addEventListener("click", function() {
    currentMonth2++;
    if (currentMonth2 > 11) {
        currentMonth2 = 0;
        currentYear2++;
    }
    generateCalendar2(currentYear2, currentMonth2);
});

// รันฟังก์ชันเพื่อแสดงปฏิทินเมื่อเอกสารโหลดเสร็จ
document.addEventListener("DOMContentLoaded", function() {
    generateCalendar1(currentYear1, currentMonth1);
    generateCalendar2(currentYear2, currentMonth2);
});
// รับอ้างอิงถึงป็อปอัพท์แต่ละตัว
var popup1 = document.getElementById("calendarPopup1");
var popup2 = document.getElementById("calendarPopup2");

// รับอ้างอิงถึงปุ่มเปิดปฏิทิน
var openButton1 = document.getElementById("openPopupButton1");
var openButton2 = document.getElementById("openPopupButton2");

// เพิ่มการจับคลิกบนเอกสารทั้งหมด
document.addEventListener("click", function(event) {
    // ตรวจสอบว่าคลิกอยู่นอกขอบเขตของป็อปอัพท์ 1
    if (!popup1.contains(event.target) && !openButton1.contains(event.target)) {
        // ปิดป็อปอัพท์ 1
        popup1.style.display = "none";
    }
    // ตรวจสอบว่าคลิกอยู่นอกขอบเขตของป็อปอัพท์ 2
    if (!popup2.contains(event.target) && !openButton2.contains(event.target)) {
        // ปิดป็อปอัพท์ 2
        popup2.style.display = "none";
    }
});
document.getElementById("sidebarToggle").addEventListener("click", function() {
    var sidebar = document.getElementById("sidebar");
    var content = document.querySelector(".content");

    // Toggle the sidebar by changing the left position
    if (sidebar.style.left === "-250px") {
        sidebar.style.left = "0";
        content.style.marginLeft = "250px";
    } else {
        sidebar.style.left = "-250px";
        content.style.marginLeft = "0";
    }
});
// ปิด Sidebar เมื่อคลิกที่ส่วนอื่นของเอกสาร (content)
document.addEventListener("click", function(event) {
    var sidebar = document.getElementById("sidebar");
    var content = document.querySelector(".content");
    var sidebarToggle = document.getElementById("sidebarToggle");

    // เช็คว่าคลิกไปที่เอลิเมนต์ของ Sidebar หรือปุ่ม Toggle หรือไม่
    if (event.target !== sidebar && event.target !== sidebarToggle) {
        // ปิด Sidebar และปรับ margin-left ของ content
        sidebar.style.left = "-250px";
        content.style.marginLeft = "0";
    }
});