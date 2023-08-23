<?php
  $courseid = $_GET['id'];
  $response = file_get_contents("https://lms.pps.net/api/v1/courses/$courseid/users/self/progress?access_token=$USERTOKEN");
  $coursedata = json_decode($response, false);
  $coursepercent = $coursedata.requirement_completed_count / $coursedata.requirement_count;
  $courseInfo = "Progress to completion: $coursepercent%";
  echo $courseInfo;
?>