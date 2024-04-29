const daysTag = document.querySelector(".days"),
  currentDate = document.querySelector(".current-date"),
  prevNextIcon = document.querySelectorAll(".icons span");

// Getting new date, current year, and month
let date = new Date(),
  currYear = date.getFullYear(),
  currMonth = date.getMonth();

// Storing full names of all months in an array
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const events = {
  // Sample events with dummy dates. Adjust dates and event types as needed.
  "2024-04-15": { type: "mess-in", message: "Breakfast" },
  "2024-04-18": { type: "mess-out", message: "Lunch" },
  "2024-04-25": { type: "mess-in", message: "Dinner" },
};

const renderCalendar = () => {
  let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // Getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // Getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // Getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // Getting last date of previous month
  let liTag = "";

  for (let i = firstDayofMonth; i > 0; i--) { // Creating li of previous month last days
    liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
  }

  for (let i = 1; i <= lastDateofMonth; i++) {
    // Adding active class to li if the current day, month, and year matched
    let isToday =
      i === date.getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear()
        ? "active"
        : "";

    const event = events[`${currYear}-${currMonth + 1}-${i}`]; // Check for event on this date
    let eventClass = "";
    if (event) {
      eventClass = event.type === "mess-in" ? "event-green" : "event-red"; // Add class based on event type
    }

    liTag += `<li class="${isToday} ${eventClass}" data-date="${currYear}-${currMonth + 1}-${i}">${i}${
      event ? `<br><b>${event.message}</b>` : ""
    }</li>`;
  }

  for (let i = lastDayofMonth; i < 6; i++) { // Creating li of next month first days
    liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
  }

  currentDate.innerText = `${months[currMonth]} ${currYear}`; // Passing current month and year as currentDate text
  daysTag.innerHTML = liTag;
};

renderCalendar();

prevNextIcon.forEach((icon) => {
  // Getting prev and next icons, adding click event
  icon.addEventListener("click", () => {
    // Update currMonth based on clicked icon
    currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

    if (currMonth < 0 || currMonth > 11) {
      // Handle month overflow
      date = new Date(currYear, currMonth, new Date().getDate());
      currYear = date.getFullYear();
      currMonth = date.getMonth();
    } else {
      date = new Date();
    }
    renderCalendar();
  });
});