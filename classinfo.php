<?php
  $courseid = $_GET['id'];
  $usertoken = $_GET['token'];
  echo "https://lms.pps.net/api/v1/courses/$courseid/users/self/progress?access_token=$usertoken";
  $response = file_get_contents("https://lms.pps.net/api/v1/courses/$courseid/users/self/progress?access_token=$usertoken");
  //echo $response;
  $coursedata = json_decode($response, false);
  $coursepercent = $coursedata.requirement_completed_count / $coursedata.requirement_count;
  $courseInfo = "Progress to completion: $coursepercent%";
  //echo $courseInfo;
?>