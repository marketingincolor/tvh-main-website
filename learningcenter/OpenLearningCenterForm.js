function OpenLearningCenter(url, this_location, this_class, start_date, start_time) {
  document.getElementById("this_class").value = this_class;
  document.getElementById("start_date").value = start_date;
  document.getElementById("start_time").value = start_time;
  document.openLearningCenterForm.submit();
}
