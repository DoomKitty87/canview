<?php
  $courseid = $_GET['id'];
  $usertoken = $_GET['token'];
  $response = file_get_contents("https://lms.pps.net/api/v1/courses/$courseid?access_token=$usertoken");
  $coursedata = json_decode($response, false);
  $courseInfo = "Students in course: $coursedata->total_students";
  echo $courseInfo;
?>