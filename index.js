// if (!document.cookie.match(/^(.*;)?\s*api_key\s*=\s*[^;]+(.*)?$/)) {
//     const api_key = prompt("Please input your API key: ");
//     document.cookie = `api_key=${api_key};`;
// } else {
//     const api_key = (document.cookie.match(/^(?:.*;)?\s*api_key\s*=\s*([^;]+)(?:.*)?$/)||[,null])[1]
// }

var userToken = prompt("Please input your token: ");

//Populate classlist with user's classes
const classlist = document.getElementById("classes");
const classes = [];
//Send post to this link
//"https://canvas.instructure.com/api/v1/courses?access_token=<ACCESS-TOKEN>"
fetch(`https://canvas.instructure.com/api/v1/courses?access_token=${userToken}?enrollment_state=active`)
  .then((response) => {classes = JSON.parse(response)});
//Fetch classes from canvas api
for (const cl in classes) {
  const classobj = document.createElement("li");
  classobj.innerHTML = cl.name;
  classlist.appendChild(classobj);
}